<?php

/**
 * 退货单信息
 * @author auto create
 */
class ReturnOrder
{
	
	/** 
	 * 运单号
	 **/
	public $express_code;
	
	/** 
	 * 物流公司编码(SF=顺丰、EMS=标准快递、EYB=经济快件、ZJS=宅急送、YTO=圆通、ZTO=中通(ZTO)、HTKY=百世汇通、 UC=优速、STO=申通、TTKDEX=天天快递、QFKD=全峰、FAST=快捷、POSTB=邮政小包、GTO=国通、YUNDA=韵达、JD=京东配送、DD=当当宅配、 AMAZON=亚马逊物流、OTHER=其他;只传英文编码)
	 **/
	public $logistics_code;
	
	/** 
	 * 物流公司名称
	 **/
	public $logistics_name;
	
	/** 
	 * 确认入库时间(YYYY-MM-DD HH:MM:SS)
	 **/
	public $order_confirm_time;
	
	/** 
	 * 单据类型(THRK=退货入库;HHRK=换货入库;只传英文编码)
	 **/
	public $order_type;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * ERP的退货入库单编码
	 **/
	public $return_order_code;
	
	/** 
	 * 仓库系统订单编码
	 **/
	public $return_order_id;
	
	/** 
	 * 退货原因
	 **/
	public $return_reason;
	
	/** 
	 * 发件人信息
	 **/
	public $sender_info;
	
	/** 
	 * 仓库编码(统仓统配等无需ERP指定仓储编码的情况填OTHER)
	 **/
	public $warehouse_code;	
}
?>