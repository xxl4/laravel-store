<?php

/**
 * 商品或sku的hscode信息审核状态。
 * @author auto create
 */
class HscodeAuditInfo
{
	
	/** 
	 * 商品或SKU使用的HS海关代码
	 **/
	public $hscode;
	
	/** 
	 * 商品ID
	 **/
	public $item_id;
	
	/** 
	 * hscode信息当前审核状态的具体说明
	 **/
	public $reason;
	
	/** 
	 * SKU的ID
	 **/
	public $sku_id;
	
	/** 
	 * hscode信息当前审核状态，HISTORY_ITEM：历史已上架商品，REJECT：审核未通过，AUDITING：审核中，PASS：审核通过，ERROR：获取审核状态异常
	 **/
	public $status;	
}
?>