<?php

namespace App\Admin\Actions\Product;

use Nicelizhi\Admin\Actions\BatchAction;
use Illuminate\Database\Eloquent\Collection;
use Nicelizhi\Admin\Facades\Admin;
use Illuminate\Http\Request;

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
        }

        //\App\Models\ProdTag::where("id", $tag)->increment('prod_count', $num);

        return $this->response()->success('添加成功,请留意站内消息查看批量上传情况')->refresh();
    }

    public function form()
    {
        $stores = \App\Models\OrganizationStore::where("organization_id", Admin::user()->org_id)->pluck("name","id");

        $this->select('store', '店铺')->options($stores)->rules("required");
    }

}