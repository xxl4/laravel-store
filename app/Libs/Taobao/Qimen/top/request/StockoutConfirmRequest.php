<?php
/**
 * TOP API: taobao.qimen.stockout.confirm request
 * 
 * @author auto create
 * @since 1.0, 2020.03.03
 */
class StockoutConfirmRequest
{
	/** 
	 * deliveryOrder
	 **/
	private $deliveryOrder;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * orderLines
	 **/
	private $orderLines;
	
	/** 
	 * packages
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
		return "taobao.qimen.stockout.confirm";
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
