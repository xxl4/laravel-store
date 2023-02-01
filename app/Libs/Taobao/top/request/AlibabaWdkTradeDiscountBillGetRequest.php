<?php
/**
 * TOP API: alibaba.wdk.trade.discount.bill.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class AlibabaWdkTradeDiscountBillGetRequest
{
	/** 
	 * 请求参数
	 **/
	private $param0;
	
	private $apiParas = array();
	
	public function setParam0($param0)
	{
		$this->param0 = $param0;
		$this->apiParas["param0"] = $param0;
	}

	public function getParam0()
	{
		return $this->param0;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.trade.discount.bill.get";
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
