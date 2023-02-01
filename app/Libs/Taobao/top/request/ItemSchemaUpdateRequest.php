<?php
/**
 * TOP API: taobao.item.schema.update request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ItemSchemaUpdateRequest
{
	/** 
	 * 如果重新选择类目后，传入重新选择的叶子类目id
	 **/
	private $categoryId;
	
	/** 
	 * 是否增量更新。为true只改xml_data里传入的值。为false时，将根据xml_data的数据对原始宝贝数据进行全量覆盖,这个参数暂时不支持
	 **/
	private $incremental;
	
	/** 
	 * 编辑商品的商品id
	 **/
	private $itemId;
	
	/** 
	 * 编辑商品时候的修改内容
	 **/
	private $xmlData;
	
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

	public function setIncremental($incremental)
	{
		$this->incremental = $incremental;
		$this->apiParas["incremental"] = $incremental;
	}

	public function getIncremental()
	{
		return $this->incremental;
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

	public function setXmlData($xmlData)
	{
		$this->xmlData = $xmlData;
		$this->apiParas["xml_data"] = $xmlData;
	}

	public function getXmlData()
	{
		return $this->xmlData;
	}

	public function getApiMethodName()
	{
		return "taobao.item.schema.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->xmlData,"xmlData");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
