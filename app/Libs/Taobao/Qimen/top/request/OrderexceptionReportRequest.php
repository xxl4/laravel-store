<?php
/**
 * TOP API: taobao.qimen.orderexception.report request
 * 
 * @author auto create
 * @since 1.0, 2018.08.16
 */
class OrderexceptionReportRequest
{
	/** 
	 * 奇门仓储字段
	 **/
	private $createTime;
	
	/** 
	 * 奇门仓储字段
	 **/
	private $deliveryOrderCode;
	
	/** 
	 * 奇门仓储字段
	 **/
	private $deliveryOrderId;
	
	/** 
	 * 奇门仓储字段
	 **/
	private $expressCode;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 奇门仓储字段
	 **/
	private $logisticsCode;
	
	/** 
	 * 奇门仓储字段
	 **/
	private $messageDesc;
	
	/** 
	 * 奇门仓储字段
	 **/
	private $messageId;
	
	/** 
	 * 奇门仓储字段
	 **/
	private $messageType;
	
	/** 
	 * 奇门仓储字段
	 **/
	private $orderLines;
	
	/** 
	 * 奇门仓储字段
	 **/
	private $orderType;
	
	/** 
	 * 奇门仓储字段
	 **/
	private $remark;
	
	/** 
	 * 奇门仓储字段
	 **/
	private $warehouseCode;
	
	private $apiParas = array();
	
	public function setCreateTime($createTime)
	{
		$this->createTime = $createTime;
		$this->apiParas["createTime"] = $createTime;
	}

	public function getCreateTime()
	{
		return $this->createTime;
	}

	public function setDeliveryOrderCode($deliveryOrderCode)
	{
		$this->deliveryOrderCode = $deliveryOrderCode;
		$this->apiParas["deliveryOrderCode"] = $deliveryOrderCode;
	}

	public function getDeliveryOrderCode()
	{
		return $this->deliveryOrderCode;
	}

	public function setDeliveryOrderId($deliveryOrderId)
	{
		$this->deliveryOrderId = $deliveryOrderId;
		$this->apiParas["deliveryOrderId"] = $deliveryOrderId;
	}

	public function getDeliveryOrderId()
	{
		return $this->deliveryOrderId;
	}

	public function setExpressCode($expressCode)
	{
		$this->expressCode = $expressCode;
		$this->apiParas["expressCode"] = $expressCode;
	}

	public function getExpressCode()
	{
		return $this->expressCode;
	}

	public function setExtendProps($extendProps)
	{
		$this->extendProps = $extendProps;
		$this->apiParas["extendProps"] = $extendProps;
	}

	public function getExtendProps()
	{
		return $this->extendProps;
	}

	public function setLogisticsCode($logisticsCode)
	{
		$this->logisticsCode = $logisticsCode;
		$this->apiParas["logisticsCode"] = $logisticsCode;
	}

	public function getLogisticsCode()
	{
		return $this->logisticsCode;
	}

	public function setMessageDesc($messageDesc)
	{
		$this->messageDesc = $messageDesc;
		$this->apiParas["messageDesc"] = $messageDesc;
	}

	public function getMessageDesc()
	{
		return $this->messageDesc;
	}

	public function setMessageId($messageId)
	{
		$this->messageId = $messageId;
		$this->apiParas["messageId"] = $messageId;
	}

	public function getMessageId()
	{
		return $this->messageId;
	}

	public function setMessageType($messageType)
	{
		$this->messageType = $messageType;
		$this->apiParas["messageType"] = $messageType;
	}

	public function getMessageType()
	{
		return $this->messageType;
	}

	public function setOrderLines($orderLines)
	{
		$this->orderLines = $orderLines;
		$this->apiParas["orderLines"] = $orderLines;
	}

	public function getOrderLines()
	{
		return $this->orderLines;
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
		return "taobao.qimen.orderexception.report";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->createTime,50,"createTime");
		RequestCheckUtil::checkMaxLength($this->deliveryOrderCode,50,"deliveryOrderCode");
		RequestCheckUtil::checkMaxLength($this->deliveryOrderId,50,"deliveryOrderId");
		RequestCheckUtil::checkMaxLength($this->expressCode,50,"expressCode");
		RequestCheckUtil::checkMaxLength($this->logisticsCode,50,"logisticsCode");
		RequestCheckUtil::checkMaxLength($this->messageDesc,50,"messageDesc");
		RequestCheckUtil::checkMaxLength($this->messageId,50,"messageId");
		RequestCheckUtil::checkMaxLength($this->messageType,50,"messageType");
		RequestCheckUtil::checkMaxLength($this->orderType,50,"orderType");
		RequestCheckUtil::checkMaxLength($this->remark,50,"remark");
		RequestCheckUtil::checkMaxLength($this->warehouseCode,50,"warehouseCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
