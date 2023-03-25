<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class FileTypeEnum extends Enum
{
    const PROD_MAIN_PIC = 1; //主图
    const PROD_IMGS_LIST = 2; //相册
    const PROD_MAIN_VIDEO = 100; //主视频
    const PROD_SKU_PIC = 3; // SKU 图片内容
}
