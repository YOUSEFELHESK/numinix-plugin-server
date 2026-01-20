<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lexmodo\V1\Image_handler;

/**
 */
class ImageHandlerClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Lexmodo\V1\Image_handler\ImageListing $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListImage(\Lexmodo\V1\Image_handler\ImageListing $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.image_handler.ImageHandler/ListImage',
        $argument,
        ['\Lexmodo\V1\Image_handler\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Image_handler\Image $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteImage(\Lexmodo\V1\Image_handler\Image $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.image_handler.ImageHandler/DeleteImage',
        $argument,
        ['\Lexmodo\V1\Image_handler\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ClientStreamingCall
     */
    public function UploadImage($metadata = [], $options = []) {
        return $this->_clientStreamRequest('/lexmodo.v1.image_handler.ImageHandler/UploadImage',
        ['\Lexmodo\V1\Image_handler\ResultResponse','decode'],
        $metadata, $options);
    }

}
