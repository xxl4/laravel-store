<?php

namespace App\Admin\Actions\Product;

use Nicelizhi\Admin\Actions\BatchAction;
use Illuminate\Database\Eloquent\Collection;
use Nicelizhi\Admin\Facades\Admin;
use Illuminate\Http\Request;

class BatchReplicate extends BatchAction
{
    public $name = '批量复制';

    public function handle(Collection $collection, Request $request)
    {
        $store = $request->get('store');
        // 对每一个行的数据模型复制
        foreach ($collection as $model) {
            $model->category_id = 0;
            //$model->shop_id = 0;
            $model->first_cat = 0;
            $model->second_cat = 0;
            $model->third_cat = 0;
            $model->create_time = date("Y-m-d H:i:s");
            $model->version = 1;
            $model->sold_num = 0;
            $model->shop_id = $store;
            $model->replicate()->save();
        }

        // 返回一个`复制成功`的成功信息，并且刷新页面
        return $this->response()->success('复制成功.')->refresh();
    }

    public function form()
    {
        $stores = \App\Libs\Utils::getOrgStores(Admin::user()->org_id);

        $this->select('store', '店铺')->options($stores)->rules("required");
    }

}