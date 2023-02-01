<?php
/**
 * TOP API: taobao.qimen.stockchange.report request
 * 
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class StockchangeReportRequest
{
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	private $currentPage;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * item
	 **/
	private $items;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	private $orderCode;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	private $orderType;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	private $ownerCode;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	private $pageSize;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	private $remark;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	private $totalPage;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	private $warehouseCode;
	
	private $apiParas = array();
	
	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["currentPage"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
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

	public function setItems($items)
	{
		$this->items = $items;
		$this->apiParas["items"] = $items;
	}

	public function getItems()
	{
		return $this->items;
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

	public function setTotalPage($totalPage)
	{
		$this->totalPage = $totalPage;
		$this->apiParas["totalPage"] = $totalPage;
	}

	public function getTotalPage()
	{
		return $this->totalPage;
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
		return "taobao.qimen.stockchange.report";
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
