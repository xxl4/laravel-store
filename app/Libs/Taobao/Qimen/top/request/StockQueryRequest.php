<?php
/**
 * TOP API: taobao.qimen.stock.query request
 * 
 * @author auto create
 * @since 1.0, 2019.02.13
 */
class StockQueryRequest
{
	/** 
	 * 批次编码
	 **/
	private $batchCode;
	
	/** 
	 * 商品过期日期(YYYY-MM-DD)
	 **/
	private $expireDate;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 库存类型(ZP=正品;CC=残次;JS=机损;XS=箱损;ZT=在途库存;默认为查所有类型的库存)
	 **/
	private $inventoryType;
	
	/** 
	 * 商品编码
	 **/
	private $itemCode;
	
	/** 
	 * 仓储系统商品ID
	 **/
	private $itemId;
	
	/** 
	 * 货主编码
	 **/
	private $ownerCode;
	
	/** 
	 * 当前页(从1开始)
	 **/
	private $page;
	
	/** 
	 * 每页条数(最多100条)
	 **/
	private $pageSize;
	
	/** 
	 * 商品生产日期(YYYY-MM-DD)
	 **/
	private $productDate;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 仓库编码
	 **/
	private $warehouseCode;
	
	private $apiParas = array();
	
	public function setBatchCode($batchCode)
	{
		$this->batchCode = $batchCode;
		$this->apiParas["batchCode"] = $batchCode;
	}

	public function getBatchCode()
	{
		return $this->batchCode;
	}

	public function setExpireDate($expireDate)
	{
		$this->expireDate = $expireDate;
		$this->apiParas["expireDate"] = $expireDate;
	}

	public function getExpireDate()
	{
		return $this->expireDate;
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

	public function setInventoryType($inventoryType)
	{
		$this->inventoryType = $inventoryType;
		$this->apiParas["inventoryType"] = $inventoryType;
	}

	public function getInventoryType()
	{
		return $this->inventoryType;
	}

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

	public function setProductDate($productDate)
	{
		$this->productDate = $productDate;
		$this->apiParas["productDate"] = $productDate;
	}

	public function getProductDate()
	{
		return $this->productDate;
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
		return "taobao.qimen.stock.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->batchCode,50,"batchCode");
		RequestCheckUtil::checkMaxLength($this->expireDate,10,"expireDate");
		RequestCheckUtil::checkMaxLength($this->inventoryType,50,"inventoryType");
		RequestCheckUtil::checkNotNull($this->itemCode,"itemCode");
		RequestCheckUtil::checkMaxLength($this->itemCode,50,"itemCode");
		RequestCheckUtil::checkMaxLength($this->itemId,50,"itemId");
		RequestCheckUtil::checkMaxLength($this->ownerCode,50,"ownerCode");
		RequestCheckUtil::checkNotNull($this->page,"page");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxLength($this->productDate,10,"productDate");
		RequestCheckUtil::checkMaxLength($this->warehouseCode,50,"warehouseCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
