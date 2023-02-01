<?php
/**
 * TOP API: alibaba.item.publish.props.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class AlibabaItemPublishPropsGetRequest
{
	/** 
	 * 商品条码
	 **/
	private $barcode;
	
	/** 
	 * 商品类目ID
	 **/
	private $catId;
	
	/** 
	 * 商品发布的市场。taobao:淘宝,tmall:天猫,litetao:淘宝特价版
	 **/
	private $market;
	
	/** 
	 * 属性ID
	 **/
	private $propId;
	
	/** 
	 * 类目属性渲染schema
	 **/
	private $schema;
	
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

	public function setPropId($propId)
	{
		$this->propId = $propId;
		$this->apiParas["prop_id"] = $propId;
	}

	public function getPropId()
	{
		return $this->propId;
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

	public function getApiMethodName()
	{
		return "alibaba.item.publish.props.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->catId,"catId");
		RequestCheckUtil::checkNotNull($this->market,"market");
		RequestCheckUtil::checkNotNull($this->propId,"propId");
		RequestCheckUtil::checkNotNull($this->schema,"schema");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
