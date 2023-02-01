<?php
/**
 * TOP API: taobao.fenxiao.trade.prepay.offline.add request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class FenxiaoTradePrepayOfflineAddRequest
{
	/** 
	 * 增加流水
	 **/
	private $offlineAddPrepayParam;
	
	private $apiParas = array();
	
	public function setOfflineAddPrepayParam($offlineAddPrepayParam)
	{
		$this->offlineAddPrepayParam = $offlineAddPrepayParam;
		$this->apiParas["offline_add_prepay_param"] = $offlineAddPrepayParam;
	}

	public function getOfflineAddPrepayParam()
	{
		return $this->offlineAddPrepayParam;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.trade.prepay.offline.add";
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
