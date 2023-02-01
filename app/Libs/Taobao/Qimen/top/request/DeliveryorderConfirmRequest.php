<?php
/**
 * TOP API: taobao.qimen.deliveryorder.confirm request
 * 
 * @author auto create
 * @since 1.0, 2021.05.12
 */
class DeliveryorderConfirmRequest
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
	 * 单据列表
	 **/
	private $orderLines;
	
	/** 
	 * 包裹信息
	 **/
	private $packages;
	
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

	public function setOrderLines($orderLines)
	{
		$this->orderLines = $orderLines;
		$this->apiParas["orderLines"] = $orderLines;
	}

	public function getOrderLines()
	{
		return $this->orderLines;
	}

	public function setPackages($packages)
	{
		$this->packages = $packages;
		$this->apiParas["packages"] = $packages;
	}

	public function getPackages()
	{
		return $this->packages;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.deliveryorder.confirm";
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
