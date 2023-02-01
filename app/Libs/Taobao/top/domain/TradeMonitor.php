<?php

/**
 * 经销订单监控记录信息
 * @author auto create
 */
class TradeMonitor
{
	
	/** 
	 * 地区
	 **/
	public $area;
	
	/** 
	 * 交易订单的商品购买数量
	 **/
	public $buy_amount;
	
	/** 
	 * 收货人姓名
	 **/
	public $buyer_full_name;
	
	/** 
	 * 买家的淘宝账号昵称
	 **/
	public $buyer_nick;
	
	/** 
	 * 城市
	 **/
	public $city;
	
	/** 
	 * 经销商的淘宝账号昵称
	 **/
	public $distributor_nick;
	
	/** 
	 * 交易订单的商品id
	 **/
	public $item_id;
	
	/** 
	 * 交易订单的商品的商家编码
	 **/
	public $item_number;
	
	/** 
	 * 交易订单的商品价格
	 **/
	public $item_price;
	
	/** 
	 * 交易订单的商品的sku名称
	 **/
	public $item_sku_name;
	
	/** 
	 * 交易订单的商品的sku商家编码
	 **/
	public $item_sku_number;
	
	/** 
	 * 交易订单的商品标题
	 **/
	public $item_title;
	
	/** 
	 * 交易订单的商品总价格（单价×数量+改价+优惠）
	 **/
	public $item_total_price;
	
	/** 
	 * 交易订单的付款时间
	 **/
	public $pay_time;
	
	/** 
	 * 供应商的产品id
	 **/
	public $product_id;
	
	/** 
	 * 供应商的产品的商家编码
	 **/
	public $product_number;
	
	/** 
	 * 供应商的产品的sku商家编码
	 **/
	public $product_sku_number;
	
	/** 
	 * 供应商的产品标题
	 **/
	public $product_title;
	
	/** 
	 * 省份
	 **/
	public $provence;
	
	/** 
	 * 交易订单的商品最高零售价
	 **/
	public $retail_price_high;
	
	/** 
	 * 交易订单的商品最低零售价
	 **/
	public $retail_price_low;
	
	/** 
	 * 收货人地址
	 **/
	public $shipping_address;
	
	/** 
	 * 交易订单的状态：
WAIT_SELLER_SEND_GOODS(已付款，待发货）<br>WAIT_BUYER_CONFIRM_GOODS(已付款，已发货)<br>TRADE_FINISHED(交易成功)
TRADE_CLOSED(交易关闭)<br>TRADE_REFUNDING（退款中）
	 **/
	public $status;
	
	/** 
	 * 交易订单的子订单号
	 **/
	public $sub_tc_order_id;
	
	/** 
	 * 供应商的淘宝账号昵称
	 **/
	public $supplier_nick;
	
	/** 
	 * 商品的卖出金额调整，金额增加时为正数，金额减少时为负数，单位是分，不带小数
	 **/
	public $tc_adjust_fee;
	
	/** 
	 * 优惠金额，始终为正数，单位是分，不带小数
	 **/
	public $tc_discount_fee;
	
	/** 
	 * 交易订单号
	 **/
	public $tc_order_id;
	
	/** 
	 * 商品优惠类型：聚划算、秒杀或其他
	 **/
	public $tc_preferential_type;
	
	/** 
	 * 主键id
	 **/
	public $trade_monitor_id;	
}
?>