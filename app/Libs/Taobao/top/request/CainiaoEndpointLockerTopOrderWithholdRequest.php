<?php
/**
 * TOP API: cainiao.endpoint.locker.top.order.withhold request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CainiaoEndpointLockerTopOrderWithholdRequest
{
	/** 
	 * 柜子公司编码
	 **/
	private $companyCode;
	
	/** 
	 * 扩展字段
	 **/
	private $extra;
	
	/** 
	 * 柜子id
	 **/
	private $guiId;
	
	/** 
	 * 运单号
	 **/
	private $mailNo;
	
	/** 
	 * 开放用户id
	 **/
	private $openUserId;
	
	/** 
	 * 柜子订单编码
	 **/
	private $orderCode;
	
	/** 
	 * 订单类型(0-取件业务，1-寄件业务，2-派样业务)
	 **/
	private $orderType;
	
	/** 
	 * 代扣金额（全额），单位：分
	 **/
	private $totalFee;
	
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

	public function setExtra($extra)
	{
		$this->extra = $extra;
		$this->apiParas["extra"] = $extra;
	}

	public function getExtra()
	{
		return $this->extra;
	}

	public function setGuiId($guiId)
	{
		$this->guiId = $guiId;
		$this->apiParas["gui_id"] = $guiId;
	}

	public function getGuiId()
	{
		return $this->guiId;
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

	public function setOpenUserId($openUserId)
	{
		$this->openUserId = $openUserId;
		$this->apiParas["open_user_id"] = $openUserId;
	}

	public function getOpenUserId()
	{
		return $this->openUserId;
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

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function setTotalFee($totalFee)
	{
		$this->totalFee = $totalFee;
		$this->apiParas["total_fee"] = $totalFee;
	}

	public function getTotalFee()
	{
		return $this->totalFee;
	}

	public function getApiMethodName()
	{
		return "cainiao.endpoint.locker.top.order.withhold";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->companyCode,"companyCode");
		RequestCheckUtil::checkNotNull($this->guiId,"guiId");
		RequestCheckUtil::checkNotNull($this->mailNo,"mailNo");
		RequestCheckUtil::checkNotNull($this->openUserId,"openUserId");
		RequestCheckUtil::checkNotNull($this->orderCode,"orderCode");
		RequestCheckUtil::checkNotNull($this->orderType,"orderType");
		RequestCheckUtil::checkNotNull($this->totalFee,"totalFee");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
