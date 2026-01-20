<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lexmodo\V1\Menu;

/**
 */
class MenusClient extends \Grpc\BaseStub {

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
    public function GetMenus(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.menu.Menus/GetMenus',
        $argument,
        ['\Lexmodo\V1\Menu\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Menu\MenuList $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateMenu(\Lexmodo\V1\Menu\MenuList $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.menu.Menus/UpdateMenu',
        $argument,
        ['\Lexmodo\V1\Menu\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Menu\MenuList $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateMenu(\Lexmodo\V1\Menu\MenuList $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.menu.Menus/CreateMenu',
        $argument,
        ['\Lexmodo\V1\Menu\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Menu\MenuList $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteMenu(\Lexmodo\V1\Menu\MenuList $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.menu.Menus/DeleteMenu',
        $argument,
        ['\Lexmodo\V1\Menu\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Menu\MenuList $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMenuByHandler(\Lexmodo\V1\Menu\MenuList $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.menu.Menus/GetMenuByHandler',
        $argument,
        ['\Lexmodo\V1\Menu\ResultResponse', 'decode'],
        $metadata, $options);
    }

}
