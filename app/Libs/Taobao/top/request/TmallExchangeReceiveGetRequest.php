<?php
/**
 * TOP API: tmall.exchange.receive.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class TmallExchangeReceiveGetRequest
{
	/** 
	 * 正向订单号
	 **/
	private $bizOrderId;
	
	/** 
	 * 买家id
	 **/
	private $buyerId;
	
	/** 
	 * 买家昵称
	 **/
	private $buyerNick;
	
	/** 
	 * 换货状态，具体包括：换货待处理(1), 待买家退货(2), 买家已退货，待收货(3),  换货关闭(4), 换货成功(5), 待买家修改(6), 待发出换货商品(12), 待买家收货(13), 请退款(14)
	 **/
	private $disputeStatusArray;
	
	/** 
	 * 查询申请时间段的结束时间点
	 **/
	private $endCreatedTime;
	
	/** 
	 * 查询修改时间段的结束时间点
	 **/
	private $endGmtModifedTime;
	
	/** 
	 * 返回字段。目前支持dispute_id, bizorder_id, num, buyer_nick, status, created, modified, reason, title, buyer_logistic_no, seller_logistic_no, bought_sku, exchange_sku, buyer_address, address, buyer_phone, buyer_logistic_name, seller_logistic_name, alipay_no, buyer_name, seller_nick
	 **/
	private $fields;
	
	/** 
	 * 快递单号
	 **/
	private $logisticNo;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数
	 **/
	private $pageSize;
	
	/** 
	 * 退款单号ID列表，最多只能输入20个id
	 **/
	private $refundIdArray;
	
	/** 
	 * 查询申请时间段的开始时间点
	 **/
	private $startCreatedTime;
	
	/** 
	 * 查询修改时间段的开始时间点
	 **/
	private $startGmtModifiedTime;
	
	private $apiParas = array();
	
	public function setBizOrderId($bizOrderId)
	{
		$this->bizOrderId = $bizOrderId;
		$this->apiParas["biz_order_id"] = $bizOrderId;
	}

	public function getBizOrderId()
	{
		return $this->bizOrderId;
	}

	public function setBuyerId($buyerId)
	{
		$this->buyerId = $buyerId;
		$this->apiParas["buyer_id"] = $buyerId;
	}

	public function getBuyerId()
	{
		return $this->buyerId;
	}

	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setDisputeStatusArray($disputeStatusArray)
	{
		$this->disputeStatusArray = $disputeStatusArray;
		$this->apiParas["dispute_status_array"] = $disputeStatusArray;
	}

	public function getDisputeStatusArray()
	{
		return $this->disputeStatusArray;
	}

	public function setEndCreatedTime($endCreatedTime)
	{
		$this->endCreatedTime = $endCreatedTime;
		$this->apiParas["end_created_time"] = $endCreatedTime;
	}

	public function getEndCreatedTime()
	{
		return $this->endCreatedTime;
	}

	public function setEndGmtModifedTime($endGmtModifedTime)
	{
		$this->endGmtModifedTime = $endGmtModifedTime;
		$this->apiParas["end_gmt_modifed_time"] = $endGmtModifedTime;
	}

	public function getEndGmtModifedTime()
	{
		return $this->endGmtModifedTime;
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

	public function setLogisticNo($logisticNo)
	{
		$this->logisticNo = $logisticNo;
		$this->apiParas["logistic_no"] = $logisticNo;
	}

	public function getLogisticNo()
	{
		return $this->logisticNo;
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

	public function setRefundIdArray($refundIdArray)
	{
		$this->refundIdArray = $refundIdArray;
		$this->apiParas["refund_id_array"] = $refundIdArray;
	}

	public function getRefundIdArray()
	{
		return $this->refundIdArray;
	}

	public function setStartCreatedTime($startCreatedTime)
	{
		$this->startCreatedTime = $startCreatedTime;
		$this->apiParas["start_created_time"] = $startCreatedTime;
	}

	public function getStartCreatedTime()
	{
		return $this->startCreatedTime;
	}

	public function setStartGmtModifiedTime($startGmtModifiedTime)
	{
		$this->startGmtModifiedTime = $startGmtModifiedTime;
		$this->apiParas["start_gmt_modified_time"] = $startGmtModifiedTime;
	}

	public function getStartGmtModifiedTime()
	{
		return $this->startGmtModifiedTime;
	}

	public function getApiMethodName()
	{
		return "tmall.exchange.receive.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
