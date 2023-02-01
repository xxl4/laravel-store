<?php
/**
 * TOP API: alibaba.wdk.marketing.open.darunfa.activity.sync request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class AlibabaWdkMarketingOpenDarunfaActivitySyncRequest
{
	/** 
	 * 大润发活动数据
	 **/
	private $activityList;
	
	/** 
	 * 门店Id
	 **/
	private $shopId;
	
	/** 
	 * 版本ID
	 **/
	private $versionId;
	
	private $apiParas = array();
	
	public function setActivityList($activityList)
	{
		$this->activityList = $activityList;
		$this->apiParas["activity_list"] = $activityList;
	}

	public function getActivityList()
	{
		return $this->activityList;
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
		return "alibaba.wdk.marketing.open.darunfa.activity.sync";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->shopId,"shopId");
		RequestCheckUtil::checkNotNull($this->versionId,"versionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
