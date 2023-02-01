<?php
/**
 * TOP API: alibaba.wdk.coupon.template.create request
 * 
 * @author auto create
 * @since 1.0, 2021.12.02
 */
class AlibabaWdkCouponTemplateCreateRequest
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
		return "alibaba.wdk.coupon.template.create";
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
