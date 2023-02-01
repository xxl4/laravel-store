<?php
/**
 * TOP API: cainiao.endpoint.locker.top.station.addorupdate request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class CainiaoEndpointLockerTopStationAddorupdateRequest
{
	/** 
	 * 站点信息
	 **/
	private $stationInfo;
	
	private $apiParas = array();
	
	public function setStationInfo($stationInfo)
	{
		$this->stationInfo = $stationInfo;
		$this->apiParas["station_info"] = $stationInfo;
	}

	public function getStationInfo()
	{
		return $this->stationInfo;
	}

	public function getApiMethodName()
	{
		return "cainiao.endpoint.locker.top.station.addorupdate";
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
