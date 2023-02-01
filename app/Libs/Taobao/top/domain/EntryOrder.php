<?php

/**
 * 入库单信息
 * @author auto create
 */
class EntryOrder
{
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $business_id;
	
	/** 
	 * 支持出入库单多次收货(多次收货后确认时:0:表示入库单最终状态确认;1:表示入库单中间状态确认;每次入库传入的数量为增 量;特殊情况;同一入库单;如果先收到0;后又收到1;允许修改收货的数量)
	 **/
	public $confirm_type;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $consign_id;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $contract_code;
	
	/** 
	 * 入库单号
	 **/
	public $entry_order_code;
	
	/** 
	 * 仓储系统入库单ID
	 **/
	public $entry_order_id;
	
	/** 
	 * 入库单类型(SCRK=生产入库;LYRK=领用入库;CCRK=残次品入库;CGRK=采购入库;DBRK=调拨入库;QTRK=其他入 库;B2BRK=B2B入库)
	 **/
	public $entry_order_type;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $expect_end_time;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $expect_start_time;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $express_code;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $ext_order_code;
	
	/** 
	 * 邮费
	 **/
	public $freight;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $is_check;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $is_nude_package;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $logistics_code;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $logistics_contact_name;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $logistics_contact_no;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $logistics_contact_phone;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $logistics_name;
	
	/** 
	 * 操作时间(YYYY-MM-DD HH:MM:SS;当status=FULFILLED;operateTime为入库时间)
	 **/
	public $operate_time;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $operator_code;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $operator_name;
	
	/** 
	 * 订单编码
	 **/
	public $order_code;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $order_create_time;
	
	/** 
	 * 后端订单id
	 **/
	public $order_id;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $order_source;
	
	/** 
	 * 订单类型
	 **/
	public $order_type;
	
	/** 
	 * 外部业务编码(消息ID;用于去重;ISV对于同一请求;分配一个唯一性的编码。用来保证因为网络等原因导致重复传输;请求 不会被重复处理)
	 **/
	public $out_biz_code;
	
	/** 
	 * 货主编码
	 **/
	public $owner_code;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $plan_arrival_time;
	
	/** 
	 * 采购单号(当orderType=CGRK时使用)
	 **/
	public $purchase_order_code;
	
	/** 
	 * receiverInfo
	 **/
	public $receiver_info;
	
	/** 
	 * relatedOrders
	 **/
	public $related_orders;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 该笔入库单的费用承担部门或责任部门
	 **/
	public $responsible_department;
	
	/** 
	 * senderInfo
	 **/
	public $sender_info;
	
	/** 
	 * 店铺编码
	 **/
	public $shop_code;
	
	/** 
	 * 店铺名称
	 **/
	public $shop_nick;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $size_detail;
	
	/** 
	 * 入库单状态(NEW-未开始处理;ACCEPT-仓库接单;PARTFULFILLED-部分收货完成;FULFILLED-收货完成;EXCEPTION-异 常;CANCELED-取消;CLOSED-关闭;REJECT-拒单;CANCELEDFAIL-取消失败;只传英文编码)
	 **/
	public $status;
	
	/** 
	 * 入库单确认的其他入库子类型，用于entryOrderType设置为其他入库时设置
	 **/
	public $sub_order_type;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $supplier_address;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $supplier_area;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $supplier_city;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $supplier_code;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $supplier_email;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $supplier_name;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $supplier_phone;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $supplier_province;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $supplier_tel;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $supplier_town;
	
	/** 
	 * 奇门仓储字段,说明,string(50),,
	 **/
	public $supplier_zip_code;
	
	/** 
	 * 单据总行数(当单据需要分多个请求发送时;发送方需要将totalOrderLines填入;接收方收到后;根据实际接收到的 条数和 totalOrderLines进行比对;如果小于;则继续等待接收请求。如果等于;则表示该单据的所有请求发送完 成)
	 **/
	public $total_order_lines;
	
	/** 
	 * 仓库编码(统仓统配等无需ERP指定仓储编码的情况填OTHER)
	 **/
	public $warehouse_code;
	
	/** 
	 * 仓库名称
	 **/
	public $warehouse_name;	
}
?>