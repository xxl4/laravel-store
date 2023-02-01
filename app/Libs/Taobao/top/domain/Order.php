<?php

/**
 * 订单结构
 * @author auto create
 */
class Order
{
	
	/** 
	 * 手工调整金额.格式为:1.01;单位:元;精确到小数点后两位.
	 **/
	public $adjust_fee;
	
	/** 
	 * assemblyItem
	 **/
	public $assembly_item;
	
	/** 
	 * 价格
	 **/
	public $assembly_price;
	
	/** 
	 * 主商品订单id
	 **/
	public $assembly_rela;
	
	/** 
	 * 捆绑的子订单号，表示该子订单要和捆绑的子订单一起发货，用于卖家子订单捆绑发货
	 **/
	public $bind_oid;
	
	/** 
	 * bind_oid字段的升级，支持返回绑定的多个子订单，多个子订单以半角逗号分隔
	 **/
	public $bind_oids;
	
	/** 
	 * bind_oids字段的升级，在交易成功和交易关闭状态下也能获取到，支持返回绑定的多个子订单，多个子订单以半角逗号分隔
	 **/
	public $bind_oids_all_status;
	
	/** 
	 * 为tmall.daogoubao.cloudstore时表示云店链路
	 **/
	public $biz_code;
	
	/** 
	 * 同城购订单source
	 **/
	public $brand_light_shop_source;
	
	/** 
	 * 同城购门店id
	 **/
	public $brand_light_shop_store_id;
	
	/** 
	 * 买家展示昵称
	 **/
	public $buyer_display_nick;
	
	/** 
	 * 买家昵称
	 **/
	public $buyer_nick;
	
	/** 
	 * 买家是否已评价。可选值：true(已评价)，false(未评价)
	 **/
	public $buyer_rate;
	
	/** 
	 * calPenalty
	 **/
	public $cal_penalty;
	
	/** 
	 * carStoreCode
	 **/
	public $car_store_code;
	
	/** 
	 * carStoreName
	 **/
	public $car_store_name;
	
	/** 
	 * carTaker
	 **/
	public $car_taker;
	
	/** 
	 * carTakerID
	 **/
	public $car_taker_id;
	
	/** 
	 * carTakerIDNum
	 **/
	public $car_taker_id_num;
	
	/** 
	 * carTakerPhone
	 **/
	public $car_taker_phone;
	
	/** 
	 * 交易商品对应的类目ID
	 **/
	public $cid;
	
	/** 
	 * clCarTaker
	 **/
	public $cl_car_taker;
	
	/** 
	 * clCarTakerIDNum
	 **/
	public $cl_car_taker_i_d_num;
	
	/** 
	 * clCarTakerIDNum
	 **/
	public $cl_car_taker_id_num;
	
	/** 
	 * clCarTakerPhone
	 **/
	public $cl_car_taker_phone;
	
	/** 
	 * clDownPayment
	 **/
	public $cl_down_payment;
	
	/** 
	 * clDownPaymentRatio
	 **/
	public $cl_down_payment_ratio;
	
	/** 
	 * clInstallmentNum
	 **/
	public $cl_installment_num;
	
	/** 
	 * clMonthPayment
	 **/
	public $cl_month_payment;
	
	/** 
	 * clServiceFee
	 **/
	public $cl_service_fee;
	
	/** 
	 * clTailPayment
	 **/
	public $cl_tail_payment;
	
	/** 
	 * 为1，且bizCode不为tmall.daogoubao.cloudstore时，为旗舰店订单
	 **/
	public $cloud_store;
	
	/** 
	 * 云店pos单号
	 **/
	public $cloud_store_bind_pos;
	
	/** 
	 * 云店改价用token
	 **/
	public $cloud_store_token;
	
	/** 
	 * 最晚揽收时间
	 **/
	public $collect_time;
	
	/** 
	 * 天猫搭配宝
	 **/
	public $combo_id;
	
	/** 
	 * 子订单发货时间，当卖家对订单进行了多次发货，子订单的发货时间和主订单的发货时间可能不一样了，那么就需要以子订单的时间为准。（没有进行多次发货的订单，主订单的发货时间和子订单的发货时间都一样）
	 **/
	public $consign_time;
	
	/** 
	 * 有值表示信用购订单；1表示信用购一期；2表示信用购二期；3表示信用购三期
	 **/
	public $credit_buy;
	
	/** 
	 * 定制信息
	 **/
	public $customization;
	
	/** 
	 * 物流截单时间，分钟
	 **/
	public $cutoff_minutes;
	
	/** 
	 * 最晚发货时间
	 **/
	public $delivery_time;
	
	/** 
	 * 子订单级订单优惠金额。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $discount_fee;
	
	/** 
	 * 最晚派送时间
	 **/
	public $dispatch_time;
	
	/** 
	 * 分摊之后的实付金额
	 **/
	public $divide_order_fee;
	
	/** 
	 * downPayment
	 **/
	public $down_payment;
	
	/** 
	 * downPaymentRatio
	 **/
	public $down_payment_ratio;
	
	/** 
	 * 子订单的交易结束时间说明：子订单有单独的结束时间，与主订单的结束时间可能有所不同，在有退款发起的时候或者是主订单分阶段付款的时候，子订单的结束时间会早于主订单的结束时间，所以开放这个字段便于订单结束状态的判断
	 **/
	public $end_time;
	
	/** 
	 * 预计送达时间
	 **/
	public $es_date;
	
	/** 
	 * 预计配送时间段
	 **/
	public $es_range;
	
	/** 
	 * 物流时效，相对时间，单位是天
	 **/
	public $es_time;
	
	/** 
	 * 子订单预计发货时间
	 **/
	public $estimate_con_time;
	
	/** 
	 * 车牌号码
	 **/
	public $et_plate_number;
	
	/** 
	 * 天猫汽车服务预约时间
	 **/
	public $et_ser_time;
	
	/** 
	 * 电子凭证预约门店地址
	 **/
	public $et_shop_name;
	
	/** 
	 * 电子凭证核销门店地址
	 **/
	public $et_verified_shop_name;
	
	/** 
	 * 购物金核销子订单本金分摊金额（单位为分）
	 **/
	public $expand_card_basic_price_used_suborder;
	
	/** 
	 * 购物金核销子订单权益金分摊金额（单位为分）
	 **/
	public $expand_card_expand_price_used_suborder;
	
	/** 
	 * 透出的额外信息
	 **/
	public $extend_info;
	
	/** 
	 * 订单履行状态，如喵鲜生极速达：分单完成
	 **/
	public $f_status;
	
	/** 
	 * 单履行内容，如喵鲜生极速达：storeId,phone
	 **/
	public $f_term;
	
	/** 
	 * 订单履行类型，如喵鲜生极速达（jsd）
	 **/
	public $f_type;
	
	/** 
	 * 花呗分期期数
	 **/
	public $fqg_num;
	
	/** 
	 * 云店是否扣拥
	 **/
	public $hj_settle_no_commission;
	
	/** 
	 * 商品的字符串编号(注意：iid近期即将废弃，请用num_iid参数)
	 **/
	public $iid;
	
	/** 
	 * installmentNum
	 **/
	public $installment_num;
	
	/** 
	 * 库存类型：6为在途
	 **/
	public $inv_type;
	
	/** 
	 * 子订单所在包裹的运单号
	 **/
	public $invoice_no;
	
	/** 
	 * 表示订单交易是否含有对应的代销采购单。如果该订单中存在一个对应的代销采购单，那么该值为true；反之，该值为false。
	 **/
	public $is_daixiao;
	
	/** 
	 * 子订单优惠贬值
	 **/
	public $is_devalue_fee;
	
	/** 
	 * 是否商家承担手续费
	 **/
	public $is_fqg_s_fee;
	
	/** 
	 * 是否是考拉商品订单
	 **/
	public $is_kaola;
	
	/** 
	 * 是否超卖
	 **/
	public $is_oversold;
	
	/** 
	 * 是否是服务订单，是返回true，否返回false。
	 **/
	public $is_service_order;
	
	/** 
	 * 是否发货
	 **/
	public $is_sh_ship;
	
	/** 
	 * 子订单是否是www订单
	 **/
	public $is_www;
	
	/** 
	 * 套餐ID
	 **/
	public $item_meal_id;
	
	/** 
	 * 套餐的值。如：M8原装电池:便携支架:M8专用座充:莫凡保护袋
	 **/
	public $item_meal_name;
	
	/** 
	 * 商品备注
	 **/
	public $item_memo;
	
	/** 
	 * 服务所属的交易订单号。如果服务为一年包换，则item_oid这笔订单享受改服务的保护
	 **/
	public $item_oid;
	
	/** 
	 * 预售订单立减金额
	 **/
	public $lijian;
	
	/** 
	 * 子订单发货的快递公司名称
	 **/
	public $logistics_company;
	
	/** 
	 * 免单金额
	 **/
	public $md_fee;
	
	/** 
	 * 免单资格属性
	 **/
	public $md_qualification;
	
	/** 
	 * 订单修改时间，目前只有taobao.trade.ordersku.update会返回此字段。
	 **/
	public $modified;
	
	/** 
	 * 有值表示买家修改了地址；1表示付款后改地址；2表示付款前改地址
	 **/
	public $modify_address;
	
	/** 
	 * monthPayment
	 **/
	public $month_payment;
	
	/** 
	 * 新零售商家端商品唯一编号
	 **/
	public $nr_outer_iid;
	
	/** 
	 * nrReduceInvFail
	 **/
	public $nr_reduce_inv_fail;
	
	/** 
	 * 购买数量。取值范围:大于零的整数
	 **/
	public $num;
	
	/** 
	 * 商品数字ID
	 **/
	public $num_iid;
	
	/** 
	 * 
	 **/
	public $o2o_et_order_id;
	
	/** 
	 * 导购员ID
	 **/
	public $o2o_guide_id;
	
	/** 
	 * 导购员名称
	 **/
	public $o2o_guide_name;
	
	/** 
	 * 门店Id
	 **/
	public $o2o_shop_id;
	
	/** 
	 * 门店名称
	 **/
	public $o2o_shop_name;
	
	/** 
	 * 子订单编号
	 **/
	public $oid;
	
	/** 
	 * oidStr
	 **/
	public $oid_str;
	
	/** 
	 * 经销商货品商家编码
	 **/
	public $omni_jxs_outerid;
	
	/** 
	 * 子订单扩展属性: is_free_down_payment:是否免首付：true：是，false：否，可选字段 car_back_payment:返还免首付金额，单位：分， car_ref_activity_id:服务商传入活动ID，依赖外部服务商传入；
	 **/
	public $order_attr;
	
	/** 
	 * 子订单来源,如jhs(聚划算)、taobao(淘宝)、wap(无线)
	 **/
	public $order_from;
	
	/** 
	 * 云店接单标记
	 **/
	public $order_taking;
	
	/** 
	 * 前N有礼活动id
	 **/
	public $os_activity_id;
	
	/** 
	 * 预约配送，用户预约时间
	 **/
	public $os_date;
	
	/** 
	 * 前N有礼赠品id
	 **/
	public $os_fg_item_id;
	
	/** 
	 * 前N有礼赠品数量
	 **/
	public $os_gift_count;
	
	/** 
	 * 预约配送，用户预约时间段
	 **/
	public $os_range;
	
	/** 
	 * 前N有礼中奖名次，获得奖品的订单才会有该字段
	 **/
	public $os_sort_num;
	
	/** 
	 * 天猫未来店外部 ERP 商品 ID
	 **/
	public $out_item_id;
	
	/** 
	 * outUniqueId
	 **/
	public $out_unique_id;
	
	/** 
	 * 商家外部编码(可与商家外部系统对接)。外部商家自己定义的商品Item的id，可以通过taobao.items.custom.get获取商品的Item的信息
	 **/
	public $outer_iid;
	
	/** 
	 * 外部网店自己定义的Sku编号
	 **/
	public $outer_sku_id;
	
	/** 
	 * 优惠分摊
	 **/
	public $part_mjz_discount;
	
	/** 
	 * 子订单实付金额。精确到2位小数，单位:元。如:200.07，表示:200元7分。对于多子订单的交易，计算公式如下：payment = price * num + adjust_fee - discount_fee ；单子订单交易，payment与主订单的payment一致，对于退款成功的子订单，由于主订单的优惠分摊金额，会造成该字段可能不为0.00元。建议使用退款前的实付金额减去退款单中的实际退款金额计算。
	 **/
	public $payment;
	
	/** 
	 * penalty
	 **/
	public $penalty;
	
	/** 
	 * 商品图片的绝对路径
	 **/
	public $pic_path;
	
	/** 
	 * platformSubsidyFee
	 **/
	public $platform_subsidy_fee;
	
	/** 
	 * 商品价格。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $price;
	
	/** 
	 * 信用购履约结束时间
	 **/
	public $promise_end_time;
	
	/** 
	 * 时效服务字段，服务字段，会有多个服务值，以英文半角逗号&quot;,&quot;切割
	 **/
	public $promise_service;
	
	/** 
	 * 使用淘金币的数量，以分为单位，和订单标propoint中间那一段一样
	 **/
	public $propoint;
	
	/** 
	 * 个人充值红包金额
	 **/
	public $recharge_fee;
	
	/** 
	 * 最近退款ID
	 **/
	public $refund_id;
	
	/** 
	 * 退款状态。退款状态。可选值 WAIT_SELLER_AGREE(买家已经申请退款，等待卖家同意) WAIT_BUYER_RETURN_GOODS(卖家已经同意退款，等待买家退货) WAIT_SELLER_CONFIRM_GOODS(买家已经退货，等待卖家确认收货) SELLER_REFUSE_BUYER(卖家拒绝退款) CLOSED(退款关闭) SUCCESS(退款成功)
	 **/
	public $refund_status;
	
	/** 
	 * 天猫无人店线下店 ID
	 **/
	public $retail_store_id;
	
	/** 
	 * 新零售全渠道订单：商家自有货品编码
	 **/
	public $rt_omni_outer_sc_id;
	
	/** 
	 * 新零售全渠道订单：后端货品ID
	 **/
	public $rt_omni_sc_id;
	
	/** 
	 * 
	 **/
	public $s_tariff_fee;
	
	/** 
	 * 卖家展示昵称
	 **/
	public $seller_display_nick;
	
	/** 
	 * 卖家昵称
	 **/
	public $seller_nick;
	
	/** 
	 * 卖家是否已评价。可选值：true(已评价)，false(未评价)
	 **/
	public $seller_rate;
	
	/** 
	 * 卖家类型，可选值为：B（商城商家），C（普通卖家）
	 **/
	public $seller_type;
	
	/** 
	 * 服务详情的URL地址
	 **/
	public $service_detail_url;
	
	/** 
	 * serviceFee
	 **/
	public $service_fee;
	
	/** 
	 * 服务数字id
	 **/
	public $service_id;
	
	/** 
	 * 服务供应链-服务订单类型,1:主子挂载；2：双主挂载；3：单独售卖
	 **/
	public $service_order_type;
	
	/** 
	 * 服务供应链-服务商外部编码
	 **/
	public $service_outer_id;
	
	/** 
	 * 仓储信息
	 **/
	public $shipper;
	
	/** 
	 * 子订单的运送方式（卖家对订单进行多次发货之后，一个主订单下的子订单的运送方式可能不同，用order.shipping_type来区分子订单的运送方式）
	 **/
	public $shipping_type;
	
	/** 
	 * 最晚签收时间
	 **/
	public $sign_time;
	
	/** 
	 * 商品的最小库存单位Sku的id.可以通过taobao.item.sku.get获取详细的Sku信息
	 **/
	public $sku_id;
	
	/** 
	 * SKU的值。如：机身颜色:黑色;手机套餐:官方标配
	 **/
	public $sku_properties_name;
	
	/** 
	 * 订单快照详细信息
	 **/
	public $snapshot;
	
	/** 
	 * 订单快照URL
	 **/
	public $snapshot_url;
	
	/** 
	 * sortInfo
	 **/
	public $sort_info;
	
	/** 
	 * 特殊的退款类型，比如直播返现、价保
	 **/
	public $special_refund_type;
	
	/** 
	 * 订单状态（请关注此状态，如果为TRADE_CLOSED_BY_TAOBAO状态，则不要对此订单进行发货，切记啊！）。可选值: <ul><li>TRADE_NO_CREATE_PAY(没有创建支付宝交易) </li><li>WAIT_BUYER_PAY(等待买家付款) </li><li>WAIT_SELLER_SEND_GOODS(等待卖家发货,即:买家已付款) </li><li>WAIT_BUYER_CONFIRM_GOODS(等待买家确认收货,即:卖家已发货) </li><li>TRADE_BUYER_SIGNED(买家已签收,货到付款专用) </li><li>TRADE_FINISHED(交易成功) </li><li>TRADE_CLOSED(付款以后用户退款成功，交易自动关闭) </li><li>TRADE_CLOSED_BY_TAOBAO(付款以前，卖家或买家主动关闭交易)</li><li>PAY_PENDING(国际信用卡支付付款确认中)</li></ul>
	 **/
	public $status;
	
	/** 
	 * 发货的仓库编码
	 **/
	public $store_code;
	
	/** 
	 * 天猫国际官网直供子订单关税税费
	 **/
	public $sub_order_tax_fee;
	
	/** 
	 * 天猫国际子订单计税优惠金额
	 **/
	public $sub_order_tax_promotion_fee;
	
	/** 
	 * 天猫国际官网直供子订单关税税率
	 **/
	public $sub_order_tax_rate;
	
	/** 
	 * tailPayment
	 **/
	public $tail_payment;
	
	/** 
	 * 天猫国际订单包税金额
	 **/
	public $tax_coupon_discount;
	
	/** 
	 * 天猫国际订单是否包税
	 **/
	public $tax_free;
	
	/** 
	 * 买家修改地址时间
	 **/
	public $ti_modify_address_time;
	
	/** 
	 * 门票有效期的key
	 **/
	public $ticket_expdate_key;
	
	/** 
	 * 对应门票有效期的外部id
	 **/
	public $ticket_outer_id;
	
	/** 
	 * 订单超时到期时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $timeout_action_time;
	
	/** 
	 * 时效服务身份，如tmallPromise代表天猫时效承诺
	 **/
	public $timing_promise;
	
	/** 
	 * 商品标题
	 **/
	public $title;
	
	/** 
	 * 支持家装类物流的类型
	 **/
	public $tmser_spu_code;
	
	/** 
	 * 应付金额（商品价格 * 商品数量 + 手工调整金额 - 子订单级订单优惠金额）。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $total_fee;
	
	/** 
	 * 交易类型
	 **/
	public $type;
	
	/** 
	 * wsBankApplyNo
	 **/
	public $ws_bank_apply_no;
	
	/** 
	 * xxx
	 **/
	public $xxx;
	
	/** 
	 * 征集预售订单征集状态：1（征集中），2（征集成功），3（征集失败）
	 **/
	public $zhengji_status;	
}
?>