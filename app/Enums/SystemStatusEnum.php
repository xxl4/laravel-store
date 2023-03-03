<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class SystemStatusEnum extends Enum
{
    const Status_0 =   0;
    const Status_1 =   1;

    public static function getAll() : array {
        return [
            self::Status_0 => __("Status_0"),
            self::Status_1 => __("Status_1"),
        ];
    }
}
