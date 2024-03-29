<?php

namespace App\Admin\Actions\OrgStore;

use Nicelizhi\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;

class StoreMoreConfig extends RowAction
{
    public $name = '店铺内容完善';

    public function handle(Model $model)
    {
        // $model ...
        //todo
        
        return $this->response()->success('验证配置内容正在验证中，验证结构会在消息中心同步到您，请关注留意')->refresh();
    }

}