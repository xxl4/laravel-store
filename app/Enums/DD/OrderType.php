<?php

namespace App\Enums\DD;

use BenSampo\Enum\Enum;

/**
0、普通订单 2、虚拟商品订单 4、电子券（poi核销） 5、三方核销
 */
final class OrderType extends Enum
{
   const OrderType_0 = 0;
   const OrderType_2 = 2;
   const OrderType_4 = 4;
   const OrderType_5 = 5;
   
}
