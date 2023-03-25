<?php

namespace App\Admin\Controllers;

use App\Models\ProdProp;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;
use Nicelizhi\Admin\Facades\Admin;
use Nicelizhi\Admin\Widgets\Table;

class ProdPropController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '属性';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProdProp());

        $grid->column('prop_id', __('Prop id'))->sortable()->filter();
        $grid->column('prop_name', __('Prop name'))->expand(function ($model) {

            $skus = $model->prop_value()->take(10)->get()->map(function ($sku) {
                return $sku->only(['value_id', 'prop_value']);
            });

            return new Table(['ID','属性'], $skus->toArray());

        });
        $grid->column('rule', __('Rule'))->display(function($t){
            return json_decode($t);
        });
        //$grid->column('shop_id', __('Shop id'))->hide();

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
        $show = new Show(ProdProp::findOrFail($id));

        $show->field('prop_id', __('Prop id'));
        $show->field('prop_name', __('Prop name'));
        $show->field('rule', __('Rule'));
        $show->field('shop_id', __('Shop id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProdProp());

        $form->text('prop_name', __('Prop name'));
        $form->switch('rule', __('Rule'));
        $form->number('shop_id', __('Shop id'));

        return $form;
    }
}
