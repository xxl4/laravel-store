<?php

namespace App\Enums\TM;

use BenSampo\Enum\Enum;

/**
交易状态。可选值: * TRADE_NO_CREATE_PAY(没有创建支付宝交易) * WAIT_BUYER_PAY(等待买家付款) * SELLER_CONSIGNED_PART(卖家部分发货) * WAIT_SELLER_SEND_GOODS(等待卖家发货,即:买家已付款) * WAIT_BUYER_CONFIRM_GOODS(等待买家确认收货,即:卖家已发货) * TRADE_BUYER_SIGNED(买家已签收,货到付款专用) * TRADE_FINISHED(交易成功) * TRADE_CLOSED(付款以后用户退款成功，交易自动关闭) * TRADE_CLOSED_BY_TAOBAO(付款以前，卖家或买家主动关闭交易) * PAY_PENDING(国际信用卡支付付款确认中) * WAIT_PRE_AUTH_CONFIRM(0元购合约中) * PAID_FORBID_CONSIGN(拼团中订单或者发货强管控的订单，已付款但禁止发货)
 */
final class OrderState extends Enum
{
    const TRADE_NO_CREATE_PAY = 101;
    const WAIT_BUYER_PAY = 102;
    const SELLER_CONSIGNED_PART = 103;
    const WAIT_SELLER_SEND_GOODS  = 104;
    const WAIT_BUYER_CONFIRM_GOODS = 105;
    const TRADE_BUYER_SIGNED = 106;
    const TRADE_FINISHED = 107;
    const TRADE_CLOSED = 108;
    const TRADE_CLOSED_BY_TAOBAO = 109;
    const PAY_PENDING = 110;
    const WAIT_PRE_AUTH_CONFIRM = 111;
    const PAID_FORBID_CONSIGN = 112;
}
