<?php
/**
 * TOP API: taobao.qimen.inventory.report request
 * 
 * @author auto create
 * @since 1.0, 2018.08.01
 */
class InventoryReportRequest
{
	/** 
	 * 变动类型：CHECK=盘点 ADJUST=调整
	 **/
	private $adjustType;
	
	/** 
	 * 盘点单编码
	 **/
	private $checkOrderCode;
	
	/** 
	 * 仓储系统的盘点单编码
	 **/
	private $checkOrderId;
	
	/** 
	 * 盘点时间(YYYY-MM-DD HH:MM:SS)
	 **/
	private $checkTime;
	
	/** 
	 * 当前页(从1开始)
	 **/
	private $currentPage;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 商品库存信息列表
	 **/
	private $items;
	
	/** 
	 * orderType
	 **/
	private $orderType;
	
	/** 
	 * 外部业务编码(消息ID;用于去重;ISV对于同一请求;分配一个唯一性的编码。用来保证因为网络等原因导致重复传输;请求不 会被重复处理)
	 **/
	private $outBizCode;
	
	/** 
	 * 货主编码
	 **/
	private $ownerCode;
	
	/** 
	 * 每页记录的条数
	 **/
	private $pageSize;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 总页数
	 **/
	private $totalPage;
	
	/** 
	 * 仓库编码
	 **/
	private $warehouseCode;
	
	private $apiParas = array();
	
	public function setAdjustType($adjustType)
	{
		$this->adjustType = $adjustType;
		$this->apiParas["adjustType"] = $adjustType;
	}

	public function getAdjustType()
	{
		return $this->adjustType;
	}

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

	public function setCheckTime($checkTime)
	{
		$this->checkTime = $checkTime;
		$this->apiParas["checkTime"] = $checkTime;
	}

	public function getCheckTime()
	{
		return $this->checkTime;
	}

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

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function setOutBizCode($outBizCode)
	{
		$this->outBizCode = $outBizCode;
		$this->apiParas["outBizCode"] = $outBizCode;
	}

	public function getOutBizCode()
	{
		return $this->outBizCode;
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
		return "taobao.qimen.inventory.report";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adjustType,"adjustType");
		RequestCheckUtil::checkMaxLength($this->adjustType,50,"adjustType");
		RequestCheckUtil::checkNotNull($this->checkOrderCode,"checkOrderCode");
		RequestCheckUtil::checkMaxLength($this->checkOrderCode,50,"checkOrderCode");
		RequestCheckUtil::checkMaxLength($this->checkOrderId,50,"checkOrderId");
		RequestCheckUtil::checkMaxLength($this->checkTime,19,"checkTime");
		RequestCheckUtil::checkNotNull($this->currentPage,"currentPage");
		RequestCheckUtil::checkNotNull($this->outBizCode,"outBizCode");
		RequestCheckUtil::checkMaxLength($this->outBizCode,50,"outBizCode");
		RequestCheckUtil::checkNotNull($this->ownerCode,"ownerCode");
		RequestCheckUtil::checkMaxLength($this->ownerCode,50,"ownerCode");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxLength($this->remark,500,"remark");
		RequestCheckUtil::checkNotNull($this->totalPage,"totalPage");
		RequestCheckUtil::checkNotNull($this->warehouseCode,"warehouseCode");
		RequestCheckUtil::checkMaxLength($this->warehouseCode,50,"warehouseCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
