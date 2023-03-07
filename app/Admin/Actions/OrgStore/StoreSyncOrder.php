<?php

namespace App\Admin\Actions\OrgStore;

use Nicelizhi\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;
use Nicelizhi\Admin\Facades\Admin;
use App\Libs\Utils;
class StoreSyncOrder extends RowAction
{
    public $name = '3) 同步店铺订单到本地';

    public function handle(Model $model)
    {
        // $model ...
        //todo
        $data = [];
        $data['shop_type'] = $model->shop_type;
        $data['shop_id'] = $model->id;
        $data['user_id'] = Admin::user()->id;
        $data['act_type'] = "sync_shop_order";
        
        //Redis::lpush(\App\Enums\RedisQueueEnum::STORE_SYNC_QUEUE, json_encode($data));
        Utils::pushQueueByShopType($model->shop_type, $data); // 推送到队列中去处理
        
        return $this->response()->success('同步已在操作，完成后会在消息中心同步到您，请关注留意')->refresh();
    }

}