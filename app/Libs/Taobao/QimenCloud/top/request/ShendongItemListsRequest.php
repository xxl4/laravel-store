<?php
/**
 * TOP API: 01992488ct.shendong.item.lists request
 * 
 * @author auto create
 * @since 1.0, 2017.07.12
 */
class ShendongItemListsRequest
{
	/** 
	 * 分页
	 **/
	private $page;
	
	private $apiParas = array();
	
	public function setPage($page)
	{
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage()
	{
		return $this->page;
	}

	public function getApiMethodName()
	{
		return "01992488ct.shendong.item.lists";
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
