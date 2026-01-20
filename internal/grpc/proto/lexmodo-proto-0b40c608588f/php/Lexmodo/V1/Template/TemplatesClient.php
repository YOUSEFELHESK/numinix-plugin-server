<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lexmodo\V1\Template;

/**
 */
class TemplatesClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Lexmodo\V1\Template\TemplateSettings $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetTemplateSetting(\Lexmodo\V1\Template\TemplateSettings $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.template.Templates/SetTemplateSetting',
        $argument,
        ['\Lexmodo\V1\Template\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Template\TemplateSettings $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTemplateSetting(\Lexmodo\V1\Template\TemplateSettings $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.template.Templates/GetTemplateSetting',
        $argument,
        ['\Lexmodo\V1\Template\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Template\Template $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetFileHistory(\Lexmodo\V1\Template\Template $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.template.Templates/GetFileHistory',
        $argument,
        ['\Lexmodo\V1\Template\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Template\Template $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ActivateTemplate(\Lexmodo\V1\Template\Template $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.template.Templates/ActivateTemplate',
        $argument,
        ['\Lexmodo\V1\Template\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Template\Template $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteTemplate(\Lexmodo\V1\Template\Template $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.template.Templates/DeleteTemplate',
        $argument,
        ['\Lexmodo\V1\Template\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTemplates(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.template.Templates/GetTemplates',
        $argument,
        ['\Lexmodo\V1\Template\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Template\Template $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateTemplate(\Lexmodo\V1\Template\Template $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.template.Templates/CreateTemplate',
        $argument,
        ['\Lexmodo\V1\Template\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Template\Template $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTemplateFiles(\Lexmodo\V1\Template\Template $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.template.Templates/GetTemplateFiles',
        $argument,
        ['\Lexmodo\V1\Template\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Template\Template $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteNode(\Lexmodo\V1\Template\Template $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.template.Templates/DeleteNode',
        $argument,
        ['\Lexmodo\V1\Template\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Template\Template $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function FetchFile(\Lexmodo\V1\Template\Template $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/lexmodo.v1.template.Templates/FetchFile',
        $argument,
        ['\Lexmodo\V1\Template\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ClientStreamingCall
     */
    public function UploadFile($metadata = [], $options = []) {
        return $this->_clientStreamRequest('/lexmodo.v1.template.Templates/UploadFile',
        ['\Lexmodo\V1\Template\ResultResponse','decode'],
        $metadata, $options);
    }

}
