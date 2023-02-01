<?php
/**
 * TOP API: alibaba.wdk.coupon.template.query request
 * 
 * @author auto create
 * @since 1.0, 2021.12.02
 */
class AlibabaWdkCouponTemplateQueryRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $paramCouponTemplateQueryRequest;
	
	private $apiParas = array();
	
	public function setParamCouponTemplateQueryRequest($paramCouponTemplateQueryRequest)
	{
		$this->paramCouponTemplateQueryRequest = $paramCouponTemplateQueryRequest;
		$this->apiParas["param_coupon_template_query_request"] = $paramCouponTemplateQueryRequest;
	}

	public function getParamCouponTemplateQueryRequest()
	{
		return $this->paramCouponTemplateQueryRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.coupon.template.query";
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
