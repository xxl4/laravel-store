<?php

/**
 * 入参
 * @author auto create
 */
class TopChannelPurchaseOrderCreateParam
{
	
	/** 
	 * 是否自动审批
	 **/
	public $auto_audit;
	
	/** 
	 * 渠道编码，11-线下网批
	 **/
	public $channel;
	
	/** 
	 * 分销商淘宝数字ID，如为空，down_user_nick必须输入
	 **/
	public $down_account_id;
	
	/** 
	 * 分销商用户类型，默认淘宝用户
	 **/
	public $down_account_type;
	
	/** 
	 * 分销商渠道角色，默认分销终端商
	 **/
	public $down_role_type;
	
	/** 
	 * 分销商昵称
	 **/
	public $down_user_nick;
	
	/** 
	 * 内部编码
	 **/
	public $internal_code;
	
	/** 
	 * 采购明细
	 **/
	public $items;
	
	/** 
	 * 请求编码
	 **/
	public $request_no;	
}
?>