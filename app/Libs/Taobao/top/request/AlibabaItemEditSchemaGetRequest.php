<?php
/**
 * TOP API: alibaba.item.edit.schema.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class AlibabaItemEditSchemaGetRequest
{
	/** 
	 * 业务扩展参数，需与平台约定好
	 **/
	private $bizType;
	
	/** 
	 * 制定返回schema中field字段列表，可用于裁剪返回的schema信息。不填则为全部field
	 **/
	private $fields;
	
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	private $apiParas = array();
	
	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
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

	public function getApiMethodName()
	{
		return "alibaba.item.edit.schema.get";
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
