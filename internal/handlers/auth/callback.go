// Package authhandlers provides HTTP handlers for authentication-related operations,
// including OAuth callbacks and session management for the plugin server.
package authhandlers

import (
	"context"
	"fmt"
	"net/http"

	"plugin-server/internal/auth"
	"plugin-server/internal/services/customers"

	customerspb "bitbucket.org/lexmodo/proto/customers"
	"golang.org/x/oauth2"
)

// CallbackHandler handles OAuth callback and plugin initialization requests.
type CallbackHandler struct {
	CustomersClient customerspb.CustomersClient
}

// ServeHTTP processes HTTP requests for authentication callbacks.
// It handles two main scenarios: OAuth token exchange and plugin session initialization.
func (h *CallbackHandler) ServeHTTP(w http.ResponseWriter, r *http.Request) {
	// Extract query parameters from the request URL
	code := r.URL.Query().Get("code")
	state := r.URL.Query().Get("state")
	sessionToken := r.URL.Query().Get("session_token")

	// Handle OAuth authorization code exchange
	if code != "" {
		// Retrieve the store ID associated with the state parameter
		storeID, ok := auth.GetStoreIDFromState(state)
		if !ok {
			http.Error(w, "Invalid or expired state", http.StatusBadRequest)
			return
		}

		// Exchange the authorization code for an access token
		ctx := context.WithValue(context.Background(), oauth2.HTTPClient, auth.InsecureHTTPClient)
		token, err := auth.OAuthConfig.Exchange(ctx, code)
		if err != nil {
			http.Error(w, "Token exchange failed: "+err.Error(), http.StatusUnauthorized)
			return
		}

		// Save the token and clean up the state
		auth.SaveToken(storeID, token)
		auth.DeleteState(state)

		// Redirect to the plugin page
		http.Redirect(
			w,
			r,
			"https://devadmin.lexmodo.com/plugins/Numinix",
			http.StatusSeeOther,
		)
		return
	}

	// Handle plugin session initialization
	if sessionToken != "" {
		// Verify the session token and extract claims
		claims, err := auth.VerifySession(sessionToken)
		if err != nil {
			http.Error(w, "Invalid session token", http.StatusUnauthorized)
			return
		}

		// Extract store ID and save the JWT session
		storeID := claims.StoreID
		auth.SaveJWTSession(storeID, sessionToken)

		// Check if a valid OAuth token exists for the store
		if auth.HasValidToken(storeID) {
			// Retrieve the access token
			accessToken, ok := auth.GetAccessToken(storeID)
			if !ok {
				http.Error(w, "No access token", http.StatusUnauthorized)
				return
			}

			// Fetch customer data asynchronously and synchronously for listing
			go customers.FetchCustomer(
				h.CustomersClient,
				storeID,
				accessToken,
				"d0647857-20e7-51a4-8149-7086061867d6", // customer_id
			)
			customers.FetchCustomerListingWithPagination(
				h.CustomersClient,
				storeID,
				accessToken,
				"c8aaed70-f70a-56ba-81e4-95502c0e52c4", // rule_id
				3,                                      // display_result
			)

			// Respond with plugin ready status
			fmt.Fprintf(w, "✅ Plugin Ready<br>Store: %d<br>Admin: %s", storeID, claims.Extra.AdminName)
			return
		}

		// If no valid token, initiate OAuth flow
		state := auth.GenerateState()
		auth.SaveState(storeID, state)

		authURL := auth.OAuthConfig.AuthCodeURL(
			state,
			auth.OAuthOptions()...,
		)

		// Redirect the parent window to the OAuth URL
		fmt.Fprintf(w, `<script>window.parent.location.href="%s"</script>`, authURL)
		return
	}

	// If neither code nor sessionToken is provided, return an error
	http.Error(w, "Invalid request", http.StatusBadRequest)
}
