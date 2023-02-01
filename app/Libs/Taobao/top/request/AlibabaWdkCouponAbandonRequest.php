<?php
/**
 * TOP API: alibaba.wdk.coupon.abandon request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class AlibabaWdkCouponAbandonRequest
{
	/** 
	 * 废券参数
	 **/
	private $paramWdkCouponAbandonParam;
	
	private $apiParas = array();
	
	public function setParamWdkCouponAbandonParam($paramWdkCouponAbandonParam)
	{
		$this->paramWdkCouponAbandonParam = $paramWdkCouponAbandonParam;
		$this->apiParas["param_wdk_coupon_abandon_param"] = $paramWdkCouponAbandonParam;
	}

	public function getParamWdkCouponAbandonParam()
	{
		return $this->paramWdkCouponAbandonParam;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.coupon.abandon";
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
