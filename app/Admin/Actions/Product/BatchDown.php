<?php

namespace App\Admin\Actions\Product;

use Nicelizhi\Admin\Actions\BatchAction;
use Illuminate\Database\Eloquent\Collection;

class BatchDown extends BatchAction
{
    public $name = '批量下架';

    public function handle(Collection $collection)
    {
        // 对每一个行的数据模型复制
        foreach ($collection as $model) {
            $model->status = 0;
            $model->save();
        }

        // 返回一个`复制成功`的成功信息，并且刷新页面
        return $this->response()->success('复制成功.')->refresh();
    }

}