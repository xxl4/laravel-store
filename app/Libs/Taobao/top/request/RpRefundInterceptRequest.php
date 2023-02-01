<?php
/**
 * TOP API: taobao.rp.refund.intercept request
 * 
 * @author auto create
 * @since 1.0, 2022.08.24
 */
class RpRefundInterceptRequest
{
	/** 
	 * 退款编号
	 **/
	private $refundId;
	
	/** 
	 * 退款版本号
	 **/
	private $refundVersion;
	
	private $apiParas = array();
	
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
		return "taobao.rp.refund.intercept";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->refundId,"refundId");
		RequestCheckUtil::checkNotNull($this->refundVersion,"refundVersion");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
