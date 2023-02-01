<?php
/**
 * TOP API: taobao.fenxiao.trade.prepay.offline.reduce request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class FenxiaoTradePrepayOfflineReduceRequest
{
	/** 
	 * 减少流水
	 **/
	private $offlineReducePrepayParam;
	
	private $apiParas = array();
	
	public function setOfflineReducePrepayParam($offlineReducePrepayParam)
	{
		$this->offlineReducePrepayParam = $offlineReducePrepayParam;
		$this->apiParas["offline_reduce_prepay_param"] = $offlineReducePrepayParam;
	}

	public function getOfflineReducePrepayParam()
	{
		return $this->offlineReducePrepayParam;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.trade.prepay.offline.reduce";
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
