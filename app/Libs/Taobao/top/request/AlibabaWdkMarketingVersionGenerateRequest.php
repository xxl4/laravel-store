<?php
/**
 * TOP API: alibaba.wdk.marketing.version.generate request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class AlibabaWdkMarketingVersionGenerateRequest
{
	/** 
	 * 档期版本号参数信息
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
		return "alibaba.wdk.marketing.version.generate";
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
