<?php
/**
 * TOP API: alibaba.wdk.marketing.itemdiscount.deleteactivity request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class AlibabaWdkMarketingItemdiscountDeleteactivityRequest
{
	/** 
	 * 需要删除的活动的信息
	 **/
	private $param;
	
	private $apiParas = array();
	
	public function setParam($param)
	{
		$this->param = $param;
		$this->apiParas["param"] = $param;
	}

	public function getParam()
	{
		return $this->param;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.marketing.itemdiscount.deleteactivity";
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
