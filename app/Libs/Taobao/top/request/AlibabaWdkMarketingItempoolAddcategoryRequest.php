<?php
/**
 * TOP API: alibaba.wdk.marketing.itempool.addcategory request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class AlibabaWdkMarketingItempoolAddcategoryRequest
{
	/** 
	 * 活动对象
	 **/
	private $commonActivityParam;
	
	/** 
	 * 类目对象
	 **/
	private $itemPoolActivityCategory;
	
	private $apiParas = array();
	
	public function setCommonActivityParam($commonActivityParam)
	{
		$this->commonActivityParam = $commonActivityParam;
		$this->apiParas["common_activity_param"] = $commonActivityParam;
	}

	public function getCommonActivityParam()
	{
		return $this->commonActivityParam;
	}

	public function setItemPoolActivityCategory($itemPoolActivityCategory)
	{
		$this->itemPoolActivityCategory = $itemPoolActivityCategory;
		$this->apiParas["item_pool_activity_category"] = $itemPoolActivityCategory;
	}

	public function getItemPoolActivityCategory()
	{
		return $this->itemPoolActivityCategory;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.marketing.itempool.addcategory";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
