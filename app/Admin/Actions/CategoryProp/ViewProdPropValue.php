<?php

namespace App\Admin\Actions\CategoryProp;

use Nicelizhi\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class ViewProdPropValue extends RowAction
{
    public $name = '属性值';

    public function handle(Model $model)
    {
        // $model ...

        //return $this->response()->success('Success message.')->refresh();
    }

    public function href()
    {
        return "/admin/category-props?category_id=".$this->getKey();
    }

}