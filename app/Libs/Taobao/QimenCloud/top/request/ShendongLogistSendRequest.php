<?php
/**
 * TOP API: 01992488ct.shendong.logist.send request
 * 
 * @author auto create
 * @since 1.0, 2017.07.12
 */
class ShendongLogistSendRequest
{
	/** 
	 * 快递订单编码
	 **/
	private $code;
	
	/** 
	 * 快递订单号
	 **/
	private $outsid;
	
	/** 
	 * 系统订单号
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setCode($code)
	{
		$this->code = $code;
		$this->apiParas["code"] = $code;
	}

	public function getCode()
	{
		return $this->code;
	}

	public function setOutsid($outsid)
	{
		$this->outsid = $outsid;
		$this->apiParas["outsid"] = $outsid;
	}

	public function getOutsid()
	{
		return $this->outsid;
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
		return "01992488ct.shendong.logist.send";
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
