<?php
/**
 * TOP API: alibaba.wdk.coupon.template.terminate request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class AlibabaWdkCouponTemplateTerminateRequest
{
	/** 
	 * 参数
	 **/
	private $paramCouponTemplateTerminateRequest;
	
	private $apiParas = array();
	
	public function setParamCouponTemplateTerminateRequest($paramCouponTemplateTerminateRequest)
	{
		$this->paramCouponTemplateTerminateRequest = $paramCouponTemplateTerminateRequest;
		$this->apiParas["param_coupon_template_terminate_request"] = $paramCouponTemplateTerminateRequest;
	}

	public function getParamCouponTemplateTerminateRequest()
	{
		return $this->paramCouponTemplateTerminateRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.coupon.template.terminate";
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
