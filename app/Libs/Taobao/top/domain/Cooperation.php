<?php

/**
 * 合作分销关系
 * @author auto create
 */
class Cooperation
{
	
	/** 
	 * 供应商授权的支付方式：ALIPAY(支付宝)、OFFPREPAY(预付款)、OFFTRANSFER(转帐)、OFFSETTLEMENT(后期结算)
	 **/
	public $auth_payway;
	
	/** 
	 * 合作关系ID
	 **/
	public $cooperate_id;
	
	/** 
	 * 分销商ID
	 **/
	public $distributor_id;
	
	/** 
	 * 分销商nick
	 **/
	public $distributor_nick;
	
	/** 
	 * 合作终止时间
	 **/
	public $end_date;
	
	/** 
	 * 等级ID
	 **/
	public $grade_id;
	
	/** 
	 * 授权产品线
	 **/
	public $product_line;
	
	/** 
	 * 授权产品线名称，和product_line中的值按序对应
	 **/
	public $product_line_name;
	
	/** 
	 * 合作起始时间
	 **/
	public $start_date;
	
	/** 
	 * 合作状态： NORMAL(合作中)、 ENDING(终止中) 、END (终止)
	 **/
	public $status;
	
	/** 
	 * 供应商ID
	 **/
	public $supplier_id;
	
	/** 
	 * 供应商NICK
	 **/
	public $supplier_nick;
	
	/** 
	 * 分销方式： AGENT(代销) 、DEALER(经销)
	 **/
	public $trade_type;	
}
?>