<?php
/**
 * TOP API: cainiao.waybill.ii.confirm request
 * 
 * @author auto create
 * @since 1.0, 2021.09.16
 */
class CainiaoWaybillIiConfirmRequest
{
	/** 
	 * 订单确认信息
	 **/
	private $paramWaybillOrderConfirmRequest;
	
	private $apiParas = array();
	
	public function setParamWaybillOrderConfirmRequest($paramWaybillOrderConfirmRequest)
	{
		$this->paramWaybillOrderConfirmRequest = $paramWaybillOrderConfirmRequest;
		$this->apiParas["param_waybill_order_confirm_request"] = $paramWaybillOrderConfirmRequest;
	}

	public function getParamWaybillOrderConfirmRequest()
	{
		return $this->paramWaybillOrderConfirmRequest;
	}

	public function getApiMethodName()
	{
		return "cainiao.waybill.ii.confirm";
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
