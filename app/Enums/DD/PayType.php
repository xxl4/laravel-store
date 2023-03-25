<?php

namespace App\Enums\DD;

use BenSampo\Enum\Enum;

/**
【支付类型】 0、货到付款 1 、微信 2、支付宝 3、小程序 4、银行卡 5、余额 7、无需支付（0元单） 8、DOU分期（信用支付） 9、新卡支付 12、先用后付
 */
final class PayType extends Enum
{
   const PAYTYPE_0 = 0;
   const PAYTYPE_1 = 1;
   const PAYTYPE_2 = 2;
   const PAYTYPE_3 = 3;
   const PAYTYPE_4 = 4;
   const PAYTYPE_5 = 5;
   const PAYTYPE_7 = 7;
   const PAYTYPE_8 = 8;
   const PAYTYPE_9 = 9;
   const PAYTYPE_12 = 12;
}
