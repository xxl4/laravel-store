<?php
/**
 * TOP API: tmall.exchange.returngoods.refuse request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TmallExchangeReturngoodsRefuseRequest
{
	/** 
	 * 换货单号ID
	 **/
	private $disputeId;
	
	/** 
	 * 留言说明
	 **/
	private $leaveMessage;
	
	/** 
	 * 凭证图片
	 **/
	private $leaveMessagePics;
	
	/** 
	 * 拒绝原因ID
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
		return "tmall.exchange.returngoods.refuse";
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
