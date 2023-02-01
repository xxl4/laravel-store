<?php

/**
 * 登录分销用户信息
 * @author auto create
 */
class LoginUser
{
	
	/** 
	 * 入驻时间
	 **/
	public $create_time;
	
	/** 
	 * 会员NICK
	 **/
	public $nick;
	
	/** 
	 * 分销用户ID
	 **/
	public $user_id;
	
	/** 
	 * 分销用户类型(1:分销商，2:供应商，3:品牌商；2、3都表示有供货能力，只是身份不同)
	 **/
	public $user_type;	
}
?>