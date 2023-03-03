<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;
use Nicelizhi\Admin\Widgets\Table;
use Nicelizhi\Admin\Facades\Admin;
use App\Admin\Actions\Product\Replicate;
use App\Admin\Actions\Product\BatchReplicate;
use App\Admin\Actions\Product\BatchAddTag;
use App\Admin\Actions\Product\BatchUploadOuterShop;
use App\Admin\Actions\Product\BatchDown;
use App\Admin\Actions\Product\BatchOnline;

class ProductsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '产品';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('prod_id', __('Prod id'))->sortable()->filter();
        $grid->column('prod_name', __('Prod name'))->expand(function ($model) {

            $skus = $model->sku()->take(10)->orderBy("sku_id","desc")->get()->map(function ($sku) {
                return $sku->only(['sku_id', 'sku_name','properties', 'price','actual_stocks']);
            });
            return new Table(['SKU ID', 'SKU名称','属性', '销售价格','实际库存'], $skus->toArray());
        })->sortable()->filter();
        $grid->column('shop_id', __('Shop id'))->expand(function ($model) {

            $outers = $model->outer()->take(10)->orderBy("id","desc")->get()->map(function ($outer) {
                return $outer->only(['shop_id', 'shop_type','outer_id', 'created_at','updated_at']);
            });
            return new Table(['店铺ID','类型', '外部ID','添加时间','更新时间'], $outers->toArray());
        })->sortable()->filter();
        $grid->column('ori_price', __('Ori price'))->sortable()->filter();
        $grid->column('price', __('Price'))->sortable()->filter();
        $grid->column('brief', __('Brief'))->sortable()->filter();
        $grid->column('content', __('Content'))->hide();
        $grid->column('pic', __('Pic'))->hide();
        $grid->column('imgs', __('Imgs'))->hide();
        $grid->column('status')->bool(['1' => true, '0' => false])->sortable()->filter();
        $grid->column('category_id', __('Category id'));
        $grid->column('sold_num', __('Sold num'));
        $grid->column('total_stocks', __('Total stocks'));
        $grid->column('delivery_mode', __('Delivery mode'));
        $grid->column('delivery_template_id', __('Delivery template id'));
        $grid->column('create_time', __('Create time'));
        $grid->column('update_time', __('Update time'));
        $grid->column('putaway_time', __('Putaway time'));
        $grid->column('version', __('Version'));

        $grid->model()->where("org_id", Admin::user()->org_id);

        $grid->model()->orderBy("prod_id", "DESC");

        $grid->actions(function ($actions) {
            $actions->add(new Replicate);
        });

        $grid->batchActions(function ($batch) {
            $batch->add(new BatchReplicate());
            $batch->add(new BatchAddTag());
            // 批量上传到第三方平台
            $batch->add(new BatchUploadOuterShop());
            $batch->add(new BatchOnline());
            $batch->add(new BatchDown());

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

        $show->field('prod_id', __('Prod id'));
        $show->field('prod_name', __('Prod name'));
        $show->field('shop_id', __('Shop id'));
        $show->field('ori_price', __('Ori price'));
        $show->field('price', __('Price'));
        $show->field('brief', __('Brief'));
        $show->field('content', __('Content'));
        $show->field('pic', __('Pic'));
        $show->field('imgs', __('Imgs'));
        $show->field('status', __('Status'));
        $show->field('category_id', __('Category id'));
        $show->field('sold_num', __('Sold num'));
        $show->field('total_stocks', __('Total stocks'));
        $show->field('delivery_mode', __('Delivery mode'));
        $show->field('delivery_template_id', __('Delivery template id'));
        $show->field('create_time', __('Create time'));
        $show->field('update_time', __('Update time'));
        $show->field('putaway_time', __('Putaway time'));
        $show->field('version', __('Version'));

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

        $form->number('prod_id', __('Prod id'));
        $form->text('prod_name', __('Prod name'));
        $form->number('shop_id', __('Shop id'));
        $form->decimal('ori_price', __('Ori price'))->default(0.00);
        $form->decimal('price', __('Price'));
        $form->text('brief', __('Brief'));
        $form->textarea('content', __('Content'));
        $form->image('pic', __('Pic'));
        $form->multipleImage('imgs', __('Imgs'));
        $form->number('status', __('Status'));
        $form->number('category_id', __('Category id'));
        $form->number('sold_num', __('Sold num'));
        $form->number('total_stocks', __('Total stocks'));
        $form->text('delivery_mode', __('Delivery mode'));
        $form->number('delivery_template_id', __('Delivery template id'));
        $form->datetime('update_time', __('Update time'))->default(date('Y-m-d H:i:s'));
        $form->datetime('putaway_time', __('Putaway time'))->default(date('Y-m-d H:i:s'));
        $form->hidden('version', __('Version'));

        return $form;
    }
}
