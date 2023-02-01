<?php
/**
 * TOP API: taobao.region.price.manage request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class RegionPriceManageRequest
{
	/** 
	 * true:全量, false:增量
	 **/
	private $isFull;
	
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * 列表
	 **/
	private $regionalPriceDtos;
	
	/** 
	 * 无sku传0
	 **/
	private $skuId;
	
	private $apiParas = array();
	
	public function setIsFull($isFull)
	{
		$this->isFull = $isFull;
		$this->apiParas["is_full"] = $isFull;
	}

	public function getIsFull()
	{
		return $this->isFull;
	}

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
		return "taobao.region.price.manage";
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
