package customers

import (
	customerspb "bitbucket.org/lexmodo/proto/customers"
	"google.golang.org/grpc"
)

// Client represents a gRPC client for interacting with the Customers service.
// It encapsulates the underlying CustomersClient protocol buffer generated client
// and provides a convenient interface for making RPC calls to the Customers service.
//
// Fields:
//   - Customers: The underlying gRPC client stub used to invoke Customers service methods.
type Client struct {
	Customers customerspb.CustomersClient
}

func New(address string) (*Client, error) {
	conn, err := grpc.Dial(address, grpc.WithInsecure())
	if err != nil {
		return nil, err
	}
	return &Client{
		Customers: customerspb.NewCustomersClient(conn),
	}, nil
}
