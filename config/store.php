<?php 
return [
    // 数据表
    'database' => [
        // 店铺
        'store_table'   => 'store',
        'config_table'  => 'config',
        'product_table'  => 'products', //商品表
        'product_attr_table'  => 'product_attrs', //商品属性表
        'product_image_table'  => 'product_images', //商品图片表
        'product_stock_table'  => 'product_stock', //商品库存表

        'order_table'      => 'order', //订单表
        'order_item_table'      => 'order_items', //订单表商品表

        'refund_table'      => 'refund', //售后表
        'refund_item_table'      => 'refund_items', //售后商品表

        'shipping_table'      => 'shipping', //配送表

        'organization_table'          => 'organization', // 机构表
        'organization_user_table'          => 'organization_user', // 机构用户表
        'organization_role_table'          => 'organization_role', // 机构角色

        'storage_location_table'      => 'storage_location', //库位

    ],

    // 队列
    'queue' => [
        'put_on_queue'          => 'put_on', //上架
        'take_off_queue'        => 'take_off',//下架
    ]
];