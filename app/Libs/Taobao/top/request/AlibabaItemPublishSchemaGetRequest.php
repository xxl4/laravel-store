<?php
/**
 * TOP API: alibaba.item.publish.schema.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class AlibabaItemPublishSchemaGetRequest
{
	/** 
	 * 商品条码
	 **/
	private $barcode;
	
	/** 
	 * 业务扩展参数，需与平台约定好
	 **/
	private $bizType;
	
	/** 
	 * 商品类目ID
	 **/
	private $catId;
	
	/** 
	 * 商品主图链接，最多5张，传入完整URL
	 **/
	private $images;
	
	/** 
	 * 商品类型。b:一口价  a:拍卖  默认值b一口价
	 **/
	private $itemType;
	
	/** 
	 * 商品发布的市场。taobao:淘宝,tmall:天猫,litetao:淘宝特价版
	 **/
	private $market;
	
	/** 
	 * 产品ID，天猫市场(market=tmall)时必填
	 **/
	private $spuId;
	
	private $apiParas = array();
	
	public function setBarcode($barcode)
	{
		$this->barcode = $barcode;
		$this->apiParas["barcode"] = $barcode;
	}

	public function getBarcode()
	{
		return $this->barcode;
	}

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setCatId($catId)
	{
		$this->catId = $catId;
		$this->apiParas["cat_id"] = $catId;
	}

	public function getCatId()
	{
		return $this->catId;
	}

	public function setImages($images)
	{
		$this->images = $images;
		$this->apiParas["images"] = $images;
	}

	public function getImages()
	{
		return $this->images;
	}

	public function setItemType($itemType)
	{
		$this->itemType = $itemType;
		$this->apiParas["item_type"] = $itemType;
	}

	public function getItemType()
	{
		return $this->itemType;
	}

	public function setMarket($market)
	{
		$this->market = $market;
		$this->apiParas["market"] = $market;
	}

	public function getMarket()
	{
		return $this->market;
	}

	public function setSpuId($spuId)
	{
		$this->spuId = $spuId;
		$this->apiParas["spu_id"] = $spuId;
	}

	public function getSpuId()
	{
		return $this->spuId;
	}

	public function getApiMethodName()
	{
		return "alibaba.item.publish.schema.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->catId,"catId");
		RequestCheckUtil::checkNotNull($this->market,"market");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
