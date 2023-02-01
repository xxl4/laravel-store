<?php
/**
 * TOP API: taobao.fenxiao.distributor.products.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class FenxiaoDistributorProductsGetRequest
{
	/** 
	 * 下载状态，默认是未下载；可选值：UNDOWNLOAD：未下载 ；DOWNLOADED：已下载；下载：指将供应商授权的产品发布为店铺新宝贝的过程，下载成功后，分销商需要将新生成的宝贝重新编辑并上架后售卖。
	 **/
	private $downloadStatus;
	
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 指定查询额外的信息，可选值：skus（sku数据）、images（多图），多个可选值用逗号分割。
	 **/
	private $fields;
	
	/** 
	 * 根据商品ID列表查询，优先级次于产品ID列表，高于其他分页查询条件。如果商品不是分销商品，自动过滤。最大限制20，用逗号分割，例如：“1001,1002,1003,1004,1005”
	 **/
	private $itemIds;
	
	/** 
	 * order_by
	 **/
	private $orderBy;
	
	/** 
	 * 页码（大于0的整数，默认1）
	 **/
	private $pageNo;
	
	/** 
	 * 每页记录数（默认20，最大50）
	 **/
	private $pageSize;
	
	/** 
	 * 产品ID列表（最大限制30），用逗号分割，例如：“1001,1002,1003,1004,1005”
	 **/
	private $pids;
	
	/** 
	 * 产品线ID
	 **/
	private $productcatId;
	
	/** 
	 * 开始修改时间
	 **/
	private $startTime;
	
	/** 
	 * 供应商nick，分页查询时，必传
	 **/
	private $supplierNick;
	
	/** 
	 * time_type
	 **/
	private $timeType;
	
	/** 
	 * 分销方式；可选择：AGENT ： 代销；DEALER：经销；DIRECT：直营
	 **/
	private $tradeType;
	
	private $apiParas = array();
	
	public function setDownloadStatus($downloadStatus)
	{
		$this->downloadStatus = $downloadStatus;
		$this->apiParas["download_status"] = $downloadStatus;
	}

	public function getDownloadStatus()
	{
		return $this->downloadStatus;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setItemIds($itemIds)
	{
		$this->itemIds = $itemIds;
		$this->apiParas["item_ids"] = $itemIds;
	}

	public function getItemIds()
	{
		return $this->itemIds;
	}

	public function setOrderBy($orderBy)
	{
		$this->orderBy = $orderBy;
		$this->apiParas["order_by"] = $orderBy;
	}

	public function getOrderBy()
	{
		return $this->orderBy;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setPids($pids)
	{
		$this->pids = $pids;
		$this->apiParas["pids"] = $pids;
	}

	public function getPids()
	{
		return $this->pids;
	}

	public function setProductcatId($productcatId)
	{
		$this->productcatId = $productcatId;
		$this->apiParas["productcat_id"] = $productcatId;
	}

	public function getProductcatId()
	{
		return $this->productcatId;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setSupplierNick($supplierNick)
	{
		$this->supplierNick = $supplierNick;
		$this->apiParas["supplier_nick"] = $supplierNick;
	}

	public function getSupplierNick()
	{
		return $this->supplierNick;
	}

	public function setTimeType($timeType)
	{
		$this->timeType = $timeType;
		$this->apiParas["time_type"] = $timeType;
	}

	public function getTimeType()
	{
		return $this->timeType;
	}

	public function setTradeType($tradeType)
	{
		$this->tradeType = $tradeType;
		$this->apiParas["trade_type"] = $tradeType;
	}

	public function getTradeType()
	{
		return $this->tradeType;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.distributor.products.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->fields,20,"fields");
		RequestCheckUtil::checkMaxListSize($this->itemIds,20,"itemIds");
		RequestCheckUtil::checkMaxListSize($this->pids,30,"pids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
