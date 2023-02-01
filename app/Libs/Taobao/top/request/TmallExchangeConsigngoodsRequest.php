<?php
/**
 * TOP API: tmall.exchange.consigngoods request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class TmallExchangeConsigngoodsRequest
{
	/** 
	 * 换货单号ID
	 **/
	private $disputeId;
	
	/** 
	 * 返回字段
	 **/
	private $fields;
	
	/** 
	 * 卖家发货的快递公司
	 **/
	private $logisticsCompanyName;
	
	/** 
	 * 卖家发货的物流单号
	 **/
	private $logisticsNo;
	
	/** 
	 * 卖家发货的物流类型，100表示平邮，200表示快递
	 **/
	private $logisticsType;
	
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

	public function setLogisticsCompanyName($logisticsCompanyName)
	{
		$this->logisticsCompanyName = $logisticsCompanyName;
		$this->apiParas["logistics_company_name"] = $logisticsCompanyName;
	}

	public function getLogisticsCompanyName()
	{
		return $this->logisticsCompanyName;
	}

	public function setLogisticsNo($logisticsNo)
	{
		$this->logisticsNo = $logisticsNo;
		$this->apiParas["logistics_no"] = $logisticsNo;
	}

	public function getLogisticsNo()
	{
		return $this->logisticsNo;
	}

	public function setLogisticsType($logisticsType)
	{
		$this->logisticsType = $logisticsType;
		$this->apiParas["logistics_type"] = $logisticsType;
	}

	public function getLogisticsType()
	{
		return $this->logisticsType;
	}

	public function getApiMethodName()
	{
		return "tmall.exchange.consigngoods";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->disputeId,"disputeId");
		RequestCheckUtil::checkNotNull($this->logisticsCompanyName,"logisticsCompanyName");
		RequestCheckUtil::checkNotNull($this->logisticsNo,"logisticsNo");
		RequestCheckUtil::checkNotNull($this->logisticsType,"logisticsType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
