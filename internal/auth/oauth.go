package auth

import (
	"os"

	"golang.org/x/oauth2"
)

// OAuthConfig holds the OAuth2 configuration.
var OAuthConfig *oauth2.Config

// InitOAuth initializes the OAuth2 configuration using environment variables.
func InitOAuth() {
	OAuthConfig = &oauth2.Config{
		ClientID:     os.Getenv("APP_CLIENT_ID"), // Application's client ID
		ClientSecret: os.Getenv("APP_SECRET"),    // Application's client secret
		RedirectURL:  os.Getenv("REDIRECT_URI"),  // URL to redirect after authorization
		Endpoint: oauth2.Endpoint{
			AuthURL:  os.Getenv("AUTHORIZE_URL"), // URL for authorization
			TokenURL: os.Getenv("TOKEN_URL"),     // URL for token exchange
		},
		Scopes: []string{"customers_write"}, // Scopes for the OAuth2 request
	}
}

// OAuthOptions returns a slice of options for the authorization code flow.
func OAuthOptions() []oauth2.AuthCodeOption {
	return []oauth2.AuthCodeOption{
		oauth2.AccessTypeOffline,                         // Request offline access
		oauth2.SetAuthURLParam("plugin_code", "Numinix"), // Custom parameter for the authorization URL
	}
}
