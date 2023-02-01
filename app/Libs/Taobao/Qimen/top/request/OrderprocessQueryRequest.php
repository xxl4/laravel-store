<?php
/**
 * TOP API: taobao.qimen.orderprocess.query request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OrderprocessQueryRequest
{
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 单据号
	 **/
	private $orderCode;
	
	/** 
	 * 仓储系统单据号
	 **/
	private $orderId;
	
	/** 
	 * 交易单号
	 **/
	private $orderSourceCode;
	
	/** 
	 * 单据类型(JYCK=一般交易出库单;HHCK=换货出库;BFCK=补发出库;PTCK=普通出库单;DBCK=调拨出库;QTCK=其他出库;B2BRK=B2B入库;B2BCK=B2B出库;CGRK=采购入库;DBRK=调拨入库;QTRK=其他入库;XTRK=销退入库;HHRK=换货入库;CNJG=仓内加工单)
	 **/
	private $orderType;
	
	/** 
	 * 货主编码
	 **/
	private $ownerCode;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 仓库编码
	 **/
	private $warehouseCode;
	
	private $apiParas = array();
	
	public function setExtendProps($extendProps)
	{
		$this->extendProps = $extendProps;
		$this->apiParas["extendProps"] = $extendProps;
	}

	public function getExtendProps()
	{
		return $this->extendProps;
	}

	public function setOrderCode($orderCode)
	{
		$this->orderCode = $orderCode;
		$this->apiParas["orderCode"] = $orderCode;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setOrderSourceCode($orderSourceCode)
	{
		$this->orderSourceCode = $orderSourceCode;
		$this->apiParas["orderSourceCode"] = $orderSourceCode;
	}

	public function getOrderSourceCode()
	{
		return $this->orderSourceCode;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function setOwnerCode($ownerCode)
	{
		$this->ownerCode = $ownerCode;
		$this->apiParas["ownerCode"] = $ownerCode;
	}

	public function getOwnerCode()
	{
		return $this->ownerCode;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function setWarehouseCode($warehouseCode)
	{
		$this->warehouseCode = $warehouseCode;
		$this->apiParas["warehouseCode"] = $warehouseCode;
	}

	public function getWarehouseCode()
	{
		return $this->warehouseCode;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.orderprocess.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderCode,"orderCode");
		RequestCheckUtil::checkMaxLength($this->orderCode,50,"orderCode");
		RequestCheckUtil::checkMaxLength($this->orderId,50,"orderId");
		RequestCheckUtil::checkMaxLength($this->orderType,50,"orderType");
		RequestCheckUtil::checkMaxLength($this->ownerCode,50,"ownerCode");
		RequestCheckUtil::checkMaxLength($this->warehouseCode,50,"warehouseCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
