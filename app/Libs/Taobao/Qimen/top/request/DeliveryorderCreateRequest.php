<?php
/**
 * TOP API: taobao.qimen.deliveryorder.create request
 * 
 * @author auto create
 * @since 1.0, 2021.05.27
 */
class DeliveryorderCreateRequest
{
	/** 
	 * 发货单信息
	 **/
	private $deliveryOrder;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 商品列表
	 **/
	private $items;
	
	/** 
	 * 订单列表
	 **/
	private $orderLines;
	
	private $apiParas = array();
	
	public function setDeliveryOrder($deliveryOrder)
	{
		$this->deliveryOrder = $deliveryOrder;
		$this->apiParas["deliveryOrder"] = $deliveryOrder;
	}

	public function getDeliveryOrder()
	{
		return $this->deliveryOrder;
	}

	public function setExtendProps($extendProps)
	{
		$this->extendProps = $extendProps;
		$this->apiParas["extendProps"] = $extendProps;
	}

	public function getExtendProps()
	{
		return $this->extendProps;
	}

	public function setItems($items)
	{
		$this->items = $items;
		$this->apiParas["items"] = $items;
	}

	public function getItems()
	{
		return $this->items;
	}

	public function setOrderLines($orderLines)
	{
		$this->orderLines = $orderLines;
		$this->apiParas["orderLines"] = $orderLines;
	}

	public function getOrderLines()
	{
		return $this->orderLines;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.deliveryorder.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
