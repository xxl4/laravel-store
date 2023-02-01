<?php
/**
 * TOP API: alibaba.wdk.marketing.open.heartbeat request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class AlibabaWdkMarketingOpenHeartbeatRequest
{
	/** 
	 * 心跳信息
	 **/
	private $heartBeat;
	
	private $apiParas = array();
	
	public function setHeartBeat($heartBeat)
	{
		$this->heartBeat = $heartBeat;
		$this->apiParas["heart_beat"] = $heartBeat;
	}

	public function getHeartBeat()
	{
		return $this->heartBeat;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.marketing.open.heartbeat";
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
