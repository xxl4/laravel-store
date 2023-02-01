<?php
/**
 * TOP API: taobao.fenxiao.cooperation.get request
 * 
 * @author auto create
 * @since 1.0, 2021.02.02
 */
class FenxiaoCooperationGetRequest
{
	/** 
	 * 渠道code
	 **/
	private $channelCode;
	
	/** 
	 * 合作结束时间yyyy-MM-dd HH:mm:ss
	 **/
	private $endDate;
	
	/** 
	 * 页码（大于0的整数，默认1）
	 **/
	private $pageNo;
	
	/** 
	 * 每页记录数（默认20，最大50）
	 **/
	private $pageSize;
	
	/** 
	 * 1是供应商，2 是分销商
	 **/
	private $roleType;
	
	/** 
	 * 合作开始时间yyyy-MM-dd HH:mm:ss
	 **/
	private $startDate;
	
	/** 
	 * 合作状态： NORMAL(合作中)、 ENDING(终止中) 、END (终止)
	 **/
	private $status;
	
	/** 
	 * 分销方式：AGENT(代销) 、DEALER（经销）
	 **/
	private $tradeType;
	
	private $apiParas = array();
	
	public function setChannelCode($channelCode)
	{
		$this->channelCode = $channelCode;
		$this->apiParas["channel_code"] = $channelCode;
	}

	public function getChannelCode()
	{
		return $this->channelCode;
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

	public function setRoleType($roleType)
	{
		$this->roleType = $roleType;
		$this->apiParas["role_type"] = $roleType;
	}

	public function getRoleType()
	{
		return $this->roleType;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setTradeType($tradeType)
	{
		$this->tradeType = $tradeType;
		$this->apiParas["trade_type"] = $tradeType;
	}

	public function getTradeType()
	{
		return $this->tradeType;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.cooperation.get";
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
