<?php
/**
 * TOP API: taobao.item.update.delisting.tmall request
 * 
 * @author auto create
 * @since 1.0, 2018.12.29
 */
class ItemUpdateDelistingTmallRequest
{
	/** 
	 * 商品数字ID，该参数必须
	 **/
	private $numIid;
	
	private $apiParas = array();
	
	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
	}

	public function getApiMethodName()
	{
		return "taobao.item.update.delisting.tmall";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->numIid,"numIid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
