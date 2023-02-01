<?php
/**
 * TOP API: tmall.exchange.refusereason.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class TmallExchangeRefusereasonGetRequest
{
	/** 
	 * 换货单号ID
	 **/
	private $disputeId;
	
	/** 
	 * 换货申请类型：0-任意类型；1-售中；2-售后
	 **/
	private $disputeType;
	
	/** 
	 * 返回字段
	 **/
	private $fields;
	
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

	public function setDisputeType($disputeType)
	{
		$this->disputeType = $disputeType;
		$this->apiParas["dispute_type"] = $disputeType;
	}

	public function getDisputeType()
	{
		return $this->disputeType;
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

	public function getApiMethodName()
	{
		return "tmall.exchange.refusereason.get";
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
