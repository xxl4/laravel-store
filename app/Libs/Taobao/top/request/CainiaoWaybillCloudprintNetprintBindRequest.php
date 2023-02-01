<?php
/**
 * TOP API: cainiao.waybill.cloudprint.netprint.bind request
 * 
 * @author auto create
 * @since 1.0, 2022.03.19
 */
class CainiaoWaybillCloudprintNetprintBindRequest
{
	/** 
	 * req
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
		return "cainiao.waybill.cloudprint.netprint.bind";
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
