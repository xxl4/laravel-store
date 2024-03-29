<?php

namespace App\Admin\Actions\Product;

use Nicelizhi\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class AddSku extends RowAction
{
    public $name = '完善商品属性';

    public function handle(Model $model)
    {
        // $model ...
        //$model->replicate()->save();

        //return $this->response()->success('复制成功.')->refresh();
    }

    public function href()
    {
        return "/admin/products/prod_edit/".$this->getKey();
    }

}