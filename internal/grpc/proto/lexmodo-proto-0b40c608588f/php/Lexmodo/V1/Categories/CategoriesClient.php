<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lexmodo\V1\Categories;

/**
 */
class CategoriesClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Lexmodo\V1\Categories\CategoryInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CategoryExists(\Lexmodo\V1\Categories\CategoryInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.categories.Categories/CategoryExists',
        $argument,
        ['\Lexmodo\V1\Categories\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Categories\CategoryListingRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CategoryListingRule(\Lexmodo\V1\Categories\CategoryListingRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.categories.Categories/CategoryListingRule',
        $argument,
        ['\Lexmodo\V1\Categories\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Categories\CategorySearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CategorySearch(\Lexmodo\V1\Categories\CategorySearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.categories.Categories/CategorySearch',
        $argument,
        ['\Lexmodo\V1\Categories\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCategoryRule(\Lexmodo\V1\Products\ProductRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.categories.Categories/GetCategoryRule',
        $argument,
        ['\Lexmodo\V1\Categories\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Categories\CategoryInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCategoryByID(\Lexmodo\V1\Categories\CategoryInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.categories.Categories/GetCategoryByID',
        $argument,
        ['\Lexmodo\V1\Categories\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Categories\CategoryInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCategory(\Lexmodo\V1\Categories\CategoryInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.categories.Categories/UpdateCategory',
        $argument,
        ['\Lexmodo\V1\Categories\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Categories\CategoryInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateCategory(\Lexmodo\V1\Categories\CategoryInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.categories.Categories/CreateCategory',
        $argument,
        ['\Lexmodo\V1\Categories\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateCategoryRule(\Lexmodo\V1\Products\ProductRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.categories.Categories/CreateCategoryRule',
        $argument,
        ['\Lexmodo\V1\Categories\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Categories\CategoryInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteCategoryRule(\Lexmodo\V1\Categories\CategoryInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.categories.Categories/DeleteCategoryRule',
        $argument,
        ['\Lexmodo\V1\Categories\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Categories\CategoryInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteCategory(\Lexmodo\V1\Categories\CategoryInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.categories.Categories/DeleteCategory',
        $argument,
        ['\Lexmodo\V1\Categories\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Products\ProductRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CategoryRulesExist(\Lexmodo\V1\Products\ProductRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.categories.Categories/CategoryRulesExist',
        $argument,
        ['\Lexmodo\V1\Categories\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ClientStreamingCall
     */
    public function UploadCategoryImage($metadata = [], $options = []) {
        return $this->_clientStreamRequest('/lexmodo.v1.categories.Categories/UploadCategoryImage',
        ['\Lexmodo\V1\Categories\ResultResponse','decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCategoryRuleListing(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.categories.Categories/GetCategoryRuleListing',
        $argument,
        ['\Lexmodo\V1\Categories\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Categories\CategoryInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteCategoryImage(\Lexmodo\V1\Categories\CategoryInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.categories.Categories/DeleteCategoryImage',
        $argument,
        ['\Lexmodo\V1\Categories\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDeletedCategory(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.categories.Categories/GetDeletedCategory',
        $argument,
        ['\Lexmodo\V1\Categories\ResultResponse', 'decode'],
        $metadata, $options);
    }

}
