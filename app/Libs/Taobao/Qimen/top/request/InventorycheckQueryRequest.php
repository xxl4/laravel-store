<?php
/**
 * TOP API: taobao.qimen.inventorycheck.query request
 * 
 * @author auto create
 * @since 1.0, 2018.01.18
 */
class InventorycheckQueryRequest
{
	/** 
	 * 盘点单编码
	 **/
	private $checkOrderCode;
	
	/** 
	 * 仓储系统的盘点单编码
	 **/
	private $checkOrderId;
	
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
	
	public function setCheckOrderCode($checkOrderCode)
	{
		$this->checkOrderCode = $checkOrderCode;
		$this->apiParas["checkOrderCode"] = $checkOrderCode;
	}

	public function getCheckOrderCode()
	{
		return $this->checkOrderCode;
	}

	public function setCheckOrderId($checkOrderId)
	{
		$this->checkOrderId = $checkOrderId;
		$this->apiParas["checkOrderId"] = $checkOrderId;
	}

	public function getCheckOrderId()
	{
		return $this->checkOrderId;
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
		return "taobao.qimen.inventorycheck.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->checkOrderCode,"checkOrderCode");
		RequestCheckUtil::checkMaxLength($this->checkOrderCode,50,"checkOrderCode");
		RequestCheckUtil::checkMaxLength($this->checkOrderId,50,"checkOrderId");
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
