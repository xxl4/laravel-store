<?php

namespace App\Admin\Actions\Product;

use Nicelizhi\Admin\Actions\BatchAction;
use Illuminate\Database\Eloquent\Collection;
use Nicelizhi\Admin\Facades\Admin;
use Illuminate\Http\Request;

class BatchAddTag extends BatchAction
{
    public $name = '批量加入标签';

    public function handle(Collection $collection, Request $request)
    {
        $tag = $request->input("tag");
        $store = $request->get('store');
        $num = 0;
        foreach ($collection as $model) {
            // ...
            $tag_reference = \App\Models\ProdTagReference::where("shop_id",$store)->where("tag_id",$tag)->where("prod_id",$model->prod_id)->first();
            if(is_null($tag_reference)) {
                $tag_reference = new \App\Models\ProdTagReference();
                $num ++;
            } 
            $tag_reference->shop_id = $store;
            $tag_reference->tag_id = $tag;
            $tag_reference->prod_id = $model->prod_id;
            $tag_reference->status = 1;
            $tag_reference->save();
        }

        \App\Models\ProdTag::where("id", $tag)->increment('prod_count', $num);

        return $this->response()->success('添加成功')->refresh();
    }

    public function form()
    {
        $stores = \App\Models\OrganizationStore::where("organization_id", Admin::user()->org_id)->pluck("name","id");
        $tags = \App\Models\ProdTag::where("status",1)->pluck("title","id");

        $this->select('store', '店铺')->options($stores)->rules("required");
        $this->select('tag', '标签')->options($tags)->rules('required');
    }

}