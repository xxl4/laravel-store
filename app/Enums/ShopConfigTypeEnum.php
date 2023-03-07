<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ShopConfigTypeEnum extends Enum
{
    const PRODUCT = "product";
    const ORDER = "order";
    const SYSTEM = "system";
}
