<?php
/**
 * TOP API: tmall.dispute.receive.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class TmallDisputeReceiveGetRequest
{
	/** 
	 * 买家昵称
	 **/
	private $buyerNick;
	
	/** 
	 * 查询修改时间结束。格式: yyyy-MM-dd HH:mm:ss
	 **/
	private $endModified;
	
	/** 
	 * 需要返回的字段。目前支持有：refund_id, alipay_no, tid, buyer_nick, seller_nick, status, created, modified, order_status, refund_fee, good_status, show_return_logistic(展现买家退货的物流信息), show_exchange_logistic(展现换货的物流信息), time_out, oid, refund_version, title, num, dispute_request, reason, desc
	 **/
	private $fields;
	
	/** 
	 * 页码。取值范围:大于零的整数; 默认值:1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于零的整数; 默认值:20;最大值:100
	 **/
	private $pageSize;
	
	/** 
	 * 逆向纠纷单号id
	 **/
	private $refundId;
	
	/** 
	 * 查询修改时间开始。格式: yyyy-MM-dd HH:mm:ss
	 **/
	private $startModified;
	
	/** 
	 * 退款状态，默认查询所有退款状态的数据，除了默认值外每次只能查询一种状态。WAIT_SELLER_AGREE(买家已经申请退款，等待卖家同意);WAIT_BUYER_RETURN_GOODS(卖家已经同意退款，等待买家退货);WAIT_SELLER_CONFIRM_GOODS(买家已经退货，等待卖家确认收货);CLOSED(退款关闭); SUCCESS(退款成功);SELLER_REFUSE_BUYER(卖家拒绝退款);WAIT_BUYER_CONFIRM_REDO_SEND_GOODS(等待买家确认重新邮寄的货物);WAIT_SELLER_CONFIRM_RETURN_ADDRESS(等待卖家确认退货地址);WAIT_SELLER_CONSIGN_GOOGDS(卖家确认收货,等待卖家发货);EXCHANGE_TRANSFORM_TO_REFUND(换货关闭,转退货退款);EXCHANGE_WAIT_BUYER_CONFIRM_GOODS(卖家已发货,等待买家确认收货);POST_FEE_DISPUTE_WAIT_ACTIVATE(邮费单已创建,待激活)
	 **/
	private $status;
	
	/** 
	 * 交易类型列表，一次查询多种类型可用半角逗号分隔，默认同时查询guarantee_trade, auto_delivery这两种类型的数据，查看可选值
	 **/
	private $type;
	
	/** 
	 * 是否启用has_next的分页方式，如果指定true,则返回的结果中不包含总记录数，但是会新增一个是否存在下一页的的字段，通过此种方式获取增量退款，接口调用成功率在原有的基础上有所提升。
	 **/
	private $useHasNext;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setEndModified($endModified)
	{
		$this->endModified = $endModified;
		$this->apiParas["end_modified"] = $endModified;
	}

	public function getEndModified()
	{
		return $this->endModified;
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

	public function setRefundId($refundId)
	{
		$this->refundId = $refundId;
		$this->apiParas["refund_id"] = $refundId;
	}

	public function getRefundId()
	{
		return $this->refundId;
	}

	public function setStartModified($startModified)
	{
		$this->startModified = $startModified;
		$this->apiParas["start_modified"] = $startModified;
	}

	public function getStartModified()
	{
		return $this->startModified;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setUseHasNext($useHasNext)
	{
		$this->useHasNext = $useHasNext;
		$this->apiParas["use_has_next"] = $useHasNext;
	}

	public function getUseHasNext()
	{
		return $this->useHasNext;
	}

	public function getApiMethodName()
	{
		return "tmall.dispute.receive.get";
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
