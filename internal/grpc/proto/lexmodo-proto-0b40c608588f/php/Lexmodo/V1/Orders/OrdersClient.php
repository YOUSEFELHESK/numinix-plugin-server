<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lexmodo\V1\Orders;

/**
 */
class OrdersClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Invoice(\Lexmodo\V1\Orders\OrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/Invoice',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\TrackingInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function FetchLabel(\Lexmodo\V1\Orders\TrackingInfo $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/lexmodo.v1.orders.Orders/FetchLabel',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\RefundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RefundOrder(\Lexmodo\V1\Orders\RefundRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/RefundOrder',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PayOrder(\Lexmodo\V1\Orders\OrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/PayOrder',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateOrder(\Lexmodo\V1\Orders\OrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/CreateOrder',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CalculatePriceNoOrder(\Lexmodo\V1\Orders\OrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/CalculatePriceNoOrder',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrderLineItemsUpdate $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateOrderLineItems(\Lexmodo\V1\Orders\OrderLineItemsUpdate $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/UpdateOrderLineItems',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrderLineItemPriceAdjustment $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function OrderLineItemPriceAdjust(\Lexmodo\V1\Orders\OrderLineItemPriceAdjustment $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/OrderLineItemPriceAdjust',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddComment(\Lexmodo\V1\Orders\OrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/AddComment',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetTag(\Lexmodo\V1\Orders\OrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/SetTag',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CustomerValue(\Lexmodo\V1\Orders\OrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/CustomerValue',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function OrderTimeLine(\Lexmodo\V1\Orders\OrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/OrderTimeLine',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateOrderModules(\Lexmodo\V1\Orders\OrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/UpdateOrderModules',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddCustomer(\Lexmodo\V1\Orders\OrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/AddCustomer',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddShippingCost(\Lexmodo\V1\Orders\OrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/AddShippingCost',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddShippingAddress(\Lexmodo\V1\Orders\OrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/AddShippingAddress',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateEmail(\Lexmodo\V1\Orders\OrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/UpdateEmail',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrderLineItemsUpdate $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteOrder(\Lexmodo\V1\Orders\OrderLineItemsUpdate $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/DeleteOrder',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ClearOrderDebt(\Lexmodo\V1\Orders\OrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/ClearOrderDebt',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\RefundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RefundCalculator(\Lexmodo\V1\Orders\RefundRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/RefundCalculator',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddCustomModule(\Lexmodo\V1\Orders\OrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/AddCustomModule',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetOrderModule(\Lexmodo\V1\Orders\OrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/ResetOrderModule',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrderLineItemsUpdate $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ItemsFulfilled(\Lexmodo\V1\Orders\OrderLineItemsUpdate $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/ItemsFulfilled',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersListing $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomerOrders(\Lexmodo\V1\Orders\OrdersListing $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/GetCustomerOrders',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SendAmountOwed(\Lexmodo\V1\Orders\OrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/SendAmountOwed',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersListing $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOrderListing(\Lexmodo\V1\Orders\OrdersListing $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/GetOrderListing',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateOrderRule(\Lexmodo\V1\Orders\OrdersRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/CreateOrderRule',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteOrderRule(\Lexmodo\V1\Orders\OrdersRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/DeleteOrderRule',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersEmptyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOrderRule(\Lexmodo\V1\Orders\OrdersEmptyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/GetOrderRule',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersLineItemsCustomFieldRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetOrderLineItemCustomField(\Lexmodo\V1\Orders\OrdersLineItemsCustomFieldRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/SetOrderLineItemCustomField',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OPC $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GenerateOPC(\Lexmodo\V1\Orders\OPC $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/GenerateOPC',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\PackingSlip $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GeneratePackingSlip(\Lexmodo\V1\Orders\PackingSlip $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/GeneratePackingSlip',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\PackingSlip $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SavePackingSlipTemplate(\Lexmodo\V1\Orders\PackingSlip $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/SavePackingSlipTemplate',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\PackingSlip $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPackingSlipTemplate(\Lexmodo\V1\Orders\PackingSlip $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/GetPackingSlipTemplate',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOrderTransactionDetails(\Lexmodo\V1\Orders\OrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/GetOrderTransactionDetails',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\MigrateOrderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MigrateOrder(\Lexmodo\V1\Orders\MigrateOrderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/MigrateOrder',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrderScript $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOrderScript(\Lexmodo\V1\Orders\OrderScript $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/GetOrderScript',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrderScript $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SaveOrderScript(\Lexmodo\V1\Orders\OrderScript $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/SaveOrderScript',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrderScript $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteOrderScript(\Lexmodo\V1\Orders\OrderScript $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/DeleteOrderScript',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Orders\OrderScript $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RunPlaygroundOrder(\Lexmodo\V1\Orders\OrderScript $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.orders.Orders/RunPlaygroundOrder',
        $argument,
        ['\Lexmodo\V1\Orders\ResultResponse', 'decode'],
        $metadata, $options);
    }

}
