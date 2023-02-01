<?php
/**
 * TOP API: cainiao.waybill.privacy.subscription.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class CainiaoWaybillPrivacySubscriptionGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "cainiao.waybill.privacy.subscription.get";
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
