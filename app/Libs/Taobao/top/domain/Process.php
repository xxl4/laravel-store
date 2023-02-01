<?php

/**
 * 处理流程
 * @author auto create
 */
class Process
{
	
	/** 
	 * 操作内容
	 **/
	public $operate_info;
	
	/** 
	 * 该状态操作时间(YYYY-MM-DD HH:MM:SS)
	 **/
	public $operate_time;
	
	/** 
	 * 该状态操作员编码
	 **/
	public $operator_code;
	
	/** 
	 * 该状态操作员姓名
	 **/
	public $operator_name;
	
	/** 
	 * 单据状态(NEW=新增;ACCEPT=仓库接单;PRINT=打印;PICK=捡货;CHECK=复核;PACKAGE=打包;WEIGH=称重;READY=待提货;DELIVERED=已发货;EXCEPTION=异常;CLOSED=关闭;CANCELED=取消;REJECT=仓库拒单;REFUSE=客户拒签;CANCELEDFAIL=取消失败;SIGN=签收;TMSCANCELED=快递拦截;PARTFULFILLED=部分收货完成;FULFILLED=收货完成;PARTDELIVERED=部分发货完成;OTHER=其他;只传英文编码)
	 **/
	public $process_status;
	
	/** 
	 * 备注
	 **/
	public $remark;	
}
?>