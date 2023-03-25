<?php

namespace App\Enums\DD;

use BenSampo\Enum\Enum;

/**
订单状态1 待确认/待支付（订单创建完毕）105 已支付 2 备货中 101 部分发货 3 已发货（全部发货）4 已取消5 已完成（已收货）
 */
final class OrderState extends Enum
{
   const OrderState_1 = 1;
   const OrderState_105 = 105;
   const OrderState_2 = 2;
   const OrderState_101 = 101;
   const OrderState_3 = 3;
   const OrderState_4 = 4;
   const OrderState_5 = 5;
}
