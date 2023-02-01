<?php
/**
 * TOP API: taobao.qimen.inventoryreserve.create request
 * 
 * @author auto create
 * @since 1.0, 2016.08.04
 */
class InventoryreserveCreateRequest
{
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 交易订单信息
	 **/
	private $itemInventories;
	
	/** 
	 * 最大仓库数(当一个仓库不满足库存时.是否允许占用多个仓库库存.如果允许.需要指定最大分仓数量.但不能拆分订单明细. 0：不限个数.只要满足发货.不限分占几个仓库 1：默认值.只能单仓发 >1:最大 占用数量)
	 **/
	private $maxWarehouseNum;
	
	/** 
	 * ERP订单编码
	 **/
	private $orderCode;
	
	/** 
	 * 订单来源(213 天猫、201 淘宝、214 京东、202 1688 阿里中文站、203 苏宁在线、204 亚马逊中国、205 当当、208 1号店、207 唯品会、209 国美在线、210 拍拍、206 易贝ebay、211 聚美优品、212 乐蜂 网、215 邮乐、216 凡客、217 优购、218 银泰、219 易讯、221 聚尚网、222 蘑菇街、223 POS门店、301 其他)
	 **/
	private $orderSource;
	
	/** 
	 * 货主编码
	 **/
	private $ownerCode;
	
	/** 
	 * 收件者信息
	 **/
	private $receiverInfo;
	
	/** 
	 * 仓库编码
	 **/
	private $warehouseCode;
	
	private $apiParas = array();
	
	public function setExtendProps($extendProps)
	{
		$this->extendProps = $extendProps;
		$this->apiParas["extendProps"] = $extendProps;
	}

	public function getExtendProps()
	{
		return $this->extendProps;
	}

	public function setItemInventories($itemInventories)
	{
		$this->itemInventories = $itemInventories;
		$this->apiParas["itemInventories"] = $itemInventories;
	}

	public function getItemInventories()
	{
		return $this->itemInventories;
	}

	public function setMaxWarehouseNum($maxWarehouseNum)
	{
		$this->maxWarehouseNum = $maxWarehouseNum;
		$this->apiParas["maxWarehouseNum"] = $maxWarehouseNum;
	}

	public function getMaxWarehouseNum()
	{
		return $this->maxWarehouseNum;
	}

	public function setOrderCode($orderCode)
	{
		$this->orderCode = $orderCode;
		$this->apiParas["orderCode"] = $orderCode;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function setOrderSource($orderSource)
	{
		$this->orderSource = $orderSource;
		$this->apiParas["orderSource"] = $orderSource;
	}

	public function getOrderSource()
	{
		return $this->orderSource;
	}

	public function setOwnerCode($ownerCode)
	{
		$this->ownerCode = $ownerCode;
		$this->apiParas["ownerCode"] = $ownerCode;
	}

	public function getOwnerCode()
	{
		return $this->ownerCode;
	}

	public function setReceiverInfo($receiverInfo)
	{
		$this->receiverInfo = $receiverInfo;
		$this->apiParas["receiverInfo"] = $receiverInfo;
	}

	public function getReceiverInfo()
	{
		return $this->receiverInfo;
	}

	public function setWarehouseCode($warehouseCode)
	{
		$this->warehouseCode = $warehouseCode;
		$this->apiParas["warehouseCode"] = $warehouseCode;
	}

	public function getWarehouseCode()
	{
		return $this->warehouseCode;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.inventoryreserve.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderCode,"orderCode");
		RequestCheckUtil::checkMaxLength($this->orderCode,50,"orderCode");
		RequestCheckUtil::checkNotNull($this->orderSource,"orderSource");
		RequestCheckUtil::checkNotNull($this->ownerCode,"ownerCode");
		RequestCheckUtil::checkMaxLength($this->ownerCode,50,"ownerCode");
		RequestCheckUtil::checkMaxLength($this->warehouseCode,50,"warehouseCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
