<?php
/**
 * TOP API: taobao.qimen.order.callback request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OrderCallbackRequest
{
	/** 
	 * 奇门仓储字段,C123,string(50),,
	 **/
	private $deliveryOrderCode;
	
	/** 
	 * 运单号
	 **/
	private $expressCode;
	
	/** 
	 * 奇门仓储字段,C123,string(50),,
	 **/
	private $orderId;
	
	/** 
	 * 奇门仓储字段,C123,string(50),,
	 **/
	private $ownerCode;
	
	/** 
	 * 奇门仓储字段,C123,string(50),,
	 **/
	private $warehouseCode;
	
	private $apiParas = array();
	
	public function setDeliveryOrderCode($deliveryOrderCode)
	{
		$this->deliveryOrderCode = $deliveryOrderCode;
		$this->apiParas["deliveryOrderCode"] = $deliveryOrderCode;
	}

	public function getDeliveryOrderCode()
	{
		return $this->deliveryOrderCode;
	}

	public function setExpressCode($expressCode)
	{
		$this->expressCode = $expressCode;
		$this->apiParas["expressCode"] = $expressCode;
	}

	public function getExpressCode()
	{
		return $this->expressCode;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setOwnerCode($ownerCode)
	{
		$this->ownerCode = $ownerCode;
		$this->apiParas["ownerCode"] = $ownerCode;
	}

	public function getOwnerCode()
	{
		return $this->ownerCode;
	}

	public function setWarehouseCode($warehouseCode)
	{
		$this->warehouseCode = $warehouseCode;
		$this->apiParas["warehouseCode"] = $warehouseCode;
	}

	public function getWarehouseCode()
	{
		return $this->warehouseCode;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.order.callback";
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
