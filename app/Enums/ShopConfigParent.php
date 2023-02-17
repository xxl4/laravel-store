<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ShopConfigParent extends Enum
{
    const Option_0 =    0;
    const Option_1 =    1;
    const Option_2 =    2;
    const Option_3 =    3;
    const Option_4 =    4;
    const Option_5 =    5;
    const Option_6 =    6;
    const Option_7 =    7;
    const Option_8 =    8;
    const Option_9 =    9;

    public static function getDescription(int $value): string
    {
        switch ($value) {
            case self::Option_0:
                return __("Shop Info");
            break;
            default:
                return self::getKey($value);
        }
    }

    // 获取全部数据内容
    public static function getAll(): array {

    }
}
