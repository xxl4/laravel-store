<?php
/**
 * TOP API: taobao.qimen.inventorybatch.query request
 * 
 * @author auto create
 * @since 1.0, 2021.05.18
 */
class InventorybatchQueryRequest
{
	/** 
	 * ERP 系统商品编码, string(50)，条件必填
	 **/
	private $itemCode;
	
	/** 
	 * 仓储系统商品编码, string(50)，条件必填
	 **/
	private $itemId;
	
	/** 
	 * 货主编码，string(50)，必填
	 **/
	private $ownerCode;
	
	/** 
	 * 当前页，从 1 开始，必填
	 **/
	private $page;
	
	/** 
	 * 每页条数(最多 100 条)，必填
	 **/
	private $pageSize;
	
	/** 
	 * 仓库编码，string(50)，必填
	 **/
	private $warehouseCode;
	
	private $apiParas = array();
	
	public function setItemCode($itemCode)
	{
		$this->itemCode = $itemCode;
		$this->apiParas["itemCode"] = $itemCode;
	}

	public function getItemCode()
	{
		return $this->itemCode;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["itemId"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
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
		return "taobao.qimen.inventorybatch.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->ownerCode,"ownerCode");
		RequestCheckUtil::checkNotNull($this->page,"page");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->warehouseCode,"warehouseCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
