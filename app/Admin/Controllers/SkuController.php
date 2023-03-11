<?php

namespace App\Admin\Controllers;

use App\Models\Sku;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;
use Nicelizhi\Admin\Facades\Admin;
use App\Admin\Actions\Sku\Replicate;
use App\Admin\Actions\Sku\BatchReplicate;

class SkuController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '产品Sku';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Sku());

        $grid->column('sku_id', __('Sku id'))->sortable()->filter();
        $grid->column('prod_id', __('Prod id'))->sortable()->filter();
        $grid->column('properties', __('Properties'))->display(function ($v){
            return $v;
        });
        $grid->column('ori_price', __('Ori price'))->sortable()->filter();
        $grid->column('price', __('Price'))->sortable()->filter();
        $grid->column('stocks', __('Stocks'))->sortable()->filter();
        $grid->column('actual_stocks', __('Actual stocks'))->sortable()->filter();
        $grid->column('update_time', __('Update time'));
        $grid->column('rec_time', __('Rec time'));
        $grid->column('party_code', __('Party code'))->sortable()->filter();
        //$grid->column('model_id', __('Model id'));
        //$grid->column('pic', __('Pic'));
        $grid->column('sku_name', __('Sku name'))->sortable()->filter();
        $grid->column('prod_name', __('Prod name'))->sortable()->filter();
        //$grid->column('version', __('Version'))->sortable()->filter();
        $grid->column('weight', __('Weight'))->sortable()->filter();
        $grid->column('volume', __('Volume'))->sortable()->filter();
        $grid->column('status')->bool(['1' => true, '0' => false])->sortable()->filter();
        $grid->column('is_delete')->bool(['1' => true, '0' => false])->sortable()->filter();

        $grid->model()->where("org_id", Admin::user()->org_id);
        $grid->model()->orderBy("sku_id","DESC");

        $grid->filter(function($filter){

            // 去掉默认的id过滤器
            $filter->disableIdFilter();
        
            $filter->scope('is_delete', '已删除')->where('is_delete', '1');
        
        });

        $grid->actions(function ($actions) {
            $actions->add(new Replicate);
        });
        $grid->batchActions(function ($batch) {
            $batch->add(new BatchReplicate());
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
        $show = new Show(Sku::findOrFail($id));

        $show->field('sku_id', __('Sku id'));
        $show->field('prod_id', __('Prod id'));
        $show->field('properties', __('Properties'));
        $show->field('ori_price', __('Ori price'));
        $show->field('price', __('Price'));
        $show->field('stocks', __('Stocks'));
        $show->field('actual_stocks', __('Actual stocks'));
        $show->field('update_time', __('Update time'));
        $show->field('rec_time', __('Rec time'));
        $show->field('party_code', __('Party code'));
        $show->field('model_id', __('Model id'));
        $show->field('pic', __('Pic'));
        $show->field('sku_name', __('Sku name'));
        $show->field('prod_name', __('Prod name'));
        $show->field('version', __('Version'));
        $show->field('weight', __('Weight'));
        $show->field('volume', __('Volume'));
        $show->field('status', __('Status'));
        $show->field('is_delete', __('Is delete'));

        

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Sku());

        $form->number('prod_id', __('Prod id'));
        $form->keyValue('properties', __('Properties'));
        $form->decimal('ori_price', __('Ori price'));
        $form->decimal('price', __('Price'));
        $form->number('stocks', __('Stocks'));
        $form->number('actual_stocks', __('Actual stocks'));
        $form->text('party_code', __('Party code'));
        $form->text('model_id', __('Model id'));
        $form->image('pic', __('Pic'));
        $form->text('sku_name', __('Sku name'));
        $form->text('prod_name', __('Prod name'));
        $form->number('version', __('Version'));
        $form->decimal('weight', __('Weight'));
        $form->decimal('volume', __('Volume'));
        $form->switch('status', __('Status'))->default(1);
        $form->switch('is_delete', __('Is delete'));
        $form->hidden("org_id");

        // 数据保存后的权限调整
        $form->saving(function (Form $form) {
            $form->org_id = Admin::user()->org_id;
            $prod = \App\Models\Product::where("prod_id", $form->prod_id)->select(['category_id'])->first();
            // 返回一个简单response
            if(is_null($prod)) return response('商品不存在');
            
            $sysCate = \App\Libs\Utils::GetCateProp($prod->category_id);
            $props = $form->properties;
            //var_dump($props);
            //$props = json_decode($props);
            //var_dump($sysCate);
            foreach($props as $key=>$prop) {
                if(!isset($sysCate[$key][$prop])) {
                    return response('属性内容错误');
                }
            }

        });

        // 数据保存后的数据操作
        $form->saved(function (Form $form) {

        });

        return $form;
    }
}
