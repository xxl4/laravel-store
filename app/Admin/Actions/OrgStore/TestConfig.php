<?php

namespace App\Admin\Actions\OrgStore;

use Nicelizhi\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;
use App\Libs\Utils;

class TestConfig extends RowAction
{
    public $name = '1) 验证配置';

    public function handle(Model $model)
    {
        // $model ...
        //todo
        $data = [];
        $data['type'] = $model->shop_type;
        $data['shop_id'] = $model->id;
        $data['act_type'] = "test_config";
        
        Utils::pushQueueByShopType($model->shop_type, $data); // 推送到队列中去处理

        return $this->response()->success('验证配置内容正在验证中，验证结构会在消息中心同步到您，请关注留意')->refresh();
    }

}