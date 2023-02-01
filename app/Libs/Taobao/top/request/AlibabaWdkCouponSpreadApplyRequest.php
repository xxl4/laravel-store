<?php
/**
 * TOP API: alibaba.wdk.coupon.spread.apply request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class AlibabaWdkCouponSpreadApplyRequest
{
	/** 
	 * 参数对象
	 **/
	private $paramWdkCouponApplyParam;
	
	private $apiParas = array();
	
	public function setParamWdkCouponApplyParam($paramWdkCouponApplyParam)
	{
		$this->paramWdkCouponApplyParam = $paramWdkCouponApplyParam;
		$this->apiParas["param_wdk_coupon_apply_param"] = $paramWdkCouponApplyParam;
	}

	public function getParamWdkCouponApplyParam()
	{
		return $this->paramWdkCouponApplyParam;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.coupon.spread.apply";
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
