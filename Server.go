package main

import (
	"log"
	"net/http"

	auth "plugin-server/internal/auth"
	"plugin-server/internal/grpc/customers"
	authhandlers "plugin-server/internal/handlers/auth"

	"github.com/joho/godotenv"
)

func main() {
	// Load environment variables
	if err := godotenv.Load(); err != nil {
		log.Println("Warning: .env file not found, reading from system env")
	}

	// Initialize OAuth
	auth.InitOAuth()

	// Connect to Customers gRPC service
	customersClient, err := customers.New("192.168.1.99:7000")
	if err != nil {
		log.Fatal(err)
	}

	// Auth Handlers
	rootHandler := &authhandlers.RootHandler{}
	callbackHandler := &authhandlers.CallbackHandler{
		CustomersClient: customersClient.Customers,
	}

	// HTTP routes
	http.Handle("/", rootHandler)
	http.Handle("/callback", callbackHandler)

	// Start server
	log.Println("🚀 Plugin server running on :9999")
	log.Fatal(http.ListenAndServe(":9999", nil))
}
