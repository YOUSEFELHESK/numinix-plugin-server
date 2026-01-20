<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lexmodo\V1\Payments;

/**
 */
class PaymentsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Lexmodo\V1\Payments\PaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteCreditCard(\Lexmodo\V1\Payments\PaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.payments.Payments/DeleteCreditCard',
        $argument,
        ['\Lexmodo\V1\Payments\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Payments\PaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SaveCreditCard(\Lexmodo\V1\Payments\PaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.payments.Payments/SaveCreditCard',
        $argument,
        ['\Lexmodo\V1\Payments\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Payments\PaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ProcessPayment(\Lexmodo\V1\Payments\PaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.payments.Payments/ProcessPayment',
        $argument,
        ['\Lexmodo\V1\Payments\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Payments\PaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CapturePayment(\Lexmodo\V1\Payments\PaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.payments.Payments/CapturePayment',
        $argument,
        ['\Lexmodo\V1\Payments\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Payments\PaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VoidPayment(\Lexmodo\V1\Payments\PaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.payments.Payments/VoidPayment',
        $argument,
        ['\Lexmodo\V1\Payments\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Payments\PaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RefundPayment(\Lexmodo\V1\Payments\PaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.payments.Payments/RefundPayment',
        $argument,
        ['\Lexmodo\V1\Payments\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Payments\PaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetConfig(\Lexmodo\V1\Payments\PaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.payments.Payments/SetConfig',
        $argument,
        ['\Lexmodo\V1\Payments\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Payments\PaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetConfig(\Lexmodo\V1\Payments\PaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.payments.Payments/GetConfig',
        $argument,
        ['\Lexmodo\V1\Payments\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Payments\PaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSavedCreditCard(\Lexmodo\V1\Payments\PaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.payments.Payments/GetSavedCreditCard',
        $argument,
        ['\Lexmodo\V1\Payments\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Payments\PaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AcceptedCards(\Lexmodo\V1\Payments\PaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.payments.Payments/AcceptedCards',
        $argument,
        ['\Lexmodo\V1\Payments\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Payments\PaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DisplayFields(\Lexmodo\V1\Payments\PaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.payments.Payments/DisplayFields',
        $argument,
        ['\Lexmodo\V1\Payments\ResultResponse', 'decode'],
        $metadata, $options);
    }

}
