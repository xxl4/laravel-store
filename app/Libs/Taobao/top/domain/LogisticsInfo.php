<?php

/**
 * 子单物流发货信息
 * @author auto create
 */
class LogisticsInfo
{
	
	/** 
	 * 组合商品编码code
	 **/
	public $combine_item_code;
	
	/** 
	 * 组合商品id
	 **/
	public $combine_item_id;
	
	/** 
	 * 发货类型CN=菜鸟发货，SC的商家仓发货
	 **/
	public $consign_type;
	
	/** 
	 * 货品仓储code
	 **/
	public $item_code;
	
	/** 
	 * 货品仓储ID
	 **/
	public $item_id;
	
	/** 
	 * 商品比例
	 **/
	public $item_ratio;
	
	/** 
	 * 应发数量
	 **/
	public $need_consign_num;
	
	/** 
	 * 商品数字编号
	 **/
	public $num_iid;
	
	/** 
	 * 商品的最小库存单位Sku的id
	 **/
	public $sku_id;
	
	/** 
	 * 如是菜鸟仓，则将菜鸟仓的区域仓code进行填充，如是商家仓发货则填充商家仓code
	 **/
	public $store_code;
	
	/** 
	 * 子交易号
	 **/
	public $sub_trade_id;
	
	/** 
	 * 交易号
	 **/
	public $trade_id;
	
	/** 
	 * 子订单类型:标示该子交易单来源交易，还是BMS增加的，枚举值(00=交易，10=BMS绑定)
	 **/
	public $type;	
}
?>