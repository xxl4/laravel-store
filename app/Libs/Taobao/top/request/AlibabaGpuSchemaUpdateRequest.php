<?php
/**
 * TOP API: alibaba.gpu.schema.update request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class AlibabaGpuSchemaUpdateRequest
{
	/** 
	 * 产品ID
	 **/
	private $productId;
	
	/** 
	 * 当前用户所在渠道如0代表天猫，8代表淘宝
	 **/
	private $providerId;
	
	/** 
	 * 更新产品提交的schema数据
	 **/
	private $schemaXmlFields;
	
	private $apiParas = array();
	
	public function setProductId($productId)
	{
		$this->productId = $productId;
		$this->apiParas["product_id"] = $productId;
	}

	public function getProductId()
	{
		return $this->productId;
	}

	public function setProviderId($providerId)
	{
		$this->providerId = $providerId;
		$this->apiParas["provider_id"] = $providerId;
	}

	public function getProviderId()
	{
		return $this->providerId;
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
		return "alibaba.gpu.schema.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->productId,"productId");
		RequestCheckUtil::checkNotNull($this->providerId,"providerId");
		RequestCheckUtil::checkNotNull($this->schemaXmlFields,"schemaXmlFields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
