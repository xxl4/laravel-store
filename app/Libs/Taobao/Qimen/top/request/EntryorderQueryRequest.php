<?php
/**
 * TOP API: taobao.qimen.entryorder.query request
 * 
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class EntryorderQueryRequest
{
	/** 
	 * 入库单编码
	 **/
	private $entryOrderCode;
	
	/** 
	 * 仓储系统入库单ID
	 **/
	private $entryOrderId;
	
	/** 
	 * extOrderCode
	 **/
	private $extOrderCode;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * orderType
	 **/
	private $orderType;
	
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
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 仓库编码
	 **/
	private $warehouseCode;
	
	private $apiParas = array();
	
	public function setEntryOrderCode($entryOrderCode)
	{
		$this->entryOrderCode = $entryOrderCode;
		$this->apiParas["entryOrderCode"] = $entryOrderCode;
	}

	public function getEntryOrderCode()
	{
		return $this->entryOrderCode;
	}

	public function setEntryOrderId($entryOrderId)
	{
		$this->entryOrderId = $entryOrderId;
		$this->apiParas["entryOrderId"] = $entryOrderId;
	}

	public function getEntryOrderId()
	{
		return $this->entryOrderId;
	}

	public function setExtOrderCode($extOrderCode)
	{
		$this->extOrderCode = $extOrderCode;
		$this->apiParas["extOrderCode"] = $extOrderCode;
	}

	public function getExtOrderCode()
	{
		return $this->extOrderCode;
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
		return "taobao.qimen.entryorder.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->entryOrderCode,"entryOrderCode");
		RequestCheckUtil::checkMaxLength($this->entryOrderCode,50,"entryOrderCode");
		RequestCheckUtil::checkMaxLength($this->entryOrderId,50,"entryOrderId");
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
