<?php

namespace App\Admin\Actions\Product;

use Nicelizhi\Admin\Actions\BatchAction;
use Illuminate\Database\Eloquent\Collection;
use Nicelizhi\Admin\Facades\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Libs\Utils;

class BatchUploadOuterShop extends BatchAction
{
    public $name = '批量上传到第三方店铺';

    public function handle(Collection $collection, Request $request)
    {
        $store = $request->get('store');
        $num = 0;
        foreach ($collection as $model) {
            // ...
            $prodouter = \App\Models\ProdOuter::where("shop_id",$store)->where("prod_id",$model->prod_id)->first();
            if(is_null($prodouter)) {
                $prodouter = new \App\Models\ProdOuter();
                $num ++;
            } 
            $prodouter->shop_id = $store;
            $storeDetail = \App\Models\OrganizationStore::where("id",$store)->select(['shop_type'])->first();
            $prodouter->shop_type = $storeDetail->shop_type;
            $prodouter->prod_id = $model->prod_id;
            //$prodouter->status = 1;
            $prodouter->save();

            $data = [];
            $data['shop_id'] = $store;
            $data['shop_type'] = $storeDetail->shop_type;
            $data['prod_id'] = $model->prod_id;
            //Redis::lpush(\App\Enums\RedisQueueEnum::PRODUCT_UPLOAD_QUEUE, json_encode($data)); //针对需要上传的数据插入队列过程中
            $data['act_type'] = "upload";
            //\App\Jobs\Taobao\Queue::dispatch(json_encode($data))->onConnection('redis')->onQueue(\App\Enums\RedisQueueEnum::TAOBAO_REDIS_QUEUE);
            Utils::pushQueueByShopType($storeDetail->shop_type, $data); // 推送到队列中去处理

        }

        //\App\Models\ProdTag::where("id", $tag)->increment('prod_count', $num);

        return $this->response()->success('添加成功,请留意站内消息查看批量上传情况')->refresh();
    }

    public function form()
    {
        $stores = \App\Libs\Utils::getOrgStores(Admin::user()->org_id);

        $this->select('store', '店铺')->options($stores)->rules("required");
    }

}