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
    const CATEGORY_PROP_VALUE_ID = "category_prop_value_id_";

    const CONFIG_ID = "config_id_";
    const CONFIG_SHOP_ID = "config_shop_id_";
    const CONFIG_SHOP_TYPE_ID = "config_shop_type_id_";
    const CONFIG_CODE = "config_code_";
    const CONFIG_SHOP_CODE = "config_shop_code_";

    const DOUDIAN_STORE_TOKEN = "doudian_store_token_";
    const DOUDIAN_STORE_ORDER_ENCRYPT= "doudian_store_order_decrypt_";

    const ORG_STORE_LIST = "org_store_list_";
    const ORG_STORE_TYPE = "org_store_type_";
    const ORG_NAME = "org_name_";
    const ORG_CODE = "org_code_";

    const RUNING_PRODUCT_ALL_PAGE = "runing_product_all_page_";
    const RUNING_ORDERS_ALL_PAGE = "runing_order_all_page_";
    const RUNING_CATEGORY_ALL_PAGE = "runing_category_all_page_";
    const RUNING_CATEGORY_PROP_ALL_PAGE = "runing_category_prop_all_page_";

}
