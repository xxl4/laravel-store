<?php
/**
 * TOP API: alibaba.wdk.coupon.sku.add request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class AlibabaWdkCouponSkuAddRequest
{
	/** 
	 * 请求
	 **/
	private $paramCouponTemplateItemRequest;
	
	private $apiParas = array();
	
	public function setParamCouponTemplateItemRequest($paramCouponTemplateItemRequest)
	{
		$this->paramCouponTemplateItemRequest = $paramCouponTemplateItemRequest;
		$this->apiParas["param_coupon_template_item_request"] = $paramCouponTemplateItemRequest;
	}

	public function getParamCouponTemplateItemRequest()
	{
		return $this->paramCouponTemplateItemRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.coupon.sku.add";
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
