<?php
/**
 * TOP API: cainiao.cloudprint.isvtemplates.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CainiaoCloudprintIsvtemplatesGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "cainiao.cloudprint.isvtemplates.get";
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
