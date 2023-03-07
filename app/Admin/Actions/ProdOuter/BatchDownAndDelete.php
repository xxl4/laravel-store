<?php

namespace App\Admin\Actions\ProdOuter;

use Nicelizhi\Admin\Actions\BatchAction;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Redis;
use Nicelizhi\Admin\Facades\Admin;
use Illuminate\Http\Request;

class BatchDownAndDelete extends BatchAction
{
    public $name = '批量下架与删除';

    public function handle(Collection $collection, Request $request)
    {
        $is_outer_sync = $request->get('is_outer_sync');
        // 对每一个行的数据模型复制
        foreach ($collection as $model) {
            $model->status = 0;
            $model->save();

            if($is_outer_sync==1) {
                $data = [];
                $data['prod_id'] = $model->prod_id;
                $data['shop_id'] = $store;
                $data['act_type'] = "down_delete";
                $data['user_id'] = Admin::user()->id;
                //Redis::lpush(\App\Enums\RedisQueueEnum::PRODUCT_QUEUE, json_encode($data)); //针对需要上传的数据插入队列过程中
                if($is_outer_sync==1) {
                    \App\Jobs\Taobao\Queue::dispatch(json_encode($data))->onConnection('redis')->onQueue(\App\Enums\RedisQueueEnum::TAOBAO_REDIS_QUEUE);
                 }
            }

        }

        // 返回一个`复制成功`的成功信息，并且刷新页面
        return $this->response()->success('商品批量下架删除中.')->refresh();
    }

    public function form()
    {
        $stores = ["1"=>"同步"];
        $this->checkbox('is_outer_sync', '是否同步到第三方平台')->options($stores)->rules("required")->help("只是针对与已做过上架的商品有效");
    }

}