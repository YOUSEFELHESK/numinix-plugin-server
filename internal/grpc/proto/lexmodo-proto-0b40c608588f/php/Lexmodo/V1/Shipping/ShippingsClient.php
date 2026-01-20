<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lexmodo\V1\Shipping;

/**
 */
class ShippingsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Lexmodo\V1\Shipping\ShippingQuoteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateLabel(\Lexmodo\V1\Shipping\ShippingQuoteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.shipping.Shippings/CreateLabel',
        $argument,
        ['\Lexmodo\V1\Shipping\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Shipping\ShippingQuoteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RefundLabel(\Lexmodo\V1\Shipping\ShippingQuoteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.shipping.Shippings/RefundLabel',
        $argument,
        ['\Lexmodo\V1\Shipping\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Shipping\ShippingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateAdminShippingMethods(\Lexmodo\V1\Shipping\ShippingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.shipping.Shippings/CreateAdminShippingMethods',
        $argument,
        ['\Lexmodo\V1\Shipping\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Shipping\ShippingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAdminShippingMethods(\Lexmodo\V1\Shipping\ShippingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.shipping.Shippings/UpdateAdminShippingMethods',
        $argument,
        ['\Lexmodo\V1\Shipping\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Shipping\ShippingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteAdminShippingMethods(\Lexmodo\V1\Shipping\ShippingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.shipping.Shippings/DeleteAdminShippingMethods',
        $argument,
        ['\Lexmodo\V1\Shipping\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAdminShippingMethods(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.shipping.Shippings/GetAdminShippingMethods',
        $argument,
        ['\Lexmodo\V1\Shipping\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Shipping\ShippingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAdminShippingMethodDetails(\Lexmodo\V1\Shipping\ShippingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.shipping.Shippings/GetAdminShippingMethodDetails',
        $argument,
        ['\Lexmodo\V1\Shipping\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Shipping\ShippingQuoteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCartShippingMethods(\Lexmodo\V1\Shipping\ShippingQuoteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.shipping.Shippings/GetCartShippingMethods',
        $argument,
        ['\Lexmodo\V1\Shipping\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Shipping\ShippingQuoteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetShippingQuoteInfo(\Lexmodo\V1\Shipping\ShippingQuoteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.shipping.Shippings/GetShippingQuoteInfo',
        $argument,
        ['\Lexmodo\V1\Shipping\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Shipping\ShippingConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetStoreShippingConfig(\Lexmodo\V1\Shipping\ShippingConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.shipping.Shippings/GetStoreShippingConfig',
        $argument,
        ['\Lexmodo\V1\Shipping\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Shipping\ShippingConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetStoreShippingConfig(\Lexmodo\V1\Shipping\ShippingConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.shipping.Shippings/SetStoreShippingConfig',
        $argument,
        ['\Lexmodo\V1\Shipping\ResultResponse', 'decode'],
        $metadata, $options);
    }

}
