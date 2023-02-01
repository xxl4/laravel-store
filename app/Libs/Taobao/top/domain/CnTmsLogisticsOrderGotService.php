<?php

/**
 * 要求菜鸟上门揽货服务，当pick_up_Type=2且需求指定时做揽收时，此字段需要传值（当前业务暂不支持）
 * @author auto create
 */
class CnTmsLogisticsOrderGotService
{
	
	/** 
	 * 揽收日期yyyyMMdd
	 **/
	public $got_date;
	
	/** 
	 * 揽收时间段 09:00-10:00
	 **/
	public $got_range;	
}
?>