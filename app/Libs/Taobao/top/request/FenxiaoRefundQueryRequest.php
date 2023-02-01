<?php
/**
 * TOP API: taobao.fenxiao.refund.query request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class FenxiaoRefundQueryRequest
{
	/** 
	 * 代销：1 经销：2 寄售（猫超自营寄售）：5 平台寄售：6
	 **/
	private $channelCodes;
	
	/** 
	 * 代销采购退款最迟修改时间。与start_date的最大时间间隔不能超过30天
	 **/
	private $endDate;
	
	/** 
	 * 页码（大于0的整数。无值或小于1的值按默认值1计）
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数（大于0但小于等于50的整数。无值或大于50或小于1的值按默认值50计）
	 **/
	private $pageSize;
	
	/** 
	 * 是否查询下游买家的退款信息
	 **/
	private $querySellerRefund;
	
	/** 
	 * 代销采购退款单最早修改时间
	 **/
	private $startDate;
	
	/** 
	 * 渠道code，可批量 老供销渠道：999
	 **/
	private $tradeTypes;
	
	/** 
	 * 角色，供应商：2，分销商：1
	 **/
	private $userRoleType;
	
	private $apiParas = array();
	
	public function setChannelCodes($channelCodes)
	{
		$this->channelCodes = $channelCodes;
		$this->apiParas["channel_codes"] = $channelCodes;
	}

	public function getChannelCodes()
	{
		return $this->channelCodes;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setQuerySellerRefund($querySellerRefund)
	{
		$this->querySellerRefund = $querySellerRefund;
		$this->apiParas["query_seller_refund"] = $querySellerRefund;
	}

	public function getQuerySellerRefund()
	{
		return $this->querySellerRefund;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function setTradeTypes($tradeTypes)
	{
		$this->tradeTypes = $tradeTypes;
		$this->apiParas["trade_types"] = $tradeTypes;
	}

	public function getTradeTypes()
	{
		return $this->tradeTypes;
	}

	public function setUserRoleType($userRoleType)
	{
		$this->userRoleType = $userRoleType;
		$this->apiParas["user_role_type"] = $userRoleType;
	}

	public function getUserRoleType()
	{
		return $this->userRoleType;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.refund.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
