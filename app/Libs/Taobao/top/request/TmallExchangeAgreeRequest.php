<?php
/**
 * TOP API: tmall.exchange.agree request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class TmallExchangeAgreeRequest
{
	/** 
	 * 收货地址id，如需获取请调用该top接口：taobao.logistics.address.search，对应属性为contact_id
	 **/
	private $addressId;
	
	/** 
	 * 详细收货地址
	 **/
	private $completeAddress;
	
	/** 
	 * 换货单号ID
	 **/
	private $disputeId;
	
	/** 
	 * 返回字段。当前支持的有 dispute_id, bizorder_id, modified, status
	 **/
	private $fields;
	
	/** 
	 * 卖家留言
	 **/
	private $leaveMessage;
	
	/** 
	 * 上传图片举证
	 **/
	private $leaveMessagePics;
	
	/** 
	 * 收货人手机号
	 **/
	private $mobile;
	
	/** 
	 * 邮政编码
	 **/
	private $post;
	
	private $apiParas = array();
	
	public function setAddressId($addressId)
	{
		$this->addressId = $addressId;
		$this->apiParas["address_id"] = $addressId;
	}

	public function getAddressId()
	{
		return $this->addressId;
	}

	public function setCompleteAddress($completeAddress)
	{
		$this->completeAddress = $completeAddress;
		$this->apiParas["complete_address"] = $completeAddress;
	}

	public function getCompleteAddress()
	{
		return $this->completeAddress;
	}

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

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
	}

	public function setPost($post)
	{
		$this->post = $post;
		$this->apiParas["post"] = $post;
	}

	public function getPost()
	{
		return $this->post;
	}

	public function getApiMethodName()
	{
		return "tmall.exchange.agree";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->addressId,"addressId");
		RequestCheckUtil::checkNotNull($this->disputeId,"disputeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
