<?php
/**
 * TOP API: alibaba.wdk.marketing.fullrange.queryitem request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class AlibabaWdkMarketingFullrangeQueryitemRequest
{
	/** 
	 * 换购商品查询参数
	 **/
	private $param0;
	
	private $apiParas = array();
	
	public function setParam0($param0)
	{
		$this->param0 = $param0;
		$this->apiParas["param0"] = $param0;
	}

	public function getParam0()
	{
		return $this->param0;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.marketing.fullrange.queryitem";
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
