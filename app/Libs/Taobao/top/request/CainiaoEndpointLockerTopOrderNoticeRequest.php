<?php
/**
 * TOP API: cainiao.endpoint.locker.top.order.notice request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CainiaoEndpointLockerTopOrderNoticeRequest
{
	/** 
	 * 运单号
	 **/
	private $mailNo;
	
	/** 
	 * 合作公司唯一订单编号
	 **/
	private $orderCode;
	
	/** 
	 * 场景编号：0：重发短信，1：催取短信
	 **/
	private $sceneCode;
	
	/** 
	 * 站点ID
	 **/
	private $stationId;
	
	private $apiParas = array();
	
	public function setMailNo($mailNo)
	{
		$this->mailNo = $mailNo;
		$this->apiParas["mail_no"] = $mailNo;
	}

	public function getMailNo()
	{
		return $this->mailNo;
	}

	public function setOrderCode($orderCode)
	{
		$this->orderCode = $orderCode;
		$this->apiParas["order_code"] = $orderCode;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function setSceneCode($sceneCode)
	{
		$this->sceneCode = $sceneCode;
		$this->apiParas["scene_code"] = $sceneCode;
	}

	public function getSceneCode()
	{
		return $this->sceneCode;
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
		return "cainiao.endpoint.locker.top.order.notice";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mailNo,"mailNo");
		RequestCheckUtil::checkNotNull($this->orderCode,"orderCode");
		RequestCheckUtil::checkNotNull($this->sceneCode,"sceneCode");
		RequestCheckUtil::checkNotNull($this->stationId,"stationId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
