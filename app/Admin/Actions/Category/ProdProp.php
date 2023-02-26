<?php

namespace App\Admin\Actions\Category;

use Nicelizhi\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class ProdProp extends RowAction
{
    public $name = '属性';

    public function handle(Model $model)
    {
        // $model ...

        //return $this->response()->success('Success message.')->refresh();
    }

    /**
     * @return  string
     */
    public function href()
    {
        return "/admin/category-props?category_id=".$this->getKey();
    }

}