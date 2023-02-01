<?php
/**
 * TOP API: cainiao.endpoint.locker.top.order.tracking.new request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class CainiaoEndpointLockerTopOrderTrackingNewRequest
{
	/** 
	 * 回传信息
	 **/
	private $trackInfo;
	
	private $apiParas = array();
	
	public function setTrackInfo($trackInfo)
	{
		$this->trackInfo = $trackInfo;
		$this->apiParas["track_info"] = $trackInfo;
	}

	public function getTrackInfo()
	{
		return $this->trackInfo;
	}

	public function getApiMethodName()
	{
		return "cainiao.endpoint.locker.top.order.tracking.new";
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
