<?php
/**
 * TOP API: taobao.qimen.orderstatus.batchquery request
 * 
 * @author auto create
 * @since 1.0, 2016.08.24
 */
class OrderstatusBatchqueryRequest
{
	/** 
	 * 当前第几页(从1开始)
	 **/
	private $currentPage;
	
	/** 
	 * 订单最后操作时间(查询截止时间点;格式:YYYY-MM-DD hh:mm:ss)
	 **/
	private $endTime;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 单据类型(JYCK=一般交易出库单;HHCK=换货出库;BFCK=补发出库;PTCK=普通出库单;DBCK=调拨出库;QTCK=其他出库;B2BRK=B2B入库;B2BCK=B2B出库;CGRK=采购入库;DBRK=调拨入库;QTRK=其他入库;XTRK=销退入库;HHRK= 换货入库;CNJG= 仓内加工单)
	 **/
	private $orderType;
	
	/** 
	 * 货主编码
	 **/
	private $ownerCode;
	
	/** 
	 * 页面大小(建议不超过100条)
	 **/
	private $pageSize;
	
	/** 
	 * 订单最后操作时间(查询起始时间点;格式:YYYY-MM-DD hh:mm:ss)
	 **/
	private $startTime;
	
	/** 
	 * 仓库编码
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

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
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

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["startTime"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
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
		return "taobao.qimen.orderstatus.batchquery";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->currentPage,"currentPage");
		RequestCheckUtil::checkMaxLength($this->endTime,19,"endTime");
		RequestCheckUtil::checkMaxLength($this->orderType,50,"orderType");
		RequestCheckUtil::checkNotNull($this->ownerCode,"ownerCode");
		RequestCheckUtil::checkMaxLength($this->ownerCode,50,"ownerCode");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
		RequestCheckUtil::checkMaxLength($this->startTime,19,"startTime");
		RequestCheckUtil::checkMaxLength($this->warehouseCode,50,"warehouseCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
