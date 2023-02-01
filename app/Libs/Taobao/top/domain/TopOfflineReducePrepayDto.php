<?php

/**
 * 减少流水
 * @author auto create
 */
class TopOfflineReducePrepayDto
{
	
	/** 
	 * 汇票到期日期
	 **/
	public $accept_date;
	
	/** 
	 * 销商淘宝nick
	 **/
	public $dist_nick;
	
	/** 
	 * 出票人账号
	 **/
	public $drawer_account_num;
	
	/** 
	 * 出票人全称
	 **/
	public $drawer_full_name;
	
	/** 
	 * 资金流水类型：1.纸质承兑； 2.电子承兑；3.现金；4.优惠返点；5.奖励
	 **/
	public $flow_type;
	
	/** 
	 * 线下流水类型 1票据作废 2线下使用
	 **/
	public $offline_prepay_detail_type;
	
	/** 
	 * 外部系统支付流水Id，用于商家上传流水时去重(外部保证唯一）
	 **/
	public $outer_pay_id;
	
	/** 
	 * 付款行全称
	 **/
	public $pay_bank_full_name;
	
	/** 
	 * 付款行行号
	 **/
	public $pay_bank_num;
	
	/** 
	 * 支付时间
	 **/
	public $pay_time;
	
	/** 
	 * 收款人账号
	 **/
	public $receiver_account_num;
	
	/** 
	 * 收款开户银行
	 **/
	public $receiver_bank_full_name;
	
	/** 
	 * 收款人全称
	 **/
	public $receiver_full_name;
	
	/** 
	 * 承兑票据号
	 **/
	public $ticket_id;
	
	/** 
	 * 出票日期
	 **/
	public $ticket_issue_date;
	
	/** 
	 * 金额，单位分（必须为负数）
	 **/
	public $ticket_money;	
}
?>