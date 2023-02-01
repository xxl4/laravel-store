<?php
/**
 * TOP API: alibaba.gpu.update.schema.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class AlibabaGpuUpdateSchemaGetRequest
{
	/** 
	 * 产品ID
	 **/
	private $productId;
	
	/** 
	 * 当前用户所在渠道如0代表天猫，8代表淘宝
	 **/
	private $providerId;
	
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

	public function getApiMethodName()
	{
		return "alibaba.gpu.update.schema.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->productId,"productId");
		RequestCheckUtil::checkNotNull($this->providerId,"providerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
