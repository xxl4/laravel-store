<?php

namespace App\Admin\Controllers;

use App\Models\ProdOuter;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;

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
        $grid->column('prod_id', __('Prod id'));
        $grid->column('outer_id', __('Outer id'));
        $grid->column('context', __('Context'));
        $grid->column('shop_type', __('Shop type'));
        $grid->column('shop_id', __('Shop id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
