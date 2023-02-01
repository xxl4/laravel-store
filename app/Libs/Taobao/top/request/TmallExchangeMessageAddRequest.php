<?php
/**
 * TOP API: tmall.exchange.message.add request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class TmallExchangeMessageAddRequest
{
	/** 
	 * 留言内容
	 **/
	private $content;
	
	/** 
	 * 换货单号ID
	 **/
	private $disputeId;
	
	/** 
	 * 返回字段。目前支持id,refund_id,owner_id,owner_nick,owner_role,content,pic_urls,created,message_type
	 **/
	private $fields;
	
	/** 
	 * 凭证图片列表
	 **/
	private $messagePics;
	
	private $apiParas = array();
	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
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

	public function setMessagePics($messagePics)
	{
		$this->messagePics = $messagePics;
		$this->apiParas["message_pics"] = $messagePics;
	}

	public function getMessagePics()
	{
		return $this->messagePics;
	}

	public function getApiMethodName()
	{
		return "tmall.exchange.message.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->disputeId,"disputeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
