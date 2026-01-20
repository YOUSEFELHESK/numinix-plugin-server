package auth

import (
	"context"
	"fmt"
	"log"
	"time"

	"golang.org/x/oauth2"
)

// Tokens stores OAuth access/refresh tokens by store ID.
var Tokens = map[int]*oauth2.Token{}

// Sessions stores JWT session tokens by store ID.
var Sessions = map[int]string{}

// HasValidToken checks if the token for the given store ID is valid.
func HasValidToken(storeID int) bool {
	tok, ok := Tokens[storeID]
	return ok && tok.Valid()
}

const refreshBefore = 2 * time.Minute // Time before expiry to refresh the token

// GetAccessToken retrieves a valid access token, refreshing it if necessary.
func GetAccessToken(storeID int) (string, bool) {
	tok, ok := Tokens[storeID]
	if !ok {
		return "", false // Token not found
	}

	fmt.Println("Remaining:", time.Until(tok.Expiry)) // Log remaining time until expiry

	if time.Until(tok.Expiry) < refreshBefore {
		if err := RefreshAccessToken(storeID); err != nil {
			return "", false // Refresh failed
		}
		tok = Tokens[storeID] // Get the refreshed token
	}

	if !tok.Valid() {
		return "", false // Token is not valid
	}

	return tok.AccessToken, true // Return the access token
}

// SaveToken stores the OAuth token for the given store ID.
func SaveToken(storeID int, token *oauth2.Token) {
	Tokens[storeID] = token
}

// SaveJWTSession stores the JWT session token for the given store ID.
func SaveJWTSession(storeID int, token string) {
	Sessions[storeID] = token
}

// GetJWTSession retrieves the JWT session token for the given store ID.
func GetJWTSession(storeID int) (string, bool) {
	tok, ok := Sessions[storeID]
	return tok, ok // Return the session token if found
}

// RefreshAccessToken refreshes the access token using the refresh token.
func RefreshAccessToken(storeID int) error {
	tok, ok := Tokens[storeID]
	if !ok {
		return fmt.Errorf("no token for store %d", storeID) // Token not found
	}

	if tok.RefreshToken == "" {
		return fmt.Errorf("no refresh token available") // No refresh token
	}
	log.Println("Refreshing access token for store:", storeID)

	// Create a token source that will handle the refresh automatically
	src := OAuthConfig.TokenSource(context.Background(), tok)
	newTok, err := src.Token()
	if err != nil {
		return err // Error during token refresh
	}

	Tokens[storeID] = newTok // Store the new token
	return nil
}
