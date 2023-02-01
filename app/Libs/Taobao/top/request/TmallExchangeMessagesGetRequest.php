<?php
/**
 * TOP API: tmall.exchange.messages.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class TmallExchangeMessagesGetRequest
{
	/** 
	 * 换货单号ID
	 **/
	private $disputeId;
	
	/** 
	 * 返回的字段。具体包括：id,refund_id,owner_id,owner_nick,owner_role,content,pic_urls,created,message_type
	 **/
	private $fields;
	
	/** 
	 * 留言创建角色。具体包括：卖家主账户(1)、卖家子账户(2)、小二(3)、买家(4)、系统(5)、系统超时(6)
	 **/
	private $operatorRoles;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setDisputeId($disputeId)
	{
		$this->disputeId = $disputeId;
		$this->apiParas["dispute_id"] = $disputeId;
	}

	public function getDisputeId()
	{
		return $this->disputeId;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setOperatorRoles($operatorRoles)
	{
		$this->operatorRoles = $operatorRoles;
		$this->apiParas["operator_roles"] = $operatorRoles;
	}

	public function getOperatorRoles()
	{
		return $this->operatorRoles;
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

	public function getApiMethodName()
	{
		return "tmall.exchange.messages.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->disputeId,"disputeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
