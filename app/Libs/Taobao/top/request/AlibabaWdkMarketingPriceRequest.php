<?php
/**
 * TOP API: alibaba.wdk.marketing.price request
 * 
 * @author auto create
 * @since 1.0, 2018.10.12
 */
class AlibabaWdkMarketingPriceRequest
{
	/** 
	 * 查询开始时间(sku_codes非空无效)
	 **/
	private $beginTime;
	
	/** 
	 * 查询结束时间(sku_codes非空无效)
	 **/
	private $endTime;
	
	/** 
	 * 页码
	 **/
	private $pageIndex;
	
	/** 
	 * 单页大小
	 **/
	private $pageSize;
	
	/** 
	 * 门店标识数组
	 **/
	private $shopIds;
	
	/** 
	 * 商品sku
	 **/
	private $skuCodes;
	
	private $apiParas = array();
	
	public function setBeginTime($beginTime)
	{
		$this->beginTime = $beginTime;
		$this->apiParas["begin_time"] = $beginTime;
	}

	public function getBeginTime()
	{
		return $this->beginTime;
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

	public function setPageIndex($pageIndex)
	{
		$this->pageIndex = $pageIndex;
		$this->apiParas["page_index"] = $pageIndex;
	}

	public function getPageIndex()
	{
		return $this->pageIndex;
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

	public function setShopIds($shopIds)
	{
		$this->shopIds = $shopIds;
		$this->apiParas["shop_ids"] = $shopIds;
	}

	public function getShopIds()
	{
		return $this->shopIds;
	}

	public function setSkuCodes($skuCodes)
	{
		$this->skuCodes = $skuCodes;
		$this->apiParas["sku_codes"] = $skuCodes;
	}

	public function getSkuCodes()
	{
		return $this->skuCodes;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.marketing.price";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageIndex,"pageIndex");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxListSize($this->shopIds,20,"shopIds");
		RequestCheckUtil::checkMaxListSize($this->skuCodes,20,"skuCodes");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
