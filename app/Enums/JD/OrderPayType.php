<?php

namespace App\Enums\JD;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class OrderPayType extends Enum
{
    const TYPE_1 = '1';
    const TYPE_2 = '2';
    const TYPE_3 = '3';
    const TYPE_4 = '4';
    const TYPE_5 = '5';
    const TYPE_6 = '6';

    static function getType($type) {
        switch($type){
            case 1:
                return self::TYPE_1;
                break;
            case 2:
                return self::TYPE_2;
                break;
            case 3:
                return self::TYPE_3;
                break;
            case 4:
                return self::TYPE_4;
                break;
            case 5:
                return self::TYPE_5;
                break;
            case 6:
                return self::TYPE_6;
                break;
            default:
                return 0;
        }
  
    }

}
