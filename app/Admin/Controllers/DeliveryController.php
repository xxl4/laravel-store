<?php

namespace App\Admin\Controllers;

use App\Models\Delivery;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;
use Nicelizhi\Admin\Facades\Admin;

class DeliveryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '物流';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Delivery());

        $grid->column('dvy_id', __('Dvy id'));
        $grid->column('dvy_name', __('Dvy name'));
        $grid->column('code', __('Code'));
        $grid->column('shop_type', __('Shop type'))->filter();
        //$grid->column('company_home_url', __('Company home url'));
        $grid->column('rec_time', __('Rec time'));
        $grid->column('modify_time', __('Modify time'));
        //$grid->column('query_url', __('Query url'));
        
        $grid->model()->orderBy("dvy_id", "desc");

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
        $show = new Show(Delivery::findOrFail($id));

        $show->field('dvy_id', __('Dvy id'));
        $show->field('dvy_name', __('Dvy name'));
        $show->field('company_home_url', __('Company home url'));
        $show->field('rec_time', __('Rec time'));
        $show->field('modify_time', __('Modify time'));
        $show->field('query_url', __('Query url'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Delivery());

        $form->text('dvy_name', __('Dvy name'));
        $form->text('company_home_url', __('Company home url'));
        $form->text('query_url', __('Query url'));

        return $form;
    }
}
