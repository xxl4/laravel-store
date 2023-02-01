<?php
/**
 * TOP API: cainiao.cloudprint.single.customarea.get request
 * 
 * @author auto create
 * @since 1.0, 2018.10.10
 */
class CainiaoCloudprintSingleCustomareaGetRequest
{
	/** 
	 * 这是商家用户id
	 **/
	private $sellerId;
	
	private $apiParas = array();
	
	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function getApiMethodName()
	{
		return "cainiao.cloudprint.single.customarea.get";
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
