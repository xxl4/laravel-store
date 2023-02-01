<?php
/**
 * TOP API: alibaba.item.edit.fastupdate request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class AlibabaItemEditFastupdateRequest
{
	/** 
	 * 商品类目ID。若不需要修改商品类目，则不用填写
	 **/
	private $catId;
	
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 编辑后的schema信息(增量更新，只填写需要更新的字段)
	 **/
	private $schema;
	
	/** 
	 * 产品ID，若不需要修改关联的产品信息，则不需要填写
	 **/
	private $spuId;
	
	private $apiParas = array();
	
	public function setCatId($catId)
	{
		$this->catId = $catId;
		$this->apiParas["cat_id"] = $catId;
	}

	public function getCatId()
	{
		return $this->catId;
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
		return "alibaba.item.edit.fastupdate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->schema,"schema");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
