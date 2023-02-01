<?php
/**
 * TOP API: taobao.region.sale.query request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class RegionSaleQueryRequest
{
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * 1:国家;2:省;3: 市;4:区县
	 **/
	private $saleRegionLevel;
	
	/** 
	 * 无sku传0
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

	public function setSaleRegionLevel($saleRegionLevel)
	{
		$this->saleRegionLevel = $saleRegionLevel;
		$this->apiParas["sale_region_level"] = $saleRegionLevel;
	}

	public function getSaleRegionLevel()
	{
		return $this->saleRegionLevel;
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
		return "taobao.region.sale.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->saleRegionLevel,"saleRegionLevel");
		RequestCheckUtil::checkNotNull($this->skuId,"skuId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
