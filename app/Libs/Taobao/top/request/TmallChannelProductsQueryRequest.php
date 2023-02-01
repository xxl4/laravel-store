<?php
/**
 * TOP API: tmall.channel.products.query request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class TmallChannelProductsQueryRequest
{
	/** 
	 * 页码数，从1开始
	 **/
	private $pageNum;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 产品Id
	 **/
	private $productIds;
	
	/** 
	 * 产品线Id
	 **/
	private $productLineId;
	
	/** 
	 * 商家产品编码
	 **/
	private $productNumber;
	
	/** 
	 * 商家SKU编码
	 **/
	private $skuNumber;
	
	private $apiParas = array();
	
	public function setPageNum($pageNum)
	{
		$this->pageNum = $pageNum;
		$this->apiParas["page_num"] = $pageNum;
	}

	public function getPageNum()
	{
		return $this->pageNum;
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

	public function setProductIds($productIds)
	{
		$this->productIds = $productIds;
		$this->apiParas["product_ids"] = $productIds;
	}

	public function getProductIds()
	{
		return $this->productIds;
	}

	public function setProductLineId($productLineId)
	{
		$this->productLineId = $productLineId;
		$this->apiParas["product_line_id"] = $productLineId;
	}

	public function getProductLineId()
	{
		return $this->productLineId;
	}

	public function setProductNumber($productNumber)
	{
		$this->productNumber = $productNumber;
		$this->apiParas["product_number"] = $productNumber;
	}

	public function getProductNumber()
	{
		return $this->productNumber;
	}

	public function setSkuNumber($skuNumber)
	{
		$this->skuNumber = $skuNumber;
		$this->apiParas["sku_number"] = $skuNumber;
	}

	public function getSkuNumber()
	{
		return $this->skuNumber;
	}

	public function getApiMethodName()
	{
		return "tmall.channel.products.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageNum,"pageNum");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
