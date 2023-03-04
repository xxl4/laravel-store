<?php

namespace App\Admin\Controllers;

use App\Models\Config;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;
use Nicelizhi\Admin\Facades\Admin;
use Illuminate\Support\Facades\Cache;

class ConfigController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '配置中心';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Config());

        $grid->column('id', __('Id'))->filter();
        $grid->column('shop_id', __('Shop id'))->filter();
        $grid->column('user_id', __('User id'))->filter();
        $grid->column('type', __('Type'))->filter();
        $grid->column('code', __('Code'))->filter();
        $grid->column('value', __('Value'))->limit(100);
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        $uid = Admin::user()->id;

        $grid->model()->where("user_id", $uid);

        $grid->model()->orderBy("id", "desc");

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
        $show = new Show(Config::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('type', __('Type'));
        $show->field('code', __('Code'));
        $show->field('value', __('Value'));
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
        $form = new Form(new Config());

        $form->hidden('user_id', __('User id'))->default(Admin::user()->id);
        $form->select('shop_id', __('Shop id'))->options(\App\Models\OrganizationStore::where("organization_id",Admin::user()->org_id)->pluck("name","id"));
        $form->hidden('type', __('Type'))->default(Admin::user()->id);
        $form->text('code', __('Code'))->help("这些是系统配置需要的标签，请不要去做修改，谢谢");
        $form->textarea('value', __('Value'));

        $form->saving(function (Form $form){
            //Cache::delete(\App\Enums\CachePrefixEnum::CONFIG_SHOP_CODE.$form->model()->shop_id.'_'.$form->model()->code);
            \App\Libs\Utils::GetStoreConfig($form->model()->org_id, $form->model()->shop_id, $form->model()->code, true);
        });

        // 数据保存后的数据操作
        $form->saved(function (Form $form) {
            
            //Cache::put(\App\Enums\CachePrefixEnum::CONFIG_SHOP_CODE.$form->model()->shop_id.'_'.$form->model()->code, $form->model()->value);
            \App\Libs\Utils::GetStoreConfig($form->model()->org_id, $form->model()->shop_id, $form->model()->code);
        });

        return $form;
    }
}
