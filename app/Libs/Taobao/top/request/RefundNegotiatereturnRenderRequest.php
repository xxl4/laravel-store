<?php
/**
 * TOP API: taobao.refund.negotiatereturn.render request
 * 
 * @author auto create
 * @since 1.0, 2022.08.24
 */
class RefundNegotiatereturnRenderRequest
{
	/** 
	 * 退款编号
	 **/
	private $refundId;
	
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

	public function getApiMethodName()
	{
		return "taobao.refund.negotiatereturn.render";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->refundId,"refundId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
