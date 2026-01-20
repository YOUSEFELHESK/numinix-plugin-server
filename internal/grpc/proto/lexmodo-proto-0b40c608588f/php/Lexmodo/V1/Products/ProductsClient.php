<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lexmodo\V1\Products;

/**
 */
class ProductsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ProductSearch(\Lexmodo\V1\Products\ProductSearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/ProductSearch',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductIDByVariantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ProductsExist(\Lexmodo\V1\Products\ProductIDByVariantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/ProductsExist',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ProductSearchableVariables(\Lexmodo\V1\Products\ProductSearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/ProductSearchableVariables',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConfrimProductRuleExists(\Lexmodo\V1\Products\ProductRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/ConfrimProductRuleExists',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateProductRule(\Lexmodo\V1\Products\ProductRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/CreateProductRule',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteProductRule(\Lexmodo\V1\Products\ProductRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/DeleteProductRule',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductEmptyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetProductRule(\Lexmodo\V1\Products\ProductEmptyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/GetProductRule',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function InternalUpdateProductModification(\Lexmodo\V1\Products\ProductInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/InternalUpdateProductModification',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetChildProductVariants(\Lexmodo\V1\Products\ProductInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/GetChildProductVariants',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetProductByID(\Lexmodo\V1\Products\ProductInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/GetProductByID',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLastProductUpdate(\Lexmodo\V1\Products\ProductInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/GetLastProductUpdate',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductIDByVariantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetProductByIDWithVariantArray(\Lexmodo\V1\Products\ProductIDByVariantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/GetProductByIDWithVariantArray',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductListingInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetProductListingByID(\Lexmodo\V1\Products\ProductListingInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/GetProductListingByID',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductListingInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetProductListingBySeo(\Lexmodo\V1\Products\ProductListingInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/GetProductListingBySeo',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductCreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateProduct(\Lexmodo\V1\Products\ProductCreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/CreateProduct',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\VariantsArray $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateVariants(\Lexmodo\V1\Products\VariantsArray $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/CreateVariants',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetProductMetrics(\Lexmodo\V1\Products\ProductInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/ResetProductMetrics',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteProduct(\Lexmodo\V1\Products\ProductInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/DeleteProduct',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateInt $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDeletedProductInfo(\Lexmodo\V1\Products\ProductInfoUpdateInt $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/GetDeletedProductInfo',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariant $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteAllVariant(\Lexmodo\V1\Products\ProductVariant $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/DeleteAllVariant',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariant $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteVariant(\Lexmodo\V1\Products\ProductVariant $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/DeleteVariant',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateBool $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductTaxed(\Lexmodo\V1\Products\ProductInfoUpdateBool $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductTaxed',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoTag $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductTags(\Lexmodo\V1\Products\ProductInfoTag $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductTags',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoTag $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductTagsAppend(\Lexmodo\V1\Products\ProductInfoTag $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductTagsAppend',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoTag $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductTagsDelete(\Lexmodo\V1\Products\ProductInfoTag $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductTagsDelete',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateString $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductName(\Lexmodo\V1\Products\ProductInfoUpdateString $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductName',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateBool $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteProductVariantsOptions(\Lexmodo\V1\Products\ProductVariantUpdateBool $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/DeleteProductVariantsOptions',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateInt $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductDateAvailable(\Lexmodo\V1\Products\ProductInfoUpdateInt $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductDateAvailable',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoSeoTitle $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ProductSEOExists(\Lexmodo\V1\Products\ProductInfoSeoTitle $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/ProductSEOExists',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateString $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductModel(\Lexmodo\V1\Products\ProductInfoUpdateString $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductModel',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateString $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductDescription(\Lexmodo\V1\Products\ProductInfoUpdateString $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductDescription',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateArrayString $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductImagesOrder(\Lexmodo\V1\Products\ProductInfoUpdateArrayString $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductImagesOrder',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateBool $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVirtual(\Lexmodo\V1\Products\ProductInfoUpdateBool $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVirtual',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateBool $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductAllowRecurring(\Lexmodo\V1\Products\ProductInfoUpdateBool $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductAllowRecurring',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetRelatedProducts(\Lexmodo\V1\Products\ProductInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/GetRelatedProducts',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductRelated $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetRelatedProducts(\Lexmodo\V1\Products\ProductRelated $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetRelatedProducts',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateBool $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductStatus(\Lexmodo\V1\Products\ProductInfoUpdateBool $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductStatus',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateWeight $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductWeight(\Lexmodo\V1\Products\ProductInfoUpdateWeight $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductWeight',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductAtlTextUpdate $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductImageAltText(\Lexmodo\V1\Products\ProductAtlTextUpdate $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductImageAltText',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateDIM $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductDIM(\Lexmodo\V1\Products\ProductInfoUpdateDIM $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductDIM',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductReviews $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductReviews(\Lexmodo\V1\Products\ProductReviews $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductReviews',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateDouble $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductOrderMin(\Lexmodo\V1\Products\ProductInfoUpdateDouble $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductOrderMin',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateDouble $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductOrderMax(\Lexmodo\V1\Products\ProductInfoUpdateDouble $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductOrderMax',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateDouble $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductOrderUnits(\Lexmodo\V1\Products\ProductInfoUpdateDouble $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductOrderUnits',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateString $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductSeoTitle(\Lexmodo\V1\Products\ProductInfoUpdateString $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductSeoTitle',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateString $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductSeoUrl(\Lexmodo\V1\Products\ProductInfoUpdateString $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductSeoUrl',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateString $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductBrand(\Lexmodo\V1\Products\ProductInfoUpdateString $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductBrand',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateString $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVendor(\Lexmodo\V1\Products\ProductInfoUpdateString $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVendor',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoChannels $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductChannels(\Lexmodo\V1\Products\ProductInfoChannels $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductChannels',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateString $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductType(\Lexmodo\V1\Products\ProductInfoUpdateString $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductType',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateString $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductSeoDescription(\Lexmodo\V1\Products\ProductInfoUpdateString $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductSeoDescription',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateArrayString $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductOptions(\Lexmodo\V1\Products\ProductInfoUpdateArrayString $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductOptions',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoUpdateCustomFields $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductCustomFields(\Lexmodo\V1\Products\ProductInfoUpdateCustomFields $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductCustomFields',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateInt $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantPrice(\Lexmodo\V1\Products\ProductVariantUpdateInt $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantPrice',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateInt $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantDiscountPrice(\Lexmodo\V1\Products\ProductVariantUpdateInt $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantDiscountPrice',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateInt $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantWholesalePrice(\Lexmodo\V1\Products\ProductVariantUpdateInt $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantWholesalePrice',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateInt $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantWholesaleDiscountPrice(\Lexmodo\V1\Products\ProductVariantUpdateInt $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantWholesaleDiscountPrice',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateArrayString $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantSortOrder(\Lexmodo\V1\Products\ProductVariantUpdateArrayString $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantSortOrder',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantInternalStock $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantInternalStock(\Lexmodo\V1\Products\ProductVariantInternalStock $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantInternalStock',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateInt $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantSaleDate(\Lexmodo\V1\Products\ProductVariantUpdateInt $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantSaleDate',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateInt $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantSaleDateStart(\Lexmodo\V1\Products\ProductVariantUpdateInt $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantSaleDateStart',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateBool $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantLimitedQty(\Lexmodo\V1\Products\ProductVariantUpdateBool $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantLimitedQty',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateBool $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantAllowBackorder(\Lexmodo\V1\Products\ProductVariantUpdateBool $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantAllowBackorder',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateDouble $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantQty(\Lexmodo\V1\Products\ProductVariantUpdateDouble $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantQty',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\VariantAvailableInventory $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantAvailableInventory(\Lexmodo\V1\Products\VariantAvailableInventory $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantAvailableInventory',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantQtyDiscount $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantDiscountQty(\Lexmodo\V1\Products\ProductVariantQtyDiscount $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantDiscountQty',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateDouble $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantRestockQty(\Lexmodo\V1\Products\ProductVariantUpdateDouble $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantRestockQty',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateDouble $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantWeight(\Lexmodo\V1\Products\ProductVariantUpdateDouble $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantWeight',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateDimension $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantDimensions(\Lexmodo\V1\Products\ProductVariantUpdateDimension $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantDimensions',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateString $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantBarcode(\Lexmodo\V1\Products\ProductVariantUpdateString $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantBarcode',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateString $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantSku(\Lexmodo\V1\Products\ProductVariantUpdateString $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantSku',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ClientStreamingCall
     */
    public function UploadProductVariantImage($metadata = [], $options = []) {
        return $this->_clientStreamRequest('/lexmodo.v1.products.Products/UploadProductVariantImage',
        ['\Lexmodo\V1\Products\ResultResponse','decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateString $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteProductVariantImage(\Lexmodo\V1\Products\ProductVariantUpdateString $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/DeleteProductVariantImage',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateArrayString $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantOptionValue(\Lexmodo\V1\Products\ProductVariantUpdateArrayString $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantOptionValue',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductIDByVariantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteProductVariantBulk(\Lexmodo\V1\Products\ProductIDByVariantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/DeleteProductVariantBulk',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantOptionDelete $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteProductVariantByOptionValue(\Lexmodo\V1\Products\ProductVariantOptionDelete $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/DeleteProductVariantByOptionValue',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductIDByVariantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteProductVariantOptions(\Lexmodo\V1\Products\ProductIDByVariantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/DeleteProductVariantOptions',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantOptions(\Lexmodo\V1\Products\ProductInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantOptions',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantSaleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantSale(\Lexmodo\V1\Products\ProductVariantSaleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantSale',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateCustomFields $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantCustomFields(\Lexmodo\V1\Products\ProductVariantUpdateCustomFields $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantCustomFields',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateBool $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantStatus(\Lexmodo\V1\Products\ProductVariantUpdateBool $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantStatus',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateCustomProperties $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantCustomProperties(\Lexmodo\V1\Products\ProductVariantUpdateCustomProperties $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantCustomProperties',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductVariantUpdateBool $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductVariantDisableDiscount(\Lexmodo\V1\Products\ProductVariantUpdateBool $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductVariantDisableDiscount',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\InventoryLogRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetProductVariantHistory(\Lexmodo\V1\Products\InventoryLogRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/GetProductVariantHistory',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductAction $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteProductActions(\Lexmodo\V1\Products\ProductAction $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/DeleteProductActions',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductAction $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetProductActions(\Lexmodo\V1\Products\ProductAction $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/SetProductActions',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetProductActions(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.products.Products/GetProductActions',
        $argument,
        ['\Lexmodo\V1\Products\ResultResponse', 'decode'],
        $metadata, $options);
    }

}
