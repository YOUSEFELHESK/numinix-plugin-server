package customers

import (
	"context"
	"fmt"
	"log"
	"time"

	customerspb "bitbucket.org/lexmodo/proto/customers"
	"google.golang.org/grpc/metadata"
)

// FetchCustomer retrieves a single customer by its unique ID using gRPC.
// It attaches authentication and store metadata, performs the request,
// and logs basic customer information if successful.
func FetchCustomer(
	customersClient customerspb.CustomersClient,
	storeID int,
	accessToken string,
	customerID string,
) {
	// Create a context with timeout to avoid hanging gRPC calls
	ctx, cancel := context.WithTimeout(context.Background(), 5*time.Second)
	defer cancel()

	// Attach required metadata (authorization + store identifier)
	md := metadata.New(map[string]string{
		"authorization": "Bearer " + accessToken,
		"x-client-id":   fmt.Sprintf("%d", storeID),
	})
	ctx = metadata.NewOutgoingContext(ctx, md)

	// Build gRPC request payload
	req := &customerspb.CustomerIdRequest{
		CustomerId: customerID,
	}

	// Call Customers service
	res, err := customersClient.GetCustomerByID(ctx, req)
	if err != nil {
		log.Println("gRPC Error:", err)
		return
	}

	// Extract and log customer data
	customer := res.GetCustomer()
	log.Printf(
		"Customer fetched | ID: %s | Name: %s | Email: %s\n",
		customer.GetCustomerId(),
		customer.GetCustomerFullName().GetValue(),
		customer.GetCustomerEmail().GetValue(),
	)
}

// FetchCustomerListingWithPagination retrieves customers incrementally using
// PIT (Point-In-Time) pagination. Each iteration fetches a fixed number of
// records (displayResult) until no further data is available.
func FetchCustomerListingWithPagination(
	customersClient customerspb.CustomersClient,
	storeID int,
	accessToken string,
	ruleID string,
	displayResult uint32,
) {
	// Prepare static metadata reused across pagination requests
	md := metadata.New(map[string]string{
		"authorization": "Bearer " + accessToken,
		"x-client-id":   fmt.Sprintf("%d", storeID),
	})

	// PIT cursor used to fetch the next page
	var pit string

	for {
		// Create a new context per request to ensure proper timeout handling
		ctx, cancel := context.WithTimeout(context.Background(), 5*time.Second)
		ctx = metadata.NewOutgoingContext(ctx, md)

		// Build pagination request
		req := &customerspb.CustomerListing{
			RuleId:        ruleID,
			DisplayResult: displayResult,
			Pit:           pit,
		}

		// Execute gRPC call
		res, err := customersClient.GetCustomerListing(ctx, req)
		cancel()

		if err != nil {
			log.Println("gRPC Error:", err)
			return
		}

		// Print only the current page results
		printListing(res)

		// Update PIT for the next iteration
		pit = res.GetCustomersListing().GetPit()

		// If no PIT is returned, pagination is complete
		if pit == "" {
			break
		}

		// If all results have been fetched, stop pagination
		if res.GetCustomersListing().GetTotalResult() <= displayResult {
			break
		}
	}

	log.Println("Finished fetching customer listing with pagination.")
}

// printListing logs customer listing metadata and prints
// the customers returned in the current pagination batch.
func printListing(res *customerspb.ResultResponse) {
	listing := res.GetCustomersListing().GetCustomerListing()

	log.Printf(
		"Total: %d | Display: %d | PIT: %s\n",
		res.CustomersListing.TotalResult,
		res.CustomersListing.DisplayResult,
		res.CustomersListing.Pit,
	)

	for _, c := range listing {
		log.Printf(
			"ID: %s | Name: %s | Email: %s\n",
			c.GetCustomerId(),
			c.GetCustomerFullName().GetValue(),
			c.GetCustomerEmail().GetValue(),
		)
	}
}
