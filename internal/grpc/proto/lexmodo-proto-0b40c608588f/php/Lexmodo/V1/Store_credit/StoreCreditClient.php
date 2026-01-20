<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lexmodo\V1\Store_credit;

/**
 */
class StoreCreditClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Lexmodo\V1\Store_credit\StoreCreditRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetStoreCreditListing(\Lexmodo\V1\Store_credit\StoreCreditRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.store_credit.StoreCredit/GetStoreCreditListing',
        $argument,
        ['\Lexmodo\V1\Store_credit\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Store_credit\ApplyOrderModuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ApplyOrderModule(\Lexmodo\V1\Store_credit\ApplyOrderModuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.store_credit.StoreCredit/ApplyOrderModule',
        $argument,
        ['\Lexmodo\V1\Store_credit\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Store_credit\ApplyOrderModuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ProcessModule(\Lexmodo\V1\Store_credit\ApplyOrderModuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.store_credit.StoreCredit/ProcessModule',
        $argument,
        ['\Lexmodo\V1\Store_credit\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Store_credit\StoreCreditRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateLedgerRule(\Lexmodo\V1\Store_credit\StoreCreditRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.store_credit.StoreCredit/CreateLedgerRule',
        $argument,
        ['\Lexmodo\V1\Store_credit\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Store_credit\LedgerListing $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLedgerListing(\Lexmodo\V1\Store_credit\LedgerListing $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.store_credit.StoreCredit/GetLedgerListing',
        $argument,
        ['\Lexmodo\V1\Store_credit\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Store_credit\StoreCreditRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteLedgerRule(\Lexmodo\V1\Store_credit\StoreCreditRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.store_credit.StoreCredit/DeleteLedgerRule',
        $argument,
        ['\Lexmodo\V1\Store_credit\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Store_credit\StoreCreditRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateStoreCredit(\Lexmodo\V1\Store_credit\StoreCreditRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.store_credit.StoreCredit/CreateStoreCredit',
        $argument,
        ['\Lexmodo\V1\Store_credit\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Store_credit\StoreCreditRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteStoreCredit(\Lexmodo\V1\Store_credit\StoreCreditRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.store_credit.StoreCredit/DeleteStoreCredit',
        $argument,
        ['\Lexmodo\V1\Store_credit\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Store_credit\StoreCreditRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetStoreCredit(\Lexmodo\V1\Store_credit\StoreCreditRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.store_credit.StoreCredit/GetStoreCredit',
        $argument,
        ['\Lexmodo\V1\Store_credit\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Store_credit\LedgerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomerLedger(\Lexmodo\V1\Store_credit\LedgerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.store_credit.StoreCredit/GetCustomerLedger',
        $argument,
        ['\Lexmodo\V1\Store_credit\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLedgerRule(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.store_credit.StoreCredit/GetLedgerRule',
        $argument,
        ['\Lexmodo\V1\Store_credit\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Store_credit\LedgerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCustomerLedger(\Lexmodo\V1\Store_credit\LedgerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.store_credit.StoreCredit/UpdateCustomerLedger',
        $argument,
        ['\Lexmodo\V1\Store_credit\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Store_credit\StoreCreditRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RedeemGiftCode(\Lexmodo\V1\Store_credit\StoreCreditRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.store_credit.StoreCredit/RedeemGiftCode',
        $argument,
        ['\Lexmodo\V1\Store_credit\ResultResponse', 'decode'],
        $metadata, $options);
    }

}
