<?php

namespace App\Admin\Controllers;

use App\Models\ProdOuter;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;
use App\Admin\Actions\ProdOuter\BatchDown;
use App\Admin\Actions\ProdOuter\BatchOnline;
use App\Admin\Actions\ProdOuter\BatchDownAndDelete;
use App\Admin\Actions\ProdOuter\BatchEdit;
use App\Admin\Actions\ProdOuter\BatchSyncQty;
use Nicelizhi\Admin\Facades\Admin;

class ProdOuterController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '外部商品';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProdOuter());

        $grid->column('id', __('Id'));
        $grid->column('prod_id', __('Prod id'))->filter();
        $grid->column('outer_id', __('Outer id'))->filter();
        $grid->column('content', __('Content'))->limit(400)->width(500);
        $grid->column('shop_type', __('Shop type'))->filter();
        //$grid->column('shop_id', __('Shop id'))->filter();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        $grid->model()->orderBy("id","desc");

        $grid->batchActions(function ($batch) {
            // 批量上架
            $batch->add(new BatchOnline());
            // 批量下架
            $batch->add(new BatchDown());

            $batch->add(new BatchDownAndDelete());

            $batch->add(new BatchEdit());

            $batch->add(new BatchSyncQty());

        });

        $grid->filter(function($filter){
            // 去掉默认的id过滤器
            $filter->disableIdFilter();
            $items = \App\Libs\Utils::getOrgStores(Admin::user()->org_id);
            foreach($items as $key=>$item) {
                $filter->scope('shop_type_'.$key, "查看".$item)->where('shop_id', $key);
            } 
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(ProdOuter::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('prod_id', __('Prod id'));
        $show->field('outer_id', __('Outer id'));
        $show->field('context', __('Context'));
        $show->field('shop_type', __('Shop type'));
        $show->field('shop_id', __('Shop id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProdOuter());

        $form->number('prod_id', __('Prod id'));
        $form->number('outer_id', __('Outer id'));
        $form->textarea('context', __('Context'));
        $form->text('shop_type', __('Shop type'));
        $form->number('shop_id', __('Shop id'));

        return $form;
    }
}
