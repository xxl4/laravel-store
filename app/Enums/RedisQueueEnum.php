<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class RedisQueueEnum extends Enum
{
    const TAOBAO_REDIS_QUEUE =   "default-queue"; //淘宝队列
    const DOUDIAN_REDIS_QUEUE =   "doudian-queue"; //抖店队列
    const JD_REDIS_QUEUE =   "jd-queue"; //京东队列
    const WD_REDIS_QUEUE =   "wd-queue"; //微店队列
    const AMAZONCN_REDIS_QUEUE = "amazoncn-queue";
    const AMAZON_REDIS_QUEUE = "amazon-queue";
    const PRODUCT_UPLOAD_QUEUE = "product_upload_queue";
    const PRODUCT_QUEUE = "product_queue";
    const ORDER_QUEUE = "order_queue";
    const STORE_VALIDATE_QUEUE = "store_validate_queue";
    const STORE_SYNC_QUEUE = "store_sync_queue"; // 店铺的常规同步
}