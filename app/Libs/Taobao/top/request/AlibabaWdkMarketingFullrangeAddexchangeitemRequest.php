<?php
/**
 * TOP API: alibaba.wdk.marketing.fullrange.addexchangeitem request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class AlibabaWdkMarketingFullrangeAddexchangeitemRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $param0;
	
	/** 
	 * 系统自动生成
	 **/
	private $param1;
	
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

	public function setParam1($param1)
	{
		$this->param1 = $param1;
		$this->apiParas["param1"] = $param1;
	}

	public function getParam1()
	{
		return $this->param1;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.marketing.fullrange.addexchangeitem";
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
