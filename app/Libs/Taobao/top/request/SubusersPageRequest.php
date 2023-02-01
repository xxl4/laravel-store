<?php
/**
 * TOP API: taobao.subusers.page request
 * 
 * @author auto create
 * @since 1.0, 2022.02.18
 */
class SubusersPageRequest
{
	/** 
	 * 可以不传，不传的话和老接口返回数据一样。如果传则根据子账号当前状态筛选 1正常   2冻结  3处罚，如果不传默认都返回
	 **/
	private $accountStatus;
	
	/** 
	 * 页码，大于等于1
	 **/
	private $pageNum;
	
	/** 
	 * 页大小，大于1小于200
	 **/
	private $pageSize;
	
	/** 
	 * 主账号用户名
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setAccountStatus($accountStatus)
	{
		$this->accountStatus = $accountStatus;
		$this->apiParas["account_status"] = $accountStatus;
	}

	public function getAccountStatus()
	{
		return $this->accountStatus;
	}

	public function setPageNum($pageNum)
	{
		$this->pageNum = $pageNum;
		$this->apiParas["page_num"] = $pageNum;
	}

	public function getPageNum()
	{
		return $this->pageNum;
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

	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function getApiMethodName()
	{
		return "taobao.subusers.page";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->userNick,"userNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
