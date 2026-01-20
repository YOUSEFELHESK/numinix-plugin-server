<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lexmodo\V1\Sitemap;

/**
 */
class SitemapClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSiteMapFiles(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.sitemap.Sitemap/GetSiteMapFiles',
        $argument,
        ['\Lexmodo\V1\Sitemap\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Sitemap\FileInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteSiteMapFile(\Lexmodo\V1\Sitemap\FileInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.sitemap.Sitemap/DeleteSiteMapFile',
        $argument,
        ['\Lexmodo\V1\Sitemap\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Sitemap\FileInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function FetchSiteMapFile(\Lexmodo\V1\Sitemap\FileInfo $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/lexmodo.v1.sitemap.Sitemap/FetchSiteMapFile',
        $argument,
        ['\Lexmodo\V1\Sitemap\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ClientStreamingCall
     */
    public function UploadSiteMapFile($metadata = [], $options = []) {
        return $this->_clientStreamRequest('/lexmodo.v1.sitemap.Sitemap/UploadSiteMapFile',
        ['\Lexmodo\V1\Sitemap\ResultResponse','decode'],
        $metadata, $options);
    }

}
