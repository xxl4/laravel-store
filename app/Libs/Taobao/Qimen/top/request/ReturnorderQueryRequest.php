<?php
/**
 * TOP API: taobao.qimen.returnorder.query request
 * 
 * @author auto create
 * @since 1.0, 2016.08.24
 */
class ReturnorderQueryRequest
{
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
	 * 退货单编码
	 **/
	private $returnOrderCode;
	
	/** 
	 * 仓库系统订单编码
	 **/
	private $returnOrderId;
	
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

	public function setReturnOrderCode($returnOrderCode)
	{
		$this->returnOrderCode = $returnOrderCode;
		$this->apiParas["returnOrderCode"] = $returnOrderCode;
	}

	public function getReturnOrderCode()
	{
		return $this->returnOrderCode;
	}

	public function setReturnOrderId($returnOrderId)
	{
		$this->returnOrderId = $returnOrderId;
		$this->apiParas["returnOrderId"] = $returnOrderId;
	}

	public function getReturnOrderId()
	{
		return $this->returnOrderId;
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
		return "taobao.qimen.returnorder.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->ownerCode,50,"ownerCode");
		RequestCheckUtil::checkNotNull($this->page,"page");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->returnOrderCode,"returnOrderCode");
		RequestCheckUtil::checkMaxLength($this->returnOrderCode,50,"returnOrderCode");
		RequestCheckUtil::checkMaxLength($this->returnOrderId,50,"returnOrderId");
		RequestCheckUtil::checkMaxLength($this->warehouseCode,50,"warehouseCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
