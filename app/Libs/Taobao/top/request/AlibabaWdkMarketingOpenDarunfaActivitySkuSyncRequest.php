<?php
/**
 * TOP API: alibaba.wdk.marketing.open.darunfa.activity.sku.sync request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class AlibabaWdkMarketingOpenDarunfaActivitySkuSyncRequest
{
	/** 
	 * 大润发活动Id
	 **/
	private $activityId;
	
	/** 
	 * 淘鲜达活动商品信息
	 **/
	private $activitySkuList;
	
	/** 
	 * 活动对应的门店Id
	 **/
	private $shopId;
	
	/** 
	 * 数据版本Id
	 **/
	private $versionId;
	
	private $apiParas = array();
	
	public function setActivityId($activityId)
	{
		$this->activityId = $activityId;
		$this->apiParas["activity_id"] = $activityId;
	}

	public function getActivityId()
	{
		return $this->activityId;
	}

	public function setActivitySkuList($activitySkuList)
	{
		$this->activitySkuList = $activitySkuList;
		$this->apiParas["activity_sku_list"] = $activitySkuList;
	}

	public function getActivitySkuList()
	{
		return $this->activitySkuList;
	}

	public function setShopId($shopId)
	{
		$this->shopId = $shopId;
		$this->apiParas["shop_id"] = $shopId;
	}

	public function getShopId()
	{
		return $this->shopId;
	}

	public function setVersionId($versionId)
	{
		$this->versionId = $versionId;
		$this->apiParas["version_id"] = $versionId;
	}

	public function getVersionId()
	{
		return $this->versionId;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.marketing.open.darunfa.activity.sku.sync";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->activityId,"activityId");
		RequestCheckUtil::checkNotNull($this->versionId,"versionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
