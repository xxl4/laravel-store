<?php
/**
 * TOP API: tmall.item.quantity.update request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class TmallItemQuantityUpdateRequest
{
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * 商品库存数；增量编辑方式支持正数、负数。（无SKU商品使用这个字段）
	 **/
	private $itemQuantity;
	
	/** 
	 * 商品库存更新时候的可选参数
	 **/
	private $options;
	
	/** 
	 * 更新SKU库存时候的SKU库存对象；如果没有SKU或者不更新SKU库存，可以不填;查找SKU目前支持ID，属性串和商家编码三种模式，建议选用一种最合适的，切勿滥用，一次调用中如果混合使用，更新结果不可预期！
	 **/
	private $skuQuantities;
	
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

	public function setItemQuantity($itemQuantity)
	{
		$this->itemQuantity = $itemQuantity;
		$this->apiParas["item_quantity"] = $itemQuantity;
	}

	public function getItemQuantity()
	{
		return $this->itemQuantity;
	}

	public function setOptions($options)
	{
		$this->options = $options;
		$this->apiParas["options"] = $options;
	}

	public function getOptions()
	{
		return $this->options;
	}

	public function setSkuQuantities($skuQuantities)
	{
		$this->skuQuantities = $skuQuantities;
		$this->apiParas["sku_quantities"] = $skuQuantities;
	}

	public function getSkuQuantities()
	{
		return $this->skuQuantities;
	}

	public function getApiMethodName()
	{
		return "tmall.item.quantity.update";
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
