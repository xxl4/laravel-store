<?php

namespace App\Admin\Controllers;

use App\Models\ProdProp;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;

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

        $grid->column('prop_id', __('Prop id'));
        $grid->column('prop_name', __('Prop name'));
        $grid->column('rule', __('Rule'));
        $grid->column('shop_id', __('Shop id'));

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
