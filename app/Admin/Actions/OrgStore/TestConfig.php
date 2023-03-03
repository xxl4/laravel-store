<?php

namespace App\Admin\Actions\OrgStore;

use Nicelizhi\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;

class TestConfig extends RowAction
{
    public $name = '验证配置';

    public function handle(Model $model)
    {
        // $model ...
        //todo
        $data = [];
        $data['type'] = $model->shop_type;
        $data['shop_id'] = $model->shop_id;
        Redis::lpush(\App\Enums\RedisQueueEnum::STORE_VALIDATE_QUEUE, json_encode($data));
        return $this->response()->success('验证配置内容正在验证中，验证结构会在消息中心同步到您，请关注留意')->refresh();
    }

}