<?php

/**
 * 请求参数
 * @author auto create
 */
class OrderDiscountBillQueryRequest
{
	
	/** 
	 * 查询结束时间
	 **/
	public $end_time;
	
	/** 
	 * 传入上一次查询结果的next_id，第一次查询时传0
	 **/
	public $next_id;
	
	/** 
	 * 订单渠道 1代表"轻POS",2代表"淘鲜达",默认为 1
	 **/
	public $order_channel;
	
	/** 
	 * 外部门店编码
	 **/
	public $out_shop_code;
	
	/** 
	 * 每页数量
	 **/
	public $page_size;
	
	/** 
	 * 查询开始时间
	 **/
	public $start_time;
	
	/** 
	 * 经营店id，store_id和out_shop_code不能同时为空
	 **/
	public $store_id;	
}
?>