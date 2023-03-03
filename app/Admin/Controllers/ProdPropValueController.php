<?php

namespace App\Admin\Controllers;

use App\Models\ProdPropValue;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;

class ProdPropValueController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '属性值';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProdPropValue());

        $grid->column('value_id', __('Value id'));
        $grid->column('prop_value', __('Prop value'));
        $grid->column('prop_id', __('Prop id'))->filter();

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
        $show = new Show(ProdPropValue::findOrFail($id));

        $show->field('value_id', __('Value id'));
        $show->field('prop_value', __('Prop value'));
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
        $form = new Form(new ProdPropValue());

        $form->text('prop_value', __('Prop value'));
        $form->number('prop_id', __('Prop id'));

        return $form;
    }
}
