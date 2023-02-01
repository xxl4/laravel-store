<?php
/**
 * TOP API: alibaba.item.publish.market.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class AlibabaItemPublishMarketGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.item.publish.market.get";
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
