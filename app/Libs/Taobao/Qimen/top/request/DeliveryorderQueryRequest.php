<?php
/**
 * TOP API: taobao.qimen.deliveryorder.query request
 * 
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class DeliveryorderQueryRequest
{
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	private $deliveryOrderCode;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	private $deliveryOrderId;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 发库单号
	 **/
	private $orderCode;
	
	/** 
	 * 仓储系统发库单号
	 **/
	private $orderId;
	
	/** 
	 * 交易单号
	 **/
	private $orderSourceCode;
	
	/** 
	 * 货主编码
	 **/
	private $ownerCode;
	
	/** 
	 * 当前页
	 **/
	private $page;
	
	/** 
	 * 每页orderLine条数(最多100条)
	 **/
	private $pageSize;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	private $status;
	
	/** 
	 * 仓库编码
	 **/
	private $warehouseCode;
	
	private $apiParas = array();
	
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

	public function setOwnerCode($ownerCode)
	{
		$this->ownerCode = $ownerCode;
		$this->apiParas["ownerCode"] = $ownerCode;
	}

	public function getOwnerCode()
	{
		return $this->ownerCode;
	}

	public function setPage($page)
	{
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage()
	{
		return $this->page;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
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
		return "taobao.qimen.deliveryorder.query";
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
		RequestCheckUtil::checkMaxLength($this->orderSourceCode,50,"orderSourceCode");
		RequestCheckUtil::checkMaxLength($this->ownerCode,50,"ownerCode");
		RequestCheckUtil::checkNotNull($this->page,"page");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxLength($this->warehouseCode,50,"warehouseCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
