<?php
/**
 * TOP API: tmall.item.simpleschema.update request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class TmallItemSimpleschemaUpdateRequest
{
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * 编辑商品时提交的xml信息
	 **/
	private $schemaXmlFields;
	
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

	public function setSchemaXmlFields($schemaXmlFields)
	{
		$this->schemaXmlFields = $schemaXmlFields;
		$this->apiParas["schema_xml_fields"] = $schemaXmlFields;
	}

	public function getSchemaXmlFields()
	{
		return $this->schemaXmlFields;
	}

	public function getApiMethodName()
	{
		return "tmall.item.simpleschema.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->schemaXmlFields,"schemaXmlFields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
