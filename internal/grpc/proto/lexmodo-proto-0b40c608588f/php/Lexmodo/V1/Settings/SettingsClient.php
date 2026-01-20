<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lexmodo\V1\Settings;

/**
 */
class SettingsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Lexmodo\V1\Settings\SettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetAnalyticsSettings(\Lexmodo\V1\Settings\SettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.settings.Settings/SetAnalyticsSettings',
        $argument,
        ['\Lexmodo\V1\Settings\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Settings\SettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAnalyticsAccessToken(\Lexmodo\V1\Settings\SettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.settings.Settings/GetAnalyticsAccessToken',
        $argument,
        ['\Lexmodo\V1\Settings\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Settings\SettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAnalyticsSettings(\Lexmodo\V1\Settings\SettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.settings.Settings/GetAnalyticsSettings',
        $argument,
        ['\Lexmodo\V1\Settings\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCheckoutSettings(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.settings.Settings/GetCheckoutSettings',
        $argument,
        ['\Lexmodo\V1\Settings\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Settings\SettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetCheckoutSettings(\Lexmodo\V1\Settings\SettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.settings.Settings/SetCheckoutSettings',
        $argument,
        ['\Lexmodo\V1\Settings\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLegalSettings(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.settings.Settings/GetLegalSettings',
        $argument,
        ['\Lexmodo\V1\Settings\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Settings\SettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetLegalSettings(\Lexmodo\V1\Settings\SettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.settings.Settings/SetLegalSettings',
        $argument,
        ['\Lexmodo\V1\Settings\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetStoreWebsite(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.settings.Settings/GetStoreWebsite',
        $argument,
        ['\Lexmodo\V1\Settings\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetStoreSettings(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.settings.Settings/GetStoreSettings',
        $argument,
        ['\Lexmodo\V1\Settings\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Settings\SettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetStoreSettings(\Lexmodo\V1\Settings\SettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.settings.Settings/SetStoreSettings',
        $argument,
        ['\Lexmodo\V1\Settings\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Settings\RedirectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetRedirect(\Lexmodo\V1\Settings\RedirectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.settings.Settings/SetRedirect',
        $argument,
        ['\Lexmodo\V1\Settings\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Settings\RedirectListing $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetRedirects(\Lexmodo\V1\Settings\RedirectListing $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.settings.Settings/GetRedirects',
        $argument,
        ['\Lexmodo\V1\Settings\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Settings\BlockedIPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BlockIP(\Lexmodo\V1\Settings\BlockedIPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.settings.Settings/BlockIP',
        $argument,
        ['\Lexmodo\V1\Settings\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Settings\BlockedIPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteBlockIP(\Lexmodo\V1\Settings\BlockedIPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.settings.Settings/DeleteBlockIP',
        $argument,
        ['\Lexmodo\V1\Settings\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Settings\BlockedIPListing $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetBlockedIP(\Lexmodo\V1\Settings\BlockedIPListing $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.settings.Settings/GetBlockedIP',
        $argument,
        ['\Lexmodo\V1\Settings\ResultResponse', 'decode'],
        $metadata, $options);
    }

}
