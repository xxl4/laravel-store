<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class CachePrefixEnum extends Enum
{
    const SKU_ID = "sku_id_";
    const PROD_ID = "prod_id_";
    const PROD_PROP_ID = "prod_prop_id_";
    const PROD_PROP_VALUE_ID = "prod_prop_value_";
    
    const CATEGORY_ID = "category_id_";
    const CATEGORY_PROP_ID = "category_prop_id_";

    

}
