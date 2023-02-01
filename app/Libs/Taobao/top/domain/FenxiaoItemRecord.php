<?php

/**
 * 分销商品下载记录
 * @author auto create
 */
class FenxiaoItemRecord
{
	
	/** 
	 * 下载时间
	 **/
	public $created;
	
	/** 
	 * 分销商ID
	 **/
	public $distributor_id;
	
	/** 
	 * 商品ID
	 **/
	public $item_id;
	
	/** 
	 * 更新时间（系统时间，无业务意义）
	 **/
	public $modified;
	
	/** 
	 * 产品ID
	 **/
	public $product_id;
	
	/** 
	 * 分销方式：AGENT（只做代销，默认值）、DEALER（只做经销）
	 **/
	public $trade_type;	
}
?>