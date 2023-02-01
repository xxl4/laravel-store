<?php
/**
 * TOP API: taobao.qimen.deliveryorder.batchconfirm request
 * 
 * @author auto create
 * @since 1.0, 2020.09.14
 */
class DeliveryorderBatchconfirmRequest
{
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 发货单列表
	 **/
	private $orders;
	
	private $apiParas = array();
	
	public function setExtendProps($extendProps)
	{
		$this->extendProps = $extendProps;
		$this->apiParas["extendProps"] = $extendProps;
	}

	public function getExtendProps()
	{
		return $this->extendProps;
	}

	public function setOrders($orders)
	{
		$this->orders = $orders;
		$this->apiParas["orders"] = $orders;
	}

	public function getOrders()
	{
		return $this->orders;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.deliveryorder.batchconfirm";
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
