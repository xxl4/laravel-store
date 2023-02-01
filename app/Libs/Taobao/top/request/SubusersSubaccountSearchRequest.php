<?php
/**
 * TOP API: taobao.subusers.subaccount.search request
 * 
 * @author auto create
 * @since 1.0, 2022.03.25
 */
class SubusersSubaccountSearchRequest
{
	/** 
	 * 根据子账号冒号后缀的搜索词，支持中文单字、英文单词 分词规则搜索。该搜索词必传。如果不需要模糊搜索仅需要分页获取子账号列表，请使用taobao.sellercenter.subusers.page接口
	 **/
	private $filterKey;
	
	/** 
	 * 主账号登录名
	 **/
	private $mainNick;
	
	/** 
	 * 页码，大于等于1
	 **/
	private $pageNum;
	
	/** 
	 * 页大小，大于1小于200
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setFilterKey($filterKey)
	{
		$this->filterKey = $filterKey;
		$this->apiParas["filter_key"] = $filterKey;
	}

	public function getFilterKey()
	{
		return $this->filterKey;
	}

	public function setMainNick($mainNick)
	{
		$this->mainNick = $mainNick;
		$this->apiParas["main_nick"] = $mainNick;
	}

	public function getMainNick()
	{
		return $this->mainNick;
	}

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

	public function getApiMethodName()
	{
		return "taobao.subusers.subaccount.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->filterKey,"filterKey");
		RequestCheckUtil::checkNotNull($this->mainNick,"mainNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
