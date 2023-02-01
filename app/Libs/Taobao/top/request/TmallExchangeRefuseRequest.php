<?php
/**
 * TOP API: tmall.exchange.refuse request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class TmallExchangeRefuseRequest
{
	/** 
	 * 换货单号ID
	 **/
	private $disputeId;
	
	/** 
	 * 返回字段。目前支持dispute_id, bizorder_id, modified, status
	 **/
	private $fields;
	
	/** 
	 * 拒绝换货申请时的留言
	 **/
	private $leaveMessage;
	
	/** 
	 * 凭证图片
	 **/
	private $leaveMessagePics;
	
	/** 
	 * 换货原因对应ID
	 **/
	private $sellerRefuseReasonId;
	
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

	public function setLeaveMessage($leaveMessage)
	{
		$this->leaveMessage = $leaveMessage;
		$this->apiParas["leave_message"] = $leaveMessage;
	}

	public function getLeaveMessage()
	{
		return $this->leaveMessage;
	}

	public function setLeaveMessagePics($leaveMessagePics)
	{
		$this->leaveMessagePics = $leaveMessagePics;
		$this->apiParas["leave_message_pics"] = $leaveMessagePics;
	}

	public function getLeaveMessagePics()
	{
		return $this->leaveMessagePics;
	}

	public function setSellerRefuseReasonId($sellerRefuseReasonId)
	{
		$this->sellerRefuseReasonId = $sellerRefuseReasonId;
		$this->apiParas["seller_refuse_reason_id"] = $sellerRefuseReasonId;
	}

	public function getSellerRefuseReasonId()
	{
		return $this->sellerRefuseReasonId;
	}

	public function getApiMethodName()
	{
		return "tmall.exchange.refuse";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->disputeId,"disputeId");
		RequestCheckUtil::checkNotNull($this->sellerRefuseReasonId,"sellerRefuseReasonId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
