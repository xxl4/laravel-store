<?php
/**
 * TOP API: taobao.qimen.returnpackage.report request
 * 
 * @author auto create
 * @since 1.0, 2019.03.12
 */
class ReturnpackageReportRequest
{
	/** 
	 * 订单
	 **/
	private $order;
	
	/** 
	 * 包裹列表
	 **/
	private $packages;
	
	private $apiParas = array();
	
	public function setOrder($order)
	{
		$this->order = $order;
		$this->apiParas["order"] = $order;
	}

	public function getOrder()
	{
		return $this->order;
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
		return "taobao.qimen.returnpackage.report";
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
