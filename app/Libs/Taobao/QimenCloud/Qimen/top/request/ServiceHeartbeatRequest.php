<?php
/**
 * TOP API: taobao.qimen.service.heartbeat request
 * 
 * @author auto create
 * @since 1.0, 2019.10.29
 */
class ServiceHeartbeatRequest
{
	/** 
	 * 序列号，string（18），必填
	 **/
	private $serialNumber;
	
	private $apiParas = array();
	
	public function setSerialNumber($serialNumber)
	{
		$this->serialNumber = $serialNumber;
		$this->apiParas["serialNumber"] = $serialNumber;
	}

	public function getSerialNumber()
	{
		return $this->serialNumber;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.service.heartbeat";
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
