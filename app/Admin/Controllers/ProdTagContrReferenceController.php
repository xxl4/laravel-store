<?php

namespace App\Admin\Controllers;

use App\Models\ProdTagReference;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;

class ProdTagContrReferenceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '标签关联';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProdTagReference());

        $grid->column('reference_id', __('Reference id'));
        $grid->column('shop_id', __('Shop id'));
        $grid->column('tag_id', __('Tag id'))->filter();
        $grid->column('prod.prod_name', __('Prod id'))->limit(30)->width(260);
        $grid->column('status')->bool(['1' => true, '0' => false]);
        $grid->column('create_time', __('Create time'));

        $grid->model()->orderBy("reference_id","desc");

        $grid->actions(function ($actions) {

            // 去掉删除
            //$actions->disableDelete();
        
            // 去掉编辑
            $actions->disableEdit();
        
            // 去掉查看
            $actions->disableView();
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
        $show = new Show(ProdTagReference::findOrFail($id));

        $show->field('reference_id', __('Reference id'));
        $show->field('shop_id', __('Shop id'));
        $show->field('tag_id', __('Tag id'));
        $show->field('prod_id', __('Prod id'));
        $show->field('status', __('Status'));
        $show->field('create_time', __('Create time'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProdTagReference());

        $form->number('shop_id', __('Shop id'));
        $form->number('tag_id', __('Tag id'));
        $form->number('prod_id', __('Prod id'));
        $form->switch('status', __('Status'));
        $form->datetime('create_time', __('Create time'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
