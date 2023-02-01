<?php
/**
 * TOP API: taobao.region.price.query request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class RegionPriceQueryRequest
{
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * 不传则返回所有设置的区域价格
	 **/
	private $regionalPriceDtos;
	
	/** 
	 * 无sku可传0
	 **/
	private $skuId;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setRegionalPriceDtos($regionalPriceDtos)
	{
		$this->regionalPriceDtos = $regionalPriceDtos;
		$this->apiParas["regional_price_dtos"] = $regionalPriceDtos;
	}

	public function getRegionalPriceDtos()
	{
		return $this->regionalPriceDtos;
	}

	public function setSkuId($skuId)
	{
		$this->skuId = $skuId;
		$this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId()
	{
		return $this->skuId;
	}

	public function getApiMethodName()
	{
		return "taobao.region.price.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
