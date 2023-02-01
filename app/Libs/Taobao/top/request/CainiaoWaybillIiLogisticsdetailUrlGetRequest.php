<?php
/**
 * TOP API: cainiao.waybill.ii.logisticsdetail.url.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class CainiaoWaybillIiLogisticsdetailUrlGetRequest
{
	/** 
	 * 快递公司编码
	 **/
	private $cpCode;
	
	/** 
	 * 电子面单单号
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
		return "cainiao.waybill.ii.logisticsdetail.url.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cpCode,"cpCode");
		RequestCheckUtil::checkNotNull($this->waybillCode,"waybillCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
