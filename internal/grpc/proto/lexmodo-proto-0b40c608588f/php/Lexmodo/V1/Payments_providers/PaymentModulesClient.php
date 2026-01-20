<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lexmodo\V1\Payments_providers;

/**
 */
class PaymentModulesClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Lexmodo\V1\Payments_providers\PaymentProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListPaymentModules(\Lexmodo\V1\Payments_providers\PaymentProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.payments_providers.PaymentModules/ListPaymentModules',
        $argument,
        ['\Lexmodo\V1\Payments_providers\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Payments_providers\PaymentProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function StorePaymentProcessor(\Lexmodo\V1\Payments_providers\PaymentProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.payments_providers.PaymentModules/StorePaymentProcessor',
        $argument,
        ['\Lexmodo\V1\Payments_providers\ResultResponse', 'decode'],
        $metadata, $options);
    }

}
