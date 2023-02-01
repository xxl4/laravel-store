<?php
/**
 * TOP API: taobao.user.openuid.getbynick request
 * 
 * @author auto create
 * @since 1.0, 2022.08.09
 */
class UserOpenuidGetbynickRequest
{
	/** 
	 * 买家nick列表
	 **/
	private $buyerNicks;
	
	private $apiParas = array();
	
	public function setBuyerNicks($buyerNicks)
	{
		$this->buyerNicks = $buyerNicks;
		$this->apiParas["buyer_nicks"] = $buyerNicks;
	}

	public function getBuyerNicks()
	{
		return $this->buyerNicks;
	}

	public function getApiMethodName()
	{
		return "taobao.user.openuid.getbynick";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNicks,"buyerNicks");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
