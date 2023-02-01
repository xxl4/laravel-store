<?php
/**
 * TOP API: tmall.channel.products.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class TmallChannelProductsGetRequest
{
	/** 
	 * top_query_product_d_o
	 **/
	private $topQueryProductDO;
	
	private $apiParas = array();
	
	public function setTopQueryProductDO($topQueryProductDO)
	{
		$this->topQueryProductDO = $topQueryProductDO;
		$this->apiParas["top_query_product_d_o"] = $topQueryProductDO;
	}

	public function getTopQueryProductDO()
	{
		return $this->topQueryProductDO;
	}

	public function getApiMethodName()
	{
		return "tmall.channel.products.get";
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
