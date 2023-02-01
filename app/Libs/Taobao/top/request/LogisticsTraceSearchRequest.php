<?php
/**
 * TOP API: taobao.logistics.trace.search request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class LogisticsTraceSearchRequest
{
	/** 
	 * 表明是否是拆单，默认值0，1表示拆单
	 **/
	private $isSplit;
	
	/** 
	 * 拆单子订单列表，当is_split=1时，需要传人；对应的数据是：子订单号的列表。
	 **/
	private $subTid;
	
	/** 
	 * 淘宝交易号，请勿传非淘宝交易号
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setIsSplit($isSplit)
	{
		$this->isSplit = $isSplit;
		$this->apiParas["is_split"] = $isSplit;
	}

	public function getIsSplit()
	{
		return $this->isSplit;
	}

	public function setSubTid($subTid)
	{
		$this->subTid = $subTid;
		$this->apiParas["sub_tid"] = $subTid;
	}

	public function getSubTid()
	{
		return $this->subTid;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.trace.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
