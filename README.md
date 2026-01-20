# Numinix Plugin Server

A local plugin server for the Lexmodo platform that handles OAuth2 authentication and gRPC communication with Lexmodo customer services.

## Description

This server enables secure authentication and customer data retrieval through OAuth2 and gRPC endpoints, supporting customer ID lookups and paginated customer listings.

## Features

- OAuth2 authentication flow
- JWT session verification
- gRPC integration with Lexmodo services
- PIT pagination support
- Token storage and refresh

## Project Structure

```
plugin/
├── internal/
│   ├── auth/           # OAuth2 flow, JWT, Token store, & State management
│   ├── grpc/           # Generated Proto files & gRPC Client
│   ├── handlers/       # HTTP entry points (Callback & Root)
│   └── services/       # Business logic (Customer gRPC calls & Pagination)
├── Server.go           # Application entry point
├── go.mod              # Dependencies
└── .env                # Environment configuration
```

## Installation

1. Install dependencies:
    ```bash
    go mod tidy
    ```

2. Configure environment variables in `.env`:
    ```env
    PORT=9999
    APP_CLIENT_ID=<your_client_id>
    APP_SECRET=<your_secret>
    REDIRECT_URI=http://localhost:9999/callback
    AUTHORIZE_URL=https://devadmin.lexmodo.com/oauth/provider/oauth2/auth
    TOKEN_URL=https://devadmin.lexmodo.com/oauth/provider/oauth2/token
    ISSUER=https://devadmin.lexmodo.com
    PLUGIN_CODE=Numinix
    PLUGIN_TYPE=CUSTOM
    PLUGIN_NAME=Numinix Plugin
    PLUGIN_SCOPE=customers_write
    ```

3. Run the server:
    ```bash
    go run Server.go
    ```

## API Endpoints

- **GetCustomerByID** - Retrieve customer data by ID
- **GetCustomerListing** - List customers with PIT pagination


## How It Works

1. **Handshake**: Lexmodo sends a `session_token` to the server.
2. **Verification**: Server verifies the JWT session.
3. **Logic**:
   - If OAuth token exists → Fetch data from gRPC.
   - If no token → Redirect to OAuth2 flow.
4. **Storage**: Tokens are saved, and the user is redirected back to the store.

## Security Note

`InsecureSkipVerify` is used only for development. Remove for production environments.

## Contributing

Yousef Elhesk (Main Developer)



