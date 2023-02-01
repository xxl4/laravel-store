<?php
/**
 * TOP API: alibaba.item.publish.submit request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class AlibabaItemPublishSubmitRequest
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
	 * 商品发布的市场。taobao:淘宝,tmall:天猫,litetao:淘宝特价版
	 **/
	private $market;
	
	/** 
	 * 商品schema信息，通过alibaba.item.publish.props.get获取并补全后提交
	 **/
	private $schema;
	
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

	public function setMarket($market)
	{
		$this->market = $market;
		$this->apiParas["market"] = $market;
	}

	public function getMarket()
	{
		return $this->market;
	}

	public function setSchema($schema)
	{
		$this->schema = $schema;
		$this->apiParas["schema"] = $schema;
	}

	public function getSchema()
	{
		return $this->schema;
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
		return "alibaba.item.publish.submit";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->catId,"catId");
		RequestCheckUtil::checkNotNull($this->market,"market");
		RequestCheckUtil::checkNotNull($this->schema,"schema");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
