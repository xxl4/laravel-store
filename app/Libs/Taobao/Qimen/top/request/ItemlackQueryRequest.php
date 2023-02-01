<?php
/**
 * TOP API: taobao.qimen.itemlack.query request
 * 
 * @author auto create
 * @since 1.0, 2016.07.21
 */
class ItemlackQueryRequest
{
	/** 
	 * 出库单号
	 **/
	private $deliveryOrderCode;
	
	/** 
	 * 仓储系统出库单号
	 **/
	private $deliveryOrderId;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 货主编码
	 **/
	private $ownerCode;
	
	/** 
	 * 当前页(从1开始)
	 **/
	private $page;
	
	/** 
	 * 每页orderLine条数(最多100条)
	 **/
	private $pageSize;
	
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
		return "taobao.qimen.itemlack.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->deliveryOrderCode,"deliveryOrderCode");
		RequestCheckUtil::checkMaxLength($this->deliveryOrderCode,50,"deliveryOrderCode");
		RequestCheckUtil::checkMaxLength($this->deliveryOrderId,50,"deliveryOrderId");
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
