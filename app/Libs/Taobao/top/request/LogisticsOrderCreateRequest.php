<?php
/**
 * TOP API: taobao.logistics.order.create request
 * 
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class LogisticsOrderCreateRequest
{
	/** 
	 * 运送的货物名称列表，用|号隔开
	 **/
	private $goodsNames;
	
	/** 
	 * 运送货物的数量列表，用|号隔开
	 **/
	private $goodsQuantities;
	
	/** 
	 * 创建订单同时是否进行发货，默认发货。
	 **/
	private $isConsign;
	
	/** 
	 * 运送货物的单价列表(注意：单位为分），用|号隔开
	 **/
	private $itemValues;
	
	/** 
	 * 发货的物流公司代码，如申通=STO，圆通=YTO。is_consign=true时，此项必填。
	 **/
	private $logisCompanyCode;
	
	/** 
	 * 发货方式,默认为自己联系发货。可选值:ONLINE(在线下单)、OFFLINE(自己联系)。
	 **/
	private $logisType;
	
	/** 
	 * 发货的物流公司运单号。在logis_type=OFFLINE且is_consign=true时，此项必填。
	 **/
	private $mailNo;
	
	/** 
	 * 物流发货类型：1-普通订单
不填为默认类型 1-普通订单
	 **/
	private $orderType;
	
	/** 
	 * 卖家旺旺号
	 **/
	private $sellerWangwangId;
	
	/** 
	 * 运费承担方式。1为买家承担运费，2为卖家承担运费，其他值为错误参数。
	 **/
	private $shipping;
	
	/** 
	 * 订单的交易号码
	 **/
	private $tradeId;
	
	private $apiParas = array();
	
	public function setGoodsNames($goodsNames)
	{
		$this->goodsNames = $goodsNames;
		$this->apiParas["goods_names"] = $goodsNames;
	}

	public function getGoodsNames()
	{
		return $this->goodsNames;
	}

	public function setGoodsQuantities($goodsQuantities)
	{
		$this->goodsQuantities = $goodsQuantities;
		$this->apiParas["goods_quantities"] = $goodsQuantities;
	}

	public function getGoodsQuantities()
	{
		return $this->goodsQuantities;
	}

	public function setIsConsign($isConsign)
	{
		$this->isConsign = $isConsign;
		$this->apiParas["is_consign"] = $isConsign;
	}

	public function getIsConsign()
	{
		return $this->isConsign;
	}

	public function setItemValues($itemValues)
	{
		$this->itemValues = $itemValues;
		$this->apiParas["item_values"] = $itemValues;
	}

	public function getItemValues()
	{
		return $this->itemValues;
	}

	public function setLogisCompanyCode($logisCompanyCode)
	{
		$this->logisCompanyCode = $logisCompanyCode;
		$this->apiParas["logis_company_code"] = $logisCompanyCode;
	}

	public function getLogisCompanyCode()
	{
		return $this->logisCompanyCode;
	}

	public function setLogisType($logisType)
	{
		$this->logisType = $logisType;
		$this->apiParas["logis_type"] = $logisType;
	}

	public function getLogisType()
	{
		return $this->logisType;
	}

	public function setMailNo($mailNo)
	{
		$this->mailNo = $mailNo;
		$this->apiParas["mail_no"] = $mailNo;
	}

	public function getMailNo()
	{
		return $this->mailNo;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function setSellerWangwangId($sellerWangwangId)
	{
		$this->sellerWangwangId = $sellerWangwangId;
		$this->apiParas["seller_wangwang_id"] = $sellerWangwangId;
	}

	public function getSellerWangwangId()
	{
		return $this->sellerWangwangId;
	}

	public function setShipping($shipping)
	{
		$this->shipping = $shipping;
		$this->apiParas["shipping"] = $shipping;
	}

	public function getShipping()
	{
		return $this->shipping;
	}

	public function setTradeId($tradeId)
	{
		$this->tradeId = $tradeId;
		$this->apiParas["trade_id"] = $tradeId;
	}

	public function getTradeId()
	{
		return $this->tradeId;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.order.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->goodsNames,"goodsNames");
		RequestCheckUtil::checkNotNull($this->goodsQuantities,"goodsQuantities");
		RequestCheckUtil::checkNotNull($this->itemValues,"itemValues");
		RequestCheckUtil::checkNotNull($this->sellerWangwangId,"sellerWangwangId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
