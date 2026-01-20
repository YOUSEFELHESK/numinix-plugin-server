package auth

import (
	"fmt"
	"os"

	"github.com/golang-jwt/jwt/v5"
)

// Claims represents the structure of the JWT claims.
type Claims struct {
	Iss     string `json:"iss"`          // Issuer of the token
	StoreID int    `json:"store_id"`     // Store ID associated with the token
	Extra   struct { // Additional information
		AdminEmail string `json:"admin_email"` // Email of the admin
		AdminName  string `json:"admin_name"`  // Name of the admin
	} `json:"extra"`
	jwt.RegisteredClaims // Embeds standard JWT claims
}

// VerifySession validates the JWT token and extracts claims.
func VerifySession(tokenStr string) (*Claims, error) {
	secret := os.Getenv("APP_SECRET") // Retrieve the secret key from environment variables

	// Parse the token and validate its claims
	token, err := jwt.ParseWithClaims(tokenStr, &Claims{}, func(t *jwt.Token) (interface{}, error) {
		return []byte(secret), nil // Return the secret key for validation
	})
	if err != nil || !token.Valid {
		return nil, fmt.Errorf("invalid token") // Return error if token is invalid
	}

	claims, ok := token.Claims.(*Claims) // Assert claims to the Claims type
	if !ok {
		return nil, fmt.Errorf("invalid claims") // Return error if claims are not valid
	}

	// Validate the issuer of the token
	if claims.Iss != os.Getenv("ISSUER") {
		return nil, fmt.Errorf("invalid issuer") // Return error if issuer is invalid
	}

	return claims, nil // Return the validated claims
}
