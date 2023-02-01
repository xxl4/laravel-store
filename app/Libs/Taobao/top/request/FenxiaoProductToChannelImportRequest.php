<?php
/**
 * TOP API: taobao.fenxiao.product.to.channel.import request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class FenxiaoProductToChannelImportRequest
{
	/** 
	 * 要导入的渠道[21 零售PLUS]目前仅支持此渠道
	 **/
	private $channel;
	
	/** 
	 * 要导入的产品id
	 **/
	private $productId;
	
	private $apiParas = array();
	
	public function setChannel($channel)
	{
		$this->channel = $channel;
		$this->apiParas["channel"] = $channel;
	}

	public function getChannel()
	{
		return $this->channel;
	}

	public function setProductId($productId)
	{
		$this->productId = $productId;
		$this->apiParas["product_id"] = $productId;
	}

	public function getProductId()
	{
		return $this->productId;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.product.to.channel.import";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->channel,"channel");
		RequestCheckUtil::checkNotNull($this->productId,"productId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
