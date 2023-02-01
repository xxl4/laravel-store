<?php
/**
 * TOP API: cainiao.waybill.privacy.seller.order.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class CainiaoWaybillPrivacySellerOrderGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "cainiao.waybill.privacy.seller.order.get";
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
