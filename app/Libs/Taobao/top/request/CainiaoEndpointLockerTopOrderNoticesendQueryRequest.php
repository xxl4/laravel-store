<?php
/**
 * TOP API: cainiao.endpoint.locker.top.order.noticesend.query request
 * 
 * @author auto create
 * @since 1.0, 2018.09.12
 */
class CainiaoEndpointLockerTopOrderNoticesendQueryRequest
{
	/** 
	 * 收件人手机号
	 **/
	private $getterPhone;
	
	/** 
	 * 运单号
	 **/
	private $mailNo;
	
	/** 
	 * 站点id
	 **/
	private $stationId;
	
	private $apiParas = array();
	
	public function setGetterPhone($getterPhone)
	{
		$this->getterPhone = $getterPhone;
		$this->apiParas["getter_phone"] = $getterPhone;
	}

	public function getGetterPhone()
	{
		return $this->getterPhone;
	}

	public function setMailNo($mailNo)
	{
		$this->mailNo = $mailNo;
		$this->apiParas["mail_no"] = $mailNo;
	}

	public function getMailNo()
	{
		return $this->mailNo;
	}

	public function setStationId($stationId)
	{
		$this->stationId = $stationId;
		$this->apiParas["station_id"] = $stationId;
	}

	public function getStationId()
	{
		return $this->stationId;
	}

	public function getApiMethodName()
	{
		return "cainiao.endpoint.locker.top.order.noticesend.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mailNo,"mailNo");
		RequestCheckUtil::checkNotNull($this->stationId,"stationId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
