package auth

import (
	"crypto/tls"
	"net/http"
)

// InsecureHTTPClient is an HTTP client configured to skip TLS certificate verification.
// WARNING: This should only be used in development or testing environments.
// Never use in production as it makes the connection vulnerable to man-in-the-middle attacks.
var InsecureHTTPClient = &http.Client{
	Transport: &http.Transport{
		TLSClientConfig: &tls.Config{InsecureSkipVerify: true},
	},
}

// HTTPClientKeyType is a type alias for context keys related to HTTP clients.
type HTTPClientKeyType string

// HTTPClientKey is the context key used to store and retrieve HTTP client instances.
var HTTPClientKey HTTPClientKeyType = "http-client"
