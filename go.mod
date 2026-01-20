module plugin-server

go 1.25.5

require (
	bitbucket.org/lexmodo/proto v0.0.0-00010101000000-000000000000
	github.com/golang-jwt/jwt/v5 v5.3.0
	golang.org/x/oauth2 v0.34.0
	google.golang.org/grpc v1.78.0
)

require (
	github.com/golang/protobuf v1.5.4 // indirect
	github.com/grpc-ecosystem/grpc-gateway v1.16.0 // indirect
	google.golang.org/genproto v0.0.0-20241118233622-e639e219e697 // indirect
	google.golang.org/genproto/googleapis/api v0.0.0-20251029180050-ab9386a59fda // indirect
)

replace bitbucket.org/lexmodo/proto => ./internal/grpc/proto/lexmodo-proto-0b40c608588f

require (
	github.com/joho/godotenv v1.5.1
	golang.org/x/net v0.47.0 // indirect
	golang.org/x/sys v0.38.0 // indirect
	golang.org/x/text v0.31.0 // indirect
	google.golang.org/genproto/googleapis/rpc v0.0.0-20251029180050-ab9386a59fda // indirect
	google.golang.org/protobuf v1.36.11 // indirect
)
