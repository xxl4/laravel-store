<?php
/**
 * TOP API: alibaba.gpu.add.schema.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.22
 */
class AlibabaGpuAddSchemaGetRequest
{
	/** 
	 * 品牌ID
	 **/
	private $brandId;
	
	/** 
	 * 叶子类目ID
	 **/
	private $leafCatId;
	
	/** 
	 * 当前用户所在渠道如0代表天猫，8代表淘宝
	 **/
	private $providerId;
	
	private $apiParas = array();
	
	public function setBrandId($brandId)
	{
		$this->brandId = $brandId;
		$this->apiParas["brand_id"] = $brandId;
	}

	public function getBrandId()
	{
		return $this->brandId;
	}

	public function setLeafCatId($leafCatId)
	{
		$this->leafCatId = $leafCatId;
		$this->apiParas["leaf_cat_id"] = $leafCatId;
	}

	public function getLeafCatId()
	{
		return $this->leafCatId;
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
		return "alibaba.gpu.add.schema.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->leafCatId,"leafCatId");
		RequestCheckUtil::checkNotNull($this->providerId,"providerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
