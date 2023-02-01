<?php
/**
 * TOP API: alibaba.wdk.coupon.template.queryumpactid request
 * 
 * @author auto create
 * @since 1.0, 2021.11.22
 */
class AlibabaWdkCouponTemplateQueryumpactidRequest
{
	/** 
	 * 券模版id列表
	 **/
	private $sourceIds;
	
	/** 
	 * 优惠券类型
	 **/
	private $wdkCouponType;
	
	private $apiParas = array();
	
	public function setSourceIds($sourceIds)
	{
		$this->sourceIds = $sourceIds;
		$this->apiParas["source_ids"] = $sourceIds;
	}

	public function getSourceIds()
	{
		return $this->sourceIds;
	}

	public function setWdkCouponType($wdkCouponType)
	{
		$this->wdkCouponType = $wdkCouponType;
		$this->apiParas["wdk_coupon_type"] = $wdkCouponType;
	}

	public function getWdkCouponType()
	{
		return $this->wdkCouponType;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.coupon.template.queryumpactid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->wdkCouponType,"wdkCouponType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
