<?php
/**
 * TOP API: taobao.refund.negotiatereturn request
 * 
 * @author auto create
 * @since 1.0, 2022.08.24
 */
class RefundNegotiatereturnRequest
{
	/** 
	 * 地址ID，通过协商退货退款渲染接口获取到的
	 **/
	private $addressId;
	
	/** 
	 * 退款金额，单位（分）
	 **/
	private $refundFee;
	
	/** 
	 * 退款编号
	 **/
	private $refundId;
	
	/** 
	 * 退款版本号
	 **/
	private $refundVersion;
	
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

	public function setRefundFee($refundFee)
	{
		$this->refundFee = $refundFee;
		$this->apiParas["refund_fee"] = $refundFee;
	}

	public function getRefundFee()
	{
		return $this->refundFee;
	}

	public function setRefundId($refundId)
	{
		$this->refundId = $refundId;
		$this->apiParas["refund_id"] = $refundId;
	}

	public function getRefundId()
	{
		return $this->refundId;
	}

	public function setRefundVersion($refundVersion)
	{
		$this->refundVersion = $refundVersion;
		$this->apiParas["refund_version"] = $refundVersion;
	}

	public function getRefundVersion()
	{
		return $this->refundVersion;
	}

	public function getApiMethodName()
	{
		return "taobao.refund.negotiatereturn";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->addressId,"addressId");
		RequestCheckUtil::checkNotNull($this->refundFee,"refundFee");
		RequestCheckUtil::checkNotNull($this->refundId,"refundId");
		RequestCheckUtil::checkNotNull($this->refundVersion,"refundVersion");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
