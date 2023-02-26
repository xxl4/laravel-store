<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;
use Nicelizhi\Admin\Facades\Admin;
use App\Enums\ProductsEnableEnum;
use App\Libs\Utils;

class ProductsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '商品';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        //$grid->column('user_id', __('User id'));
        $grid->column('name', __('Name'));
        $grid->column('code', __('Code'));
        $grid->column('enable', __('Enable'))->filter(ProductsEnableEnum::getAll())->editable("select", ProductsEnableEnum::getAll());
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        $uid = Admin::user()->id;
        $organization_id = Utils::getOrganizationID($uid);

        $grid->model()->where("organization_id", $organization_id);
        $grid->model()->orderBy("id", "desc");
        $grid->filter(function($filter){
            $filter->scope('enable_0', '仓库中')->where('enable', ProductsEnableEnum::Enable_0);
            $filter->scope('enable_1', '在线')->where('enable', ProductsEnableEnum::Enable_1);
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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('name', __('Name'));
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
        $form = new Form(new Product());

        $form->hidden('user_id', __('User id'))->default(Admin::user()->id);
        $form->text('name', __('Name'));
        $form->text('code', __('Code'));

        return $form;
    }
}
