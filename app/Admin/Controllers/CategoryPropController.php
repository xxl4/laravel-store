<?php

namespace App\Admin\Controllers;

use App\Models\CategoryProp;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;

class CategoryPropController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '分类属性';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CategoryProp());

        $grid->column('id', __('Id'));
        $grid->column('category_id', __('Category id'))->filter()->sortable();
        $grid->column('prop_id', __('Prop id'))->filter()->sortable();
        $grid->column('prod_prop.prop_name', __('Prop Name'))->display(function($name) {
            return "<a href='/admin/prod-prop-values?prop_id=".$this->prop_id."'>".$name."</a>";
        });

        $grid->actions(function ($actions) {
            //$actions->add(new \App\Admin\Actions\CategoryProp\ViewProdPropValue);
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
        $show = new Show(CategoryProp::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_id', __('Category id'));
        $show->field('prop_id', __('Prop id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new CategoryProp());

        $form->number('category_id', __('Category id'));
        $form->number('prop_id', __('Prop id'));

        return $form;
    }
}
