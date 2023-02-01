<?php
/**
 * TOP API: taobao.qimen.returnorder.create request
 * 
 * @author auto create
 * @since 1.0, 2021.06.30
 */
class ReturnorderCreateRequest
{
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * itemList
	 **/
	private $itemList;
	
	/** 
	 * 订单信息
	 **/
	private $orderLines;
	
	/** 
	 * 退货单信息
	 **/
	private $returnOrder;
	
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

	public function setItemList($itemList)
	{
		$this->itemList = $itemList;
		$this->apiParas["itemList"] = $itemList;
	}

	public function getItemList()
	{
		return $this->itemList;
	}

	public function setOrderLines($orderLines)
	{
		$this->orderLines = $orderLines;
		$this->apiParas["orderLines"] = $orderLines;
	}

	public function getOrderLines()
	{
		return $this->orderLines;
	}

	public function setReturnOrder($returnOrder)
	{
		$this->returnOrder = $returnOrder;
		$this->apiParas["returnOrder"] = $returnOrder;
	}

	public function getReturnOrder()
	{
		return $this->returnOrder;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.returnorder.create";
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
