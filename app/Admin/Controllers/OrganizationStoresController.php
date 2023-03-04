<?php

namespace App\Admin\Controllers;

use App\Models\OrganizationStore;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;
use Nicelizhi\Admin\Facades\Admin;
use App\Enums\StoreTypeEnum;
use App\Admin\Actions\OrgStore\TestConfig;
use App\Admin\Actions\OrgStore\StoreMoreConfig;
use App\Admin\Actions\OrgStore\StoreSyncCategory;

class OrganizationStoresController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '机构店铺';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new OrganizationStore());

        $grid->column('id', __('Id'));
        //$grid->column('organization_id', __('Organization id'));
        $grid->column('name', __('Name'));
        $grid->column('shop_id', __('Shop id'));
        $grid->column('shop_type', __('Shop type'))->editable("select", StoreTypeEnum::getAll());
        $grid->column('key', __('Key'));
        $grid->column('secret', __('Secret'))->limit(30);
        $grid->column('token', __('Token'))->limit(30);
        $grid->column('token2', __('Token Kefu'))->limit(30);
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        $grid->model()->where("organization_id", Admin::user()->org_id);

        $grid->model()->orderBy("id", "DESC");

        $grid->actions(function ($actions) {
            $actions->add(new TestConfig);
            $actions->add(new StoreSyncCategory);
            $actions->add(new StoreMoreConfig);
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
        $show = new Show(OrganizationStore::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('organization_id', __('Organization id'));
        $show->field('name', __('Name'));
        $show->field('shop_id', __('Shop id'));
        $show->field('shop_type', __('Shop type'));
        $show->field('config', __('Config'));
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
        $form = new Form(new OrganizationStore());

        $uid = Admin::user()->id;
        $organization = \App\Models\Organization::where("user_id", $uid)->select(["id"])->first();
        $form->hidden("organization_id")->default($organization->id);
        $form->text('name', __('Name'));
        $form->text('shop_id', __('Shop id'));
        $form->select('shop_type', __('Shop type'))->options(StoreTypeEnum::getAll());
        $form->text('key', __('Key'));
        $form->text('secret', __('Secret'));
        $form->text('token', __('Token'));
        $form->text('token2', __('Token Kefu'));
        /*
        $form->table('config', __('Config'), function($form){
            $form->text('key')->rules('required')->help("通过开发中心获取");
            $form->text('value')->rules('required')->help("通过开发中心获取");
            $form->text('desc')->rules('required')->help("通过开发中心获取");
            //$form->text('token2')->rules('required')->help("通过开发中心获取");
        });
        */

        return $form;
    }

    /**
     * 店铺配置内容测试
     */
    public function test(Request $request) {

    }
}
