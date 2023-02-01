<?php
/**
 * TOP API: alibaba.item.operate.upshelf request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class AlibabaItemOperateUpshelfRequest
{
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 商品库存
	 **/
	private $quantity;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
		$this->apiParas["quantity"] = $quantity;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function getApiMethodName()
	{
		return "alibaba.item.operate.upshelf";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
