<?php
/**
 * TOP API: taobao.item.catprops.modification.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class ItemCatpropsModificationGetRequest
{
	/** 
	 * 类目Id（与商品Id二选一即可）
	 **/
	private $categoryId;
	
	/** 
	 * 商品Id（与类目Id二选一即可。若同时传入商品Id和类目Id，则优先使用商品Id。若填写商品Id，则起始时间设为该商品最近修改时间）
	 **/
	private $itemId;
	
	/** 
	 * 起始请求时间（建议传入，默认为90天内）
	 **/
	private $startTime;
	
	private $apiParas = array();
	
	public function setCategoryId($categoryId)
	{
		$this->categoryId = $categoryId;
		$this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId()
	{
		return $this->categoryId;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
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

	public function getApiMethodName()
	{
		return "taobao.item.catprops.modification.get";
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
