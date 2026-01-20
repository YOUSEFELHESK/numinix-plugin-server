<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lexmodo\V1\Coupons;

/**
 */
class CouponsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Lexmodo\V1\Coupons\CouponRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CouponSearch(\Lexmodo\V1\Coupons\CouponRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.coupons.Coupons/CouponSearch',
        $argument,
        ['\Lexmodo\V1\Coupons\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Coupons\CouponRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCoupon(\Lexmodo\V1\Coupons\CouponRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.coupons.Coupons/GetCoupon',
        $argument,
        ['\Lexmodo\V1\Coupons\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Coupons\CouponRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GenerateCoupon(\Lexmodo\V1\Coupons\CouponRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.coupons.Coupons/GenerateCoupon',
        $argument,
        ['\Lexmodo\V1\Coupons\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Coupons\CouponRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCoupon(\Lexmodo\V1\Coupons\CouponRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.coupons.Coupons/UpdateCoupon',
        $argument,
        ['\Lexmodo\V1\Coupons\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Coupons\CouponRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteCoupon(\Lexmodo\V1\Coupons\CouponRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.coupons.Coupons/DeleteCoupon',
        $argument,
        ['\Lexmodo\V1\Coupons\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Coupons\ApplyOrderModuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ApplyOrderModule(\Lexmodo\V1\Coupons\ApplyOrderModuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.coupons.Coupons/ApplyOrderModule',
        $argument,
        ['\Lexmodo\V1\Coupons\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Coupons\ApplyOrderModuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ProcessModule(\Lexmodo\V1\Coupons\ApplyOrderModuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.coupons.Coupons/ProcessModule',
        $argument,
        ['\Lexmodo\V1\Coupons\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Coupons\CouponRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateCouponRule(\Lexmodo\V1\Coupons\CouponRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.coupons.Coupons/CreateCouponRule',
        $argument,
        ['\Lexmodo\V1\Coupons\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Coupons\CouponRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteCouponRule(\Lexmodo\V1\Coupons\CouponRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.coupons.Coupons/DeleteCouponRule',
        $argument,
        ['\Lexmodo\V1\Coupons\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Coupons\CouponListing $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCouponListing(\Lexmodo\V1\Coupons\CouponListing $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.coupons.Coupons/GetCouponListing',
        $argument,
        ['\Lexmodo\V1\Coupons\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCouponRule(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.coupons.Coupons/GetCouponRule',
        $argument,
        ['\Lexmodo\V1\Coupons\ResultResponse', 'decode'],
        $metadata, $options);
    }

}
