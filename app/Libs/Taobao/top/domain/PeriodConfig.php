<?php

/**
 * 周期优惠信息
 * @author auto create
 */
class PeriodConfig
{
	
	/** 
	 * 每天的什么时间阶段搞活动,精确到秒单位 例如:03:00:00_05:00:00
	 **/
	public $every_day_periods;
	
	/** 
	 * 星期几搞活动 [1:Mon;2:Tues;3:Wed;4:Thur;5:Fri;6:Sat;7:Sun]
	 **/
	public $weekdays;	
}
?>