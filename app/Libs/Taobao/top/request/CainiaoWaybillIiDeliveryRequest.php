<?php
/**
 * TOP API: cainiao.waybill.ii.delivery request
 * 
 * @author auto create
 * @since 1.0, 2021.11.16
 */
class CainiaoWaybillIiDeliveryRequest
{
	/** 
	 * 物流供应商编码
	 **/
	private $cpCode;
	
	/** 
	 * 派送类型，1:通知派送； -1: 通知退回
	 **/
	private $deliveryAction;
	
	/** 
	 * 面单号
	 **/
	private $waybillCode;
	
	private $apiParas = array();
	
	public function setCpCode($cpCode)
	{
		$this->cpCode = $cpCode;
		$this->apiParas["cp_code"] = $cpCode;
	}

	public function getCpCode()
	{
		return $this->cpCode;
	}

	public function setDeliveryAction($deliveryAction)
	{
		$this->deliveryAction = $deliveryAction;
		$this->apiParas["delivery_action"] = $deliveryAction;
	}

	public function getDeliveryAction()
	{
		return $this->deliveryAction;
	}

	public function setWaybillCode($waybillCode)
	{
		$this->waybillCode = $waybillCode;
		$this->apiParas["waybill_code"] = $waybillCode;
	}

	public function getWaybillCode()
	{
		return $this->waybillCode;
	}

	public function getApiMethodName()
	{
		return "cainiao.waybill.ii.delivery";
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
