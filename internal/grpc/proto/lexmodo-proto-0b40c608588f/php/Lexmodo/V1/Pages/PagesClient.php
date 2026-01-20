<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lexmodo\V1\Pages;

/**
 */
class PagesClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Lexmodo\V1\Pages\PagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreatePages(\Lexmodo\V1\Pages\PagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.pages.Pages/CreatePages',
        $argument,
        ['\Lexmodo\V1\Pages\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Pages\PagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdatePages(\Lexmodo\V1\Pages\PagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.pages.Pages/UpdatePages',
        $argument,
        ['\Lexmodo\V1\Pages\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Pages\PagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPage(\Lexmodo\V1\Pages\PagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.pages.Pages/GetPage',
        $argument,
        ['\Lexmodo\V1\Pages\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Pages\PagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeletePages(\Lexmodo\V1\Pages\PagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.pages.Pages/DeletePages',
        $argument,
        ['\Lexmodo\V1\Pages\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Pages\PageListingInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPages(\Lexmodo\V1\Pages\PageListingInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.pages.Pages/GetPages',
        $argument,
        ['\Lexmodo\V1\Pages\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPageRules(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.pages.Pages/GetPageRules',
        $argument,
        ['\Lexmodo\V1\Pages\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Pages\PagesRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreatePageRule(\Lexmodo\V1\Pages\PagesRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.pages.Pages/CreatePageRule',
        $argument,
        ['\Lexmodo\V1\Pages\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Pages\PagesRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeletePageRule(\Lexmodo\V1\Pages\PagesRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.pages.Pages/DeletePageRule',
        $argument,
        ['\Lexmodo\V1\Pages\ResultResponse', 'decode'],
        $metadata, $options);
    }

}
