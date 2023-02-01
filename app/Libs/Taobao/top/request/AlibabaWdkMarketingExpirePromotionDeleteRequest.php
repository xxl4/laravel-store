<?php
/**
 * TOP API: alibaba.wdk.marketing.expire.promotion.delete request
 * 
 * @author auto create
 * @since 1.0, 2021.11.22
 */
class AlibabaWdkMarketingExpirePromotionDeleteRequest
{
	/** 
	 * 删除短保优惠
	 **/
	private $param0;
	
	private $apiParas = array();
	
	public function setParam0($param0)
	{
		$this->param0 = $param0;
		$this->apiParas["param0"] = $param0;
	}

	public function getParam0()
	{
		return $this->param0;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.marketing.expire.promotion.delete";
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
