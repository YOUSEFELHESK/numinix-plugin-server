<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lexmodo\V1\Carts;

/**
 */
class CartsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Lexmodo\V1\Carts\CartRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomerCartUUID(\Lexmodo\V1\Carts\CartRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.carts.Carts/GetCustomerCartUUID',
        $argument,
        ['\Lexmodo\V1\Carts\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Carts\CartRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCartUUID(\Lexmodo\V1\Carts\CartRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.carts.Carts/GetCartUUID',
        $argument,
        ['\Lexmodo\V1\Carts\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Carts\CartRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCart(\Lexmodo\V1\Carts\CartRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.carts.Carts/GetCart',
        $argument,
        ['\Lexmodo\V1\Carts\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Carts\CartRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetCartType(\Lexmodo\V1\Carts\CartRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.carts.Carts/SetCartType',
        $argument,
        ['\Lexmodo\V1\Carts\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Carts\CartRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteFromCart(\Lexmodo\V1\Carts\CartRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.carts.Carts/DeleteFromCart',
        $argument,
        ['\Lexmodo\V1\Carts\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Carts\CartRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteCart(\Lexmodo\V1\Carts\CartRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.carts.Carts/DeleteCart',
        $argument,
        ['\Lexmodo\V1\Carts\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Carts\CartRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PurgeCustomerInfo(\Lexmodo\V1\Carts\CartRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.carts.Carts/PurgeCustomerInfo',
        $argument,
        ['\Lexmodo\V1\Carts\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Carts\CartRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CalculatePriceNoCart(\Lexmodo\V1\Carts\CartRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.carts.Carts/CalculatePriceNoCart',
        $argument,
        ['\Lexmodo\V1\Carts\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Carts\CartRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddToCart(\Lexmodo\V1\Carts\CartRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.carts.Carts/AddToCart',
        $argument,
        ['\Lexmodo\V1\Carts\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Carts\CartRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCart(\Lexmodo\V1\Carts\CartRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.carts.Carts/UpdateCart',
        $argument,
        ['\Lexmodo\V1\Carts\ResultResponse', 'decode'],
        $metadata, $options);
    }

}
