<?php
/**
 * TOP API: 01992488ct.shendong.order.news request
 * 
 * @author auto create
 * @since 1.0, 2017.07.07
 */
class ShendongOrderNewsRequest
{
	/** 
	 * 条数
	 **/
	private $num;
	
	/** 
	 * 页数
	 **/
	private $page;
	
	private $apiParas = array();
	
	public function setNum($num)
	{
		$this->num = $num;
		$this->apiParas["num"] = $num;
	}

	public function getNum()
	{
		return $this->num;
	}

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
		return "01992488ct.shendong.order.news";
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
