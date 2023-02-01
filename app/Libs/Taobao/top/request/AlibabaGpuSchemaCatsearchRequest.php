<?php
/**
 * TOP API: alibaba.gpu.schema.catsearch request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class AlibabaGpuSchemaCatsearchRequest
{
	/** 
	 * 当前页
	 **/
	private $currentPage;
	
	/** 
	 * 叶子类目ID
	 **/
	private $leafCatId;
	
	/** 
	 * 每页大小
	 **/
	private $pageSize;
	
	/** 
	 * 渠道Id，如0代表天猫，8代表淘宝
	 **/
	private $providerId;
	
	private $apiParas = array();
	
	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
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

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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
		return "alibaba.gpu.schema.catsearch";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->currentPage,"currentPage");
		RequestCheckUtil::checkNotNull($this->leafCatId,"leafCatId");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->providerId,"providerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
