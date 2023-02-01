<?php
/**
 * TOP API: taobao.qimen.sn.report request
 * 
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class SnReportRequest
{
	/** 
	 * 当前页(从1开始)
	 **/
	private $currentPage;
	
	/** 
	 * 发货单信息
	 **/
	private $deliveryOrder;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 商品列表
	 **/
	private $items;
	
	/** 
	 * 每页记录的条数
	 **/
	private $pageSize;
	
	/** 
	 * 总页数
	 **/
	private $totalPage;
	
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

	public function setDeliveryOrder($deliveryOrder)
	{
		$this->deliveryOrder = $deliveryOrder;
		$this->apiParas["deliveryOrder"] = $deliveryOrder;
	}

	public function getDeliveryOrder()
	{
		return $this->deliveryOrder;
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

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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

	public function getApiMethodName()
	{
		return "taobao.qimen.sn.report";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->currentPage,"currentPage");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->totalPage,"totalPage");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
