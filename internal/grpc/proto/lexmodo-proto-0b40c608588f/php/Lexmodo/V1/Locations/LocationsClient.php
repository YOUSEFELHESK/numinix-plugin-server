<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lexmodo\V1\Locations;

/**
 */
class LocationsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Lexmodo\V1\Locations\LocationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteLocation(\Lexmodo\V1\Locations\LocationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.locations.Locations/DeleteLocation',
        $argument,
        ['\Lexmodo\V1\Locations\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLocations(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.locations.Locations/GetLocations',
        $argument,
        ['\Lexmodo\V1\Locations\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Locations\LocationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddLocation(\Lexmodo\V1\Locations\LocationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.locations.Locations/AddLocation',
        $argument,
        ['\Lexmodo\V1\Locations\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Locations\LocationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetLocationsPriority(\Lexmodo\V1\Locations\LocationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.locations.Locations/SetLocationsPriority',
        $argument,
        ['\Lexmodo\V1\Locations\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Address\Address $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ValidateAddress(\Lexmodo\V1\Address\Address $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.locations.Locations/ValidateAddress',
        $argument,
        ['\Lexmodo\V1\Locations\ResultResponse', 'decode'],
        $metadata, $options);
    }

}
