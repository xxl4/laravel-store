<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class StoreTypeEnum extends Enum
{
    const TMALL     =  "tm";
    const TAOBAO    =  "TB";
    const DouDian   = "DD";
    const WEDIAN    = "WD";
    const JD        = "jd";

    public static function getDescription(int $value): string
    {
        switch ($value) {
            case self::TMALL:
                return "天猫";
            break;
            case self::TAOBAO:
                return "淘宝";
            break;
            case self::JD:
                return "京东";
            break;
            case self::WEDIAN:
                return "微店";
            break;
            case self::DouDian:
                return "抖店";
            break;
            default:
                return self::getKey($value);
        }
    }
}
