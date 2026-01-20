<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lexmodo\V1\Customers;

/**
 */
class CustomersClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Lexmodo\V1\Customers\CustomerResetPassword $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CustomerPasswordResetToken(\Lexmodo\V1\Customers\CustomerResetPassword $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.customers.Customers/CustomerPasswordResetToken',
        $argument,
        ['\Lexmodo\V1\Customers\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Customers\CustomerResetPassword $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CustomerPasswordReset(\Lexmodo\V1\Customers\CustomerResetPassword $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.customers.Customers/CustomerPasswordReset',
        $argument,
        ['\Lexmodo\V1\Customers\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Customers\CustomerLoginRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CustomerLogin(\Lexmodo\V1\Customers\CustomerLoginRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.customers.Customers/CustomerLogin',
        $argument,
        ['\Lexmodo\V1\Customers\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Customers\CustomerSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CustomerSearch(\Lexmodo\V1\Customers\CustomerSearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.customers.Customers/CustomerSearch',
        $argument,
        ['\Lexmodo\V1\Customers\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Customers\CreateCustomerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateCustomer(\Lexmodo\V1\Customers\CreateCustomerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.customers.Customers/CreateCustomer',
        $argument,
        ['\Lexmodo\V1\Customers\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomerRule(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.customers.Customers/GetCustomerRule',
        $argument,
        ['\Lexmodo\V1\Customers\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Customers\CustomerIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomerByID(\Lexmodo\V1\Customers\CustomerIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.customers.Customers/GetCustomerByID',
        $argument,
        ['\Lexmodo\V1\Customers\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Customers\CustomerIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomerAddress(\Lexmodo\V1\Customers\CustomerIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.customers.Customers/GetCustomerAddress',
        $argument,
        ['\Lexmodo\V1\Customers\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Customers\CustomerIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomerBasicInfoByID(\Lexmodo\V1\Customers\CustomerIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.customers.Customers/GetCustomerBasicInfoByID',
        $argument,
        ['\Lexmodo\V1\Customers\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Customers\CustomerRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConfrimCustomerRuleExists(\Lexmodo\V1\Customers\CustomerRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.customers.Customers/ConfrimCustomerRuleExists',
        $argument,
        ['\Lexmodo\V1\Customers\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Customers\CustomerIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteCustomer(\Lexmodo\V1\Customers\CustomerIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.customers.Customers/DeleteCustomer',
        $argument,
        ['\Lexmodo\V1\Customers\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Customers\CustomerInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCustomer(\Lexmodo\V1\Customers\CustomerInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.customers.Customers/UpdateCustomer',
        $argument,
        ['\Lexmodo\V1\Customers\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Customers\AddressInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateAddress(\Lexmodo\V1\Customers\AddressInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.customers.Customers/CreateAddress',
        $argument,
        ['\Lexmodo\V1\Customers\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Customers\AddressIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteAddress(\Lexmodo\V1\Customers\AddressIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.customers.Customers/DeleteAddress',
        $argument,
        ['\Lexmodo\V1\Customers\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Customers\AddressInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAddress(\Lexmodo\V1\Customers\AddressInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.customers.Customers/UpdateAddress',
        $argument,
        ['\Lexmodo\V1\Customers\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Customers\CustomerRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateCustomerRule(\Lexmodo\V1\Customers\CustomerRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.customers.Customers/CreateCustomerRule',
        $argument,
        ['\Lexmodo\V1\Customers\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Customers\CustomerRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteCustomerRule(\Lexmodo\V1\Customers\CustomerRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.customers.Customers/DeleteCustomerRule',
        $argument,
        ['\Lexmodo\V1\Customers\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Customers\CustomerListing $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomerListing(\Lexmodo\V1\Customers\CustomerListing $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.customers.Customers/GetCustomerListing',
        $argument,
        ['\Lexmodo\V1\Customers\ResultResponse', 'decode'],
        $metadata, $options);
    }

}
