<?php

/**
 * 分批次入库的最后一次回传
 * @author auto create
 */
class TotalOrder
{
	
	/** 
	 * 实收数量
	 **/
	public $actual_qty;
	
	/** 
	 * 商品编码
	 **/
	public $item_code;
	
	/** 
	 * 仓储系统商品ID
	 **/
	public $item_id;
	
	/** 
	 * 商品名称
	 **/
	public $item_name;
	
	/** 
	 * 单据行号
	 **/
	public $order_line_no;
	
	/** 
	 * 货主编码
	 **/
	public $owner_code;
	
	/** 
	 * 备注
	 **/
	public $remark;	
}
?>