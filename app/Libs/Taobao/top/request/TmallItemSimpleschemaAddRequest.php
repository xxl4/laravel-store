<?php
/**
 * TOP API: tmall.item.simpleschema.add request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class TmallItemSimpleschemaAddRequest
{
	/** 
	 * 根据tmall.item.add.simpleschema.get生成的商品发布规则入参数据
	 **/
	private $schemaXmlFields;
	
	private $apiParas = array();
	
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
		return "tmall.item.simpleschema.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->schemaXmlFields,"schemaXmlFields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
