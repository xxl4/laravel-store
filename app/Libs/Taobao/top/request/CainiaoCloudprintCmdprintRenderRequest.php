<?php
/**
 * TOP API: cainiao.cloudprint.cmdprint.render request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class CainiaoCloudprintCmdprintRenderRequest
{
	/** 
	 * 参数对象
	 **/
	private $params;
	
	private $apiParas = array();
	
	public function setParams($params)
	{
		$this->params = $params;
		$this->apiParas["params"] = $params;
	}

	public function getParams()
	{
		return $this->params;
	}

	public function getApiMethodName()
	{
		return "cainiao.cloudprint.cmdprint.render";
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
