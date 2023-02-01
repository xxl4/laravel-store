<?php
/**
 * TOP API: alibaba.wdk.coupon.template.update request
 * 
 * @author auto create
 * @since 1.0, 2021.11.22
 */
class AlibabaWdkCouponTemplateUpdateRequest
{
	/** 
	 * 请求
	 **/
	private $paramCouponTemplateOperateRequest;
	
	private $apiParas = array();
	
	public function setParamCouponTemplateOperateRequest($paramCouponTemplateOperateRequest)
	{
		$this->paramCouponTemplateOperateRequest = $paramCouponTemplateOperateRequest;
		$this->apiParas["param_coupon_template_operate_request"] = $paramCouponTemplateOperateRequest;
	}

	public function getParamCouponTemplateOperateRequest()
	{
		return $this->paramCouponTemplateOperateRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.coupon.template.update";
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
