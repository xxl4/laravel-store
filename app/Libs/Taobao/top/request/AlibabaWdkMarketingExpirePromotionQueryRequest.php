<?php
/**
 * TOP API: alibaba.wdk.marketing.expire.promotion.query request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class AlibabaWdkMarketingExpirePromotionQueryRequest
{
	/** 
	 * 店铺id
	 **/
	private $shopId;
	
	/** 
	 * 商品skucode
	 **/
	private $skuCode;
	
	private $apiParas = array();
	
	public function setShopId($shopId)
	{
		$this->shopId = $shopId;
		$this->apiParas["shop_id"] = $shopId;
	}

	public function getShopId()
	{
		return $this->shopId;
	}

	public function setSkuCode($skuCode)
	{
		$this->skuCode = $skuCode;
		$this->apiParas["sku_code"] = $skuCode;
	}

	public function getSkuCode()
	{
		return $this->skuCode;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.marketing.expire.promotion.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->shopId,"shopId");
		RequestCheckUtil::checkNotNull($this->skuCode,"skuCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
