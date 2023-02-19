<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class OrganizationEnableEnum extends Enum
{
    const Enable_0 =   0;
    const Enable_1 =   1;

    public static function getAll() : array {
        return [
            self::Enable_0 => __("Enable_0"),
            self::Enable_1 => __("Enable_1"),
        ];
    }
}
