<?php
/**
 * TOP API: taobao.fenxiao.product.import.from.auction request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class FenxiaoProductImportFromAuctionRequest
{
	/** 
	 * 店铺宝贝id
	 **/
	private $auctionId;
	
	/** 
	 * 产品线id
	 **/
	private $productLineId;
	
	/** 
	 * 导入产品需要支持的交易类型：[1 代销][ 2 经销 ][3 代销和经销]
	 **/
	private $tradeType;
	
	private $apiParas = array();
	
	public function setAuctionId($auctionId)
	{
		$this->auctionId = $auctionId;
		$this->apiParas["auction_id"] = $auctionId;
	}

	public function getAuctionId()
	{
		return $this->auctionId;
	}

	public function setProductLineId($productLineId)
	{
		$this->productLineId = $productLineId;
		$this->apiParas["product_line_id"] = $productLineId;
	}

	public function getProductLineId()
	{
		return $this->productLineId;
	}

	public function setTradeType($tradeType)
	{
		$this->tradeType = $tradeType;
		$this->apiParas["trade_type"] = $tradeType;
	}

	public function getTradeType()
	{
		return $this->tradeType;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.product.import.from.auction";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->auctionId,"auctionId");
		RequestCheckUtil::checkNotNull($this->productLineId,"productLineId");
		RequestCheckUtil::checkNotNull($this->tradeType,"tradeType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
