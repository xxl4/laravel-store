<?php
/**
 * TOP API: alibaba.wdk.coupon.sku.query request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class AlibabaWdkCouponSkuQueryRequest
{
	/** 
	 * 请求
	 **/
	private $paramCouponTemplateItemQueryRequest;
	
	private $apiParas = array();
	
	public function setParamCouponTemplateItemQueryRequest($paramCouponTemplateItemQueryRequest)
	{
		$this->paramCouponTemplateItemQueryRequest = $paramCouponTemplateItemQueryRequest;
		$this->apiParas["param_coupon_template_item_query_request"] = $paramCouponTemplateItemQueryRequest;
	}

	public function getParamCouponTemplateItemQueryRequest()
	{
		return $this->paramCouponTemplateItemQueryRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.coupon.sku.query";
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
