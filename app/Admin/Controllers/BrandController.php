<?php

namespace App\Admin\Controllers;

use App\Models\Brand;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;
use Nicelizhi\Admin\Widgets\Table;

class BrandController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Brand';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Brand());

        $grid->column('brand_id', __('Brand id'));
        $grid->column('brand_name', __('Brand name'))->expand(function ($model) {

            $skus = $model->category()->take(20)->get()->map(function ($sku) {
                return $sku->only(['id', 'category_id']);
            });

            return new Table(['ID','分类ID'], $skus->toArray());

        });
        $grid->column('brand_pic', __('Brand pic'));
        $grid->column('user_id', __('User id'));
        $grid->column('memo', __('Memo'));
        $grid->column('seq', __('Seq'));
        $grid->column('status', __('Status'));
        $grid->column('brief', __('Brief'));
        $grid->column('content', __('Content'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('first_char', __('First char'));

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
        $show = new Show(Brand::findOrFail($id));

        $show->field('brand_id', __('Brand id'));
        $show->field('brand_name', __('Brand name'));
        $show->field('brand_pic', __('Brand pic'));
        $show->field('user_id', __('User id'));
        $show->field('memo', __('Memo'));
        $show->field('seq', __('Seq'));
        $show->field('status', __('Status'));
        $show->field('brief', __('Brief'));
        $show->field('content', __('Content'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('first_char', __('First char'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Brand());

        $form->text('brand_name', __('Brand name'));
        $form->text('brand_pic', __('Brand pic'));
        $form->text('user_id', __('User id'));
        $form->text('memo', __('Memo'));
        $form->number('seq', __('Seq'))->default(1);
        $form->number('status', __('Status'))->default(1);
        $form->text('brief', __('Brief'));
        $form->textarea('content', __('Content'));
        $form->text('first_char', __('First char'));

        return $form;
    }
}
