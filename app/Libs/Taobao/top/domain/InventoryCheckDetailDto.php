<?php

/**
 * 调整明细
 * @author auto create
 */
class InventoryCheckDetailDto
{
	
	/** 
	 * 如果是门店类型,则为必填。 ONLINE_INVENTORY  线上可售库存，  SHARE_INVENTORY 线下可售库存
	 **/
	public $inv_biz_code;
	
	/** 
	 * 调整数量，正数盘盈，负数盘亏
	 **/
	public $quantity;
	
	/** 
	 * 若为货品仓库存，则此处是货品ID 若为商品直接设置仓库存，则此处是商品ID， 若商品带SKU，还需要补充skuId
	 **/
	public $sc_item_id;
	
	/** 
	 * 调整商品对应的SKUID，如果商品为货品，则为0
	 **/
	public $sku_id;
	
	/** 
	 * 每个货品的调整子单据号，作为业务调整依据，处理时会根据此单据号作幂
	 **/
	public $sub_order_id;	
}
?>