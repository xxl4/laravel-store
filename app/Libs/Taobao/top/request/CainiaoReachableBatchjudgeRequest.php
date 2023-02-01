<?php
/**
 * TOP API: cainiao.reachable.batchjudge request
 * 
 * @author auto create
 * @since 1.0, 2021.05.13
 */
class CainiaoReachableBatchjudgeRequest
{
	/** 
	 * 1:快递 2:快运
	 **/
	private $addressType;
	
	/** 
	 * 调用方对象
	 **/
	private $clientInfo;
	
	/** 
	 * 收发信息
	 **/
	private $data;
	
	private $apiParas = array();
	
	public function setAddressType($addressType)
	{
		$this->addressType = $addressType;
		$this->apiParas["address_type"] = $addressType;
	}

	public function getAddressType()
	{
		return $this->addressType;
	}

	public function setClientInfo($clientInfo)
	{
		$this->clientInfo = $clientInfo;
		$this->apiParas["client_info"] = $clientInfo;
	}

	public function getClientInfo()
	{
		return $this->clientInfo;
	}

	public function setData($data)
	{
		$this->data = $data;
		$this->apiParas["data"] = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function getApiMethodName()
	{
		return "cainiao.reachable.batchjudge";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->addressType,"addressType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
