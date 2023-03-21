<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class DouDianOrderStatusEnum extends Enum
{
    //1 待确认/待支付-订单创建完毕;105-已支付; 2-备货中； 101-部分发货; 3-已发货（全部发货）;4- 已取消;5 已完成（已收货）;
    const ORDER_STATUS_1 = 1;
    const ORDER_STATUS_105 = 105;
    const ORDER_STATUS_2 = 2;
    const ORDER_STATUS_101 = 101;
    const ORDER_STATUS_3 = 3;
    const ORDER_STATUS_4 = 4;
    const ORDER_STATUS_5 = 5;
}
