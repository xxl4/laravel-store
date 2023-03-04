<?php

namespace App\Enums\JD;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class OrderState extends Enum
{
    const WAIT_SELLER_STOCK_OUT = 1;
    const WAIT_GOODS_RECEIVE_CONFIRM = 2;
    const WAIT_SELLER_DELIVERY = 3;
    const PAUSE  = 4;
    const FINISHED_L = 5;
    const TRADE_CANCELED = 6;
    const LOCKED = 7;
    const POP_ORDER_PAUSE = 8;
}
