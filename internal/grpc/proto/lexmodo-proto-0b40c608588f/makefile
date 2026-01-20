gen_proto_go_category:
	protoc -I third_party/googleapis  --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  category.proto	
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv category.pb.go categories/category.pb.go
	mv category_grpc.pb.go categories/category_grpc.pb.go
#	protoc  -I third_party/googleapis    --grpc-gateway_out=logtostderr=true,paths=source_relative:. -I. category.proto
#	mv category.pb.gw.go categories



gen_proto_go_google:
	protoc -I third_party/googleapis  --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I coupons.proto -I.  google_merchant.proto	
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv google_merchant_grpc.pb.go google_merchant/google_merchant_grpc.pb.go
	mv google_merchant.pb.go google_merchant/google_merchant.pb.go
#	protoc  -I third_party/googleapis    --grpc-gateway_out=logtostderr=true,paths=source_relative:. -I. google_merchant.proto
#	mv category.pb.gw.go categories


gen_proto_go_grpc_log:

	protoc -I third_party/googleapis  --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I. grpc_log.proto	

	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv grpc_log.pb.go grpc_log/grpc_log.pb.go

gen_proto_go_template_builder:


	protoc -I third_party/googleapis  --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I. template_builder.proto	

	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv template_builder.pb.go template_builder/template_builder.pb.go



gen_proto_php_category:
	protoc -I third_party/googleapis  --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/lexmodo/grpc_plugins/grpc_php_plugin -I. category.proto

gen_proto_php_products:
	protoc -I third_party/googleapis --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/lexmodo/grpc_plugins/grpc_php_plugin -I. product.proto

gen_proto_go_products:

	protoc -I third_party/googleapis  -I money.proto --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  product.proto	
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv product.pb.go products/product.pb.go
	mv product_grpc.pb.go products/product_grpc.pb.go
	protoc  -I third_party/googleapis -I money.proto   --grpc-gateway_out=logtostderr=true,paths=source_relative:. -I. product.proto
	mv product.pb.gw.go products

gen_proto_go_country:
	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  countries.proto
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv countries.pb.go countries/countries.pb.go
	mv countries_grpc.pb.go countries/countries_grpc.pb.go
#	protoc  -I third_party/googleapis  --grpc-gateway_out=logtostderr=true,paths=source_relative:. -I. countries.proto
#	mv countries.pb.gw.go countries




gen_proto_php_pages:
	protoc -I third_party/googleapis --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/lexmodo/grpc_plugins/grpc_php_plugin -I. pages.proto


gen_proto_php_blogs:
	protoc -I third_party/googleapis --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/lexmodo/grpc_plugins/grpc_php_plugin -I. blogs.proto


gen_proto_go_blogs:
	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  blogs.proto	
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv blogs.pb.go blogs/blogs.pb.go
	mv blogs_grpc.pb.go blogs/blogs_grpc.pb.go

gen_proto_go_pages:
	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  pages.proto	
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv pages.pb.go pages/pages.pb.go
	mv pages_grpc.pb.go pages/pages_grpc.pb.go


gen_php_proto:

	protoc -I third_party/googleapis  --php_out=google --grpc_out=google --plugin=protoc-gen-grpc=/home/mido/temp/grpc/cmake/build/grpc_php_plugin -I.  *.proto	

gen_php_customers_proto:

	protoc -I third_party/googleapis  --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/mido/temp/grpc/cmake/build/grpc_php_plugin -I.  customers.proto	

gen_proto_php_sitemap:

	protoc -I third_party/googleapis  --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/mido/temp/grpc/cmake/build/grpc_php_plugin -I.  sitemap.proto	

gen_proto_go_sitemap:
	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  sitemap.proto	
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv sitemap.pb.go sitemap/sitemap.pb.go
	mv sitemap_grpc.pb.go sitemap/sitemap_grpc.pb.go

gen_proto_go_customer:

	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  customers.proto	

	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv customers.pb.go customers/customers.pb.go
	mv customers_grpc.pb.go customers/customers_grpc.pb.go
#	protoc  -I third_party/googleapis  --grpc-gateway_out=logtostderr=true,paths=source_relative:. -I. customers.proto
#	mv customers.pb.gw.go customers


gen_proto_php_carts:

	protoc -I third_party/googleapis -I orders.proto --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/mido/temp/grpc/cmake/build/grpc_php_plugin  -I.  cart.proto	

gen_proto_go_carts:

	protoc -I third_party/googleapis -I invoice.proto --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  cart.proto	
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv cart.pb.go cart/cart.pb.go
	mv cart_grpc.pb.go cart/cart_grpc.pb.go

gen_proto_go_users:

	protoc --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  users.proto	
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv users.pb.go users/users.pb.go
	mv users_grpc.pb.go users/users_grpc.pb.go

gen_proto_php_ship:

	protoc -I third_party/googleapis -I cart.proto -I money.proto -I customers.proto --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/mido/temp/grpc/cmake/build/grpc_php_plugin  -I.  shipping.proto	

gen_proto_go_ship:
	protoc -I third_party/googleapis  -I cart.proto -I money.proto -I customers.proto  --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  shipping.proto
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv shipping.pb.go shipping/shipping.pb.go
	mv shipping_grpc.pb.go shipping/shipping_grpc.pb.go
#	protoc  -I third_party/googleapis  -I customers.proto --grpc-gateway_out=logtostderr=true,paths=source_relative:. -I. shipping.proto
#	mv shipping.pb.gw.go shipping


gen_proto_go_plugin:

	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  plugins.proto	
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv plugins.pb.go plugins/plugins.pb.go
	mv plugins_grpc.pb.go plugins/plugins_grpc.pb.go

gen_proto_php_payments:
	protoc -I third_party/googleapis  -I invoice_items.proto -I order_modules.proto -I customers.proto -I money.proto -I cart.proto  --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/mido/temp/grpc/cmake/build/grpc_php_plugin -I.  payments.proto


gen_proto_go_payments:
	protoc -I third_party/googleapis  -I invoice_items.proto -I order_modules.proto -I customers.proto -I money.proto -I cart.proto  --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  payments.proto
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv payments.pb.go payments/payments.pb.go
	mv payments_grpc.pb.go payments/payments_providers_grpc.pb.go
# 	protoc  -I third_party/googleapis  --grpc-gateway_out=logtostderr=true,paths=source_relative:. -I. payments.proto
# 	mv payments.pb.gw.go payments


gen_proto_php_payment_providers:
	protoc -I third_party/googleapis   --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/mido/temp/grpc/cmake/build/grpc_php_plugin -I.  payment_providers.proto


gen_proto_go_payment_providers:
	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  payment_providers.proto
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv payment_providers.pb.go payment_providers/payment_providers.pb.go
	mv payment_providers_grpc.pb.go payment_providers/payment_providers_grpc.pb.go
#	protoc  -I third_party/googleapis  --grpc-gateway_out=logtostderr=true,paths=source_relative:. -I. payment_providers.proto
#	mv payment_providers.pb.gw.go payment_providers
	
gen_proto_go_register:

	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  register.proto	
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv register.pb.go register/register.pb.go
	mv register_grpc.pb.go register/register_grpc.pb.go

gen_proto_go_menu:
	protoc -I third_party/googleapis -I orders.proto -I orders.proto --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  menu.proto	
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv menu.pb.go menu/menu.pb.go
	mv menu_grpc.pb.go menu/menu_grpc.pb.go

gen_proto_php_menu:
	protoc -I third_party/googleapis --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/lexmodo/grpc_plugins/grpc_php_plugin -I. menu.proto


gen_proto_go_ship_plugin:
	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I. shipping_plugin.proto
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv shipping_plugin.pb.go shipping_plugin/shipping_plugin.pb.go
	mv shipping_plugin_grpc.pb.go shipping_plugin/shipping_plugin_grpc.pb.go
# 	protoc  -I third_party/googleapis  --grpc-gateway_out=logtostderr=true,paths=source_relative:. -I. shipping_plugin.proto
# 	mv shipping_plugin.pb.gw.go shipping_plugin

gen_proto_php_orders:

	protoc -I third_party/googleapis -I invoice_items.proto -I payments.proto -I money.proto -I customers.proto -I cart.proto -I coupons.proto -I store_credit.proto  -I shipping.proto --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/mido/temp/grpc/cmake/build/grpc_php_plugin -I.  orders.proto	

gen_proto_go_orders:
	
	protoc -I third_party/googleapis -I invoice_items.proto -I payments.proto -I money.proto -I payments.proto -I customers.proto -I cart.proto -I coupons.proto -I store_credit.proto  -I shipping.proto --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  orders.proto	
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv orders.pb.go orders/orders.pb.go
	mv orders_grpc.pb.go orders/orders_grpc.pb.go

#	protoc  -I third_party/googleapis  --grpc-gateway_out=logtostderr=true,paths=source_relative:. -I. orders.proto
#	mv orders.pb.gw.go orders


gen_proto_php_locations:
	protoc -I third_party/googleapis     --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/mido/temp/grpc/cmake/build/grpc_php_plugin  -I.  locations.proto

gen_proto_go_locations:
	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  locations.proto
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv locations.pb.go locations/locations.pb.go
	mv locations_grpc.pb.go locations/locations_grpc.pb.go
# 	protoc  -I third_party/googleapis  --grpc-gateway_out=logtostderr=true,paths=source_relative:. -I. locations.proto
# 	mv locations.pb.gw.go locations


gen_proto_php_settings:
	protoc -I third_party/googleapis  --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/mido/temp/grpc/cmake/build/grpc_php_plugin  -I.  settings.proto	

gen_proto_go_settings:
	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  settings.proto	
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv settings.pb.go settings/settings.pb.go
	mv settings_grpc.pb.go settings/settings_grpc.pb.go
#	protoc  -I third_party/googleapis  --grpc-gateway_out=logtostderr=true,paths=source_relative:. -I. proto settings.proto
#	mv settings.pb.gw.go settings

gen_proto_php_money:
	protoc -I third_party/googleapis --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/mido/temp/grpc/cmake/build/grpc_php_plugin -I.  money.proto	

gen_php_money:
	protoc -I third_party/googleapis --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/lexmodo/grpc_plugins/grpc_php_plugin -I. money.proto


gen_proto_go_money:

	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  money.proto
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv money.pb.go money/money.pb.go

gen_proto_php_store_credit:
		protoc -I third_party/googleapis  -I orders.proto --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/mido/temp/grpc/cmake/build/grpc_php_plugin -I.  store_credit.proto	

gen_proto_go_store_credit:

	protoc -I third_party/googleapis -I invoice.proto --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  store_credit.proto	
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv store_credit.pb.go store_credit/store_credit.pb.go
	mv store_credit_grpc.pb.go store_credit/store_credit_grpc.pb.go

gen_proto_go_taxes:
	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  taxes.proto
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv taxes.pb.go taxes/taxes.pb.go
	mv taxes_grpc.pb.go taxes/taxes_grpc.pb.go

gen_proto_php_coupons:
	protoc -I third_party/googleapis -I orders.proto --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/mido/temp/grpc/cmake/build/grpc_php_plugin  -I.  coupons.proto	

gen_proto_go_coupons:
	protoc -I third_party/googleapis -I orders.proto  --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  coupons.proto	
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv coupons.pb.go coupons/coupons.pb.go
	mv coupons_grpc.pb.go coupons/coupons_grpc.pb.go

gen_php_redis:
	protoc -I third_party/googleapis --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/lexmodo/grpc_plugins/grpc_php_plugin -I. orders.proto

gen_proto_go_order_redis:
	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.   order_redis.proto
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv order_redis.pb.go order_redis/order_redis.pb.go

gen_proto_go_payment_redis:
	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.   payment_redis.proto
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv payment_redis.pb.go payment_redis/payment_redis.pb.go

gen_proto_go_template_redis:

	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  template_redis.proto	

	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv template_redis.pb.go template_redis/template_redis.pb.go


gen_proto_go_email_notification_redis:

	protoc -I third_party/googleapis -I orders.proto -I customers.proto --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  email_notification_redis.proto	

	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv email_notification_redis.pb.go email_notification_redis/email_notification_redis.pb.go


gen_proto_go_plugin_redis:

	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  plugin_redis.proto	
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv plugin_redis.pb.go plugin_redis/plugin_redis.pb.go

gen_proto_go_customer_redis:

	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  customer_redis.proto	

	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv customer_redis.pb.go customer_redis/customer_redis.pb.go
	

gen_proto_go_shipping_redis:
	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I. shipping_redis.proto
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv shipping_redis.pb.go shipping_redis/shipping_redis.pb.go


gen_proto_go_cdn_files:
	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I. cdn_files.proto	
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv cdn_files.pb.go cdn_files/cdn_files.pb.go


gen_proto_go_template_settings:
	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I. template_settings.proto	
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv template_settings.pb.go template_settings/template_settings.pb.go
	

gen_proto_php_template_settings:
	protoc -I third_party/googleapis --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/mido/temp/grpc/cmake/build/grpc_php_plugin  -I.  template_settings.proto	

gen_proto_php_template:
	protoc -I third_party/googleapis -I template_settings.proto --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/mido/temp/grpc/cmake/build/grpc_php_plugin  -I.  template.proto	

gen_proto_go_template:
	protoc -I third_party/googleapis  -I template_settings.proto --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I. template.proto	

	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv template.pb.go template/template.pb.go
	mv template_grpc.pb.go template/template_grpc.pb.go
	protoc  -I third_party/googleapis  --grpc-gateway_out=logtostderr=true,paths=source_relative:. -I. template.proto
	mv template.pb.gw.go template

gen_proto_go_client:
	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I. clients.proto	
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv clients.pb.go clients/clients.pb.go
	mv clients_grpc.pb.go clients/clients_grpc.pb.go

gen_proto_go_banner:
	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I. banner.proto	

	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv banner.pb.go banner/banner.pb.go
	mv banner_grpc.pb.go banner/banner_grpc.pb.go

gen_proto_go_image_handler:
	protoc -I third_party/googleapis  --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I. image_handler.proto	

	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv image_handler.pb.go image_handler/image_handler.pb.go
	mv image_handler_grpc.pb.go image_handler/image_handler_grpc.pb.go


gen_proto_php_image_handler:
	protoc -I third_party/googleapis -I template_settings.proto --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/mido/temp/grpc/cmake/build/grpc_php_plugin  -I.  image_handler.proto


gen_proto_go_internal:
	protoc -I third_party/googleapis  --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  internalsystem.proto
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv internalsystem.pb.go internalsystem/internalsystem.pb.go


	
gen_proto_go_address:
	protoc -I third_party/googleapis  --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I.  address.proto
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv address.pb.go address/address.pb.go

gen_proto_php_address:
	protoc -I third_party/googleapis  --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/mido/temp/grpc/cmake/build/grpc_php_plugin -I.  address.proto	

gen_proto_php_labels:
	protoc -I third_party/googleapis     --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/mido/temp/grpc/cmake/build/grpc_php_plugin  -I. labels.proto

gen_proto_go_labels:
	protoc -I third_party/googleapis  --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I. labels.proto
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv labels.pb.go labels/labels.pb.go


gen_proto_go_order_packing_slip_redis:

	protoc -I users.proto -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I. order_packing_slip_redis.proto	

	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv order_packing_slip_redis.pb.go order_packing_slip_redis/order_packing_slip_redis.pb.go


gen_proto_go_groups_redis:

	protoc -I users.proto -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I. group_redis.proto	

	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv group_redis.pb.go group_redis/group_redis.pb.go

gen_proto_go_category_redis:

	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I. category_redis.proto	

	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv category_redis.pb.go category_redis/category_redis.pb.go

gen_proto_go_product_redis:


	protoc -I third_party/googleapis  --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I. product_redis.proto	

	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv product_redis.pb.go product_redis/product_redis.pb.go


gen_proto_go_template_preview:


	protoc -I third_party/googleapis  --go_out=. --go_opt=paths=source_relative  --go-grpc_out=. --go-grpc_opt=paths=source_relative -I. template_preview.proto	

	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv template_preview.pb.go template_preview/template_preview.pb.go

gen_proto_go_location_redis:
	protoc -I third_party/googleapis -I locations.proto --go_out=. --go_opt=paths=source_relative --go-grpc_out=. --go-grpc_opt=paths=source_relative -I. location_redis.proto
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv location_redis.pb.go location_redis/location_redis.pb.go


gen_proto_php_invoice_items:
	protoc -I third_party/googleapis --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/mido/temp/grpc/cmake/build/grpc_php_plugin -I. invoice_items.proto	


gen_proto_go_invoice_items:
	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative --go-grpc_out=. --go-grpc_opt=paths=source_relative -I. invoice_items.proto	
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv invoice_items.pb.go invoice_items/invoice_items.pb.go


gen_proto_php_order_modules:
	protoc -I third_party/googleapis --php_out=php/ --grpc_out=php/ --plugin=protoc-gen-grpc=/home/mido/temp/grpc/cmake/build/grpc_php_plugin -I. order_modules.proto	

gen_proto_go_order_modules:
	protoc -I third_party/googleapis --go_out=. --go_opt=paths=source_relative --go-grpc_out=. --go-grpc_opt=paths=source_relative -I. order_modules.proto
	ls *.pb.go | xargs -n1 -IX bash -c 'sed s/,omitempty// X > X.tmp && mv X{.tmp,}'
	mv order_modules.pb.go order_modules/order_modules.pb.go
