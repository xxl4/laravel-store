<?php

namespace App\Admin\Actions\Product;

use Nicelizhi\Admin\Actions\BatchAction;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Redis;
use Nicelizhi\Admin\Facades\Admin;
use Illuminate\Http\Request;

class BatchEdit extends BatchAction
{
    public $name = '批量编辑';

    public function handle(Collection $collection, Request $request)
    {
        $is_outer_sync = $request->get('is_outer_sync');
        // 对每一个行的数据模型复制
        foreach ($collection as $model) {
            $model->status = 0;
            $model->save();

            if($is_outer_sync==1) {
                $outerProds = \App\Models\ProdOuter::where("prod_id", $model->prod_id)->get();
                foreach($outerProds as $key=>$item) {
                    $storeDetail = \App\Models\OrganizationStore::where("id",$item->shop_id)->select(['shop_type'])->first();
                    $data = [];
                    $data['prod_id'] = $model->prod_id;
                    $data['shop_id'] = $item->shop_id;
                    $data['act_type'] = "product_edit";
                    $data['user_id'] = Admin::user()->id;
                    \App\Libs\Utils::pushQueueByShopType($storeDetail->shop_type, $data); // 推送到队列中去处理
                } 
            }

        }

        // 返回一个`复制成功`的成功信息，并且刷新页面
        return $this->response()->success('商品信息正在同步.')->refresh();
    }

    public function form()
    {
        $stores = ["1"=>"同步"];
        $this->radio('is_outer_sync', '是否同步到第三方平台')->options($stores)->rules("int")->help("只是针对与已做过上架的商品有效");
    }

}