<?php
/**
 * TOP API: cainiao.endpoint.locker.top.withhold.query request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CainiaoEndpointLockerTopWithholdQueryRequest
{
	/** 
	 * 柜子公司编码
	 **/
	private $companyCode;
	
	/** 
	 * 开放用户Id
	 **/
	private $openUserId;
	
	/** 
	 * 柜子业务：0-取件业务，1-寄件业务，2-派样业务，3-小件员约柜（在约期内仅能使用一次）4-小件员租柜（在约期内可反复使用）
	 **/
	private $orderType;
	
	private $apiParas = array();
	
	public function setCompanyCode($companyCode)
	{
		$this->companyCode = $companyCode;
		$this->apiParas["company_code"] = $companyCode;
	}

	public function getCompanyCode()
	{
		return $this->companyCode;
	}

	public function setOpenUserId($openUserId)
	{
		$this->openUserId = $openUserId;
		$this->apiParas["open_user_id"] = $openUserId;
	}

	public function getOpenUserId()
	{
		return $this->openUserId;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function getApiMethodName()
	{
		return "cainiao.endpoint.locker.top.withhold.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->companyCode,"companyCode");
		RequestCheckUtil::checkNotNull($this->openUserId,"openUserId");
		RequestCheckUtil::checkNotNull($this->orderType,"orderType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
