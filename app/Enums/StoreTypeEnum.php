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
    const TMALL     =  "TM";
    const TAOBAO    =  "TB";
    const DouDian   =  "DD";
    const WEDIAN    =  "WD";
    const JD        =  "JD";
    const AMAZONCN  =   "AMAZONCN";
    const AMAZON    =   "AMAZON";


    public static function getAll() {
        return [
            self::TMALL => __("TMALL"),
            self::TAOBAO => __("TAOBAO"),
            self::JD => __("JD"),
            self::WEDIAN => __("WEDIAN"),
            self::DouDian => __("DouDian"),
            self::AMAZONCN => __("AMAZONCN"),
            self::AMAZON => __("AMAZON")
        ];
    }
}
