<?php

/**
 * 合作申请
 * @author auto create
 */
class Requisition
{
	
	/** 
	 * 好评率
	 **/
	public $dist_appraise;
	
	/** 
	 * 主营类目
	 **/
	public $dist_category;
	
	/** 
	 * 主营类目名称
	 **/
	public $dist_category_name;
	
	/** 
	 * 是否消保(0-不是、1-是)
	 **/
	public $dist_is_xiaobao;
	
	/** 
	 * 店铺星级
	 **/
	public $dist_level;
	
	/** 
	 * 分销申请加盟时，给供应商的留言
	 **/
	public $dist_message;
	
	/** 
	 * 开店时间
	 **/
	public $dist_open_date;
	
	/** 
	 * 店铺地址
	 **/
	public $dist_shop_address;
	
	/** 
	 * 分销商id
	 **/
	public $distributor_id;
	
	/** 
	 * 分销商nick
	 **/
	public $distributor_nick;
	
	/** 
	 * 申请时间
	 **/
	public $gmt_create;
	
	/** 
	 * 合作申请ID
	 **/
	public $requisition_id;
	
	/** 
	 * 申请状态（1-申请中、2-成功、3-被退回、4-已撤消、5-过期）
	 **/
	public $status;	
}
?>