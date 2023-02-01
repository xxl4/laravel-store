<?php

/**
 * 配送要求信息（当前业务暂不支持）
 * @author auto create
 */
class CnTmsLogisticsOrderDeliverRequirements
{
	
	/** 
	 * 配送类型： PTPS-普通配送 LLPS-冷链配送
	 **/
	public $delivery_type;
	
	/** 
	 * 送达日期（格式为 yyyy-MM-dd)
	 **/
	public $schedule_day;
	
	/** 
	 * 送达结束时间（格式为 hh:mm）
	 **/
	public $schedule_end;
	
	/** 
	 * 送达开始时间（格式为 hh:mm）
	 **/
	public $schedule_start;
	
	/** 
	 * 投递时延要求(1 工作日 2 节假日 104 预约达 )
	 **/
	public $schedule_type;	
}
?>