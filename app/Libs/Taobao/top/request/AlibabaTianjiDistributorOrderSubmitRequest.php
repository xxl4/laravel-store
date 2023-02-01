<?php
/**
 * TOP API: alibaba.tianji.distributor.order.submit request
 * 
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class AlibabaTianjiDistributorOrderSubmitRequest
{
	/** 
	 * 商品编码，如手机串号
	 **/
	private $itemSerialNo;
	
	/** 
	 * 淘宝交易订单号
	 **/
	private $orderNo;
	
	/** 
	 * 供应商产品编码，如SIM卡号
	 **/
	private $productSerialNo;
	
	private $apiParas = array();
	
	public function setItemSerialNo($itemSerialNo)
	{
		$this->itemSerialNo = $itemSerialNo;
		$this->apiParas["item_serial_no"] = $itemSerialNo;
	}

	public function getItemSerialNo()
	{
		return $this->itemSerialNo;
	}

	public function setOrderNo($orderNo)
	{
		$this->orderNo = $orderNo;
		$this->apiParas["order_no"] = $orderNo;
	}

	public function getOrderNo()
	{
		return $this->orderNo;
	}

	public function setProductSerialNo($productSerialNo)
	{
		$this->productSerialNo = $productSerialNo;
		$this->apiParas["product_serial_no"] = $productSerialNo;
	}

	public function getProductSerialNo()
	{
		return $this->productSerialNo;
	}

	public function getApiMethodName()
	{
		return "alibaba.tianji.distributor.order.submit";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderNo,"orderNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
