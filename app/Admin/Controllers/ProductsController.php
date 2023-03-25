<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use App\Models\Category;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;
use Nicelizhi\Admin\Widgets\Table;
use Nicelizhi\Admin\Facades\Admin;
use App\Admin\Actions\Product\Replicate;
use App\Admin\Actions\Product\AddSku;
use App\Admin\Actions\Product\BatchReplicate;
use App\Admin\Actions\Product\BatchAddTag;
use App\Admin\Actions\Product\BatchUploadOuterShop;
use App\Admin\Actions\Product\BatchDown;
use App\Admin\Actions\Product\BatchOnline;
use App\Admin\Actions\Product\BatchDownAndDelete;
use App\Admin\Actions\Product\BatchEdit;
use App\Admin\Actions\Product\BatchSyncQty;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Nicelizhi\Admin\Layout\Content;

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

        $grid->column('prod_id', __('Prod id'))->copyable()->sortable()->filter();
        $grid->column('prod_name', __('Prod name'))->expand(function ($model) {

            $skus = $model->sku()->take(10)->orderBy("sku_id","desc")->get()->map(function ($sku) {
                return $sku->only(['sku_id', 'sku_name', 'price','actual_stocks']);
            });

            return new Table(['SKU ID', 'SKU名称','属性', '实际库存'], $skus->toArray());

        })->filter();
        $grid->column('shop_id', __('Shop id'))->expand(function ($model) {

            $outers = $model->outer()->take(10)->orderBy("id","desc")->get()->map(function ($outer) {
                return $outer->only(['shop_id', 'shop_type','outer_id', 'created_at','updated_at']);
            });
            return new Table(['店铺ID','类型', '外部ID','添加时间','更新时间'], $outers->toArray());

        })->sortable()->filter(\App\Libs\Utils::getOrgStores(Admin::user()->org_id));
        $grid->column('ori_price', __('Ori price'))->sortable()->filter();
        $grid->column('price', __('Price'))->sortable()->filter();
        $grid->column('brief', __('Brief'))->limit(20);
        $grid->column('content', __('Content'))->hide();
        $grid->column('pic', __('Pic'))->hide();
        $grid->column('imgs', __('Imgs'))->hide();
        $grid->column('status')->bool(['1' => true, '0' => false])->sortable()->filter();
        $grid->column('category_id', __('Category id'))->copyable()->filter();
        //$grid->column('sold_num', __('Sold num'))->filter();
        //$grid->column('total_stocks', __('Total stocks'))->filter();
        //$grid->column('delivery_mode', __('Delivery mode'));
        //$grid->column('delivery_template_id', __('Delivery template id'));
        $grid->column('create_time', __('Create time'));
        $grid->column('update_time', __('Update time'));
        $grid->column('putaway_time', __('Putaway time'));
        $grid->column('version', __('Version'))->filter();

        $grid->model()->where("org_id", Admin::user()->org_id);

        $grid->model()->orderBy("prod_id", "DESC");

        $grid->filter(function($filter){

            // 去掉默认的id过滤器
            $filter->disableIdFilter();
            $items = \App\Libs\Utils::getOrgStores(Admin::user()->org_id);
            foreach($items as $key=>$item) {
                $filter->scope('shop_type_'.$key, "查看".$item)->where('shop_id', $key);
            }
            
        
        });

        $grid->actions(function ($actions) {
            $actions->add(new Replicate);
            $actions->add(new AddSku);
        });

        $grid->batchActions(function ($batch) {
            $batch->add(new BatchReplicate());
            $batch->add(new BatchAddTag());
            // 批量上传到第三方平台
            $batch->add(new BatchUploadOuterShop());
            // 批量上架
            $batch->add(new BatchOnline());
            // 批量下架
            $batch->add(new BatchDown());

            $batch->add(new BatchDownAndDelete());

            $batch->add(new BatchEdit());

            $batch->add(new BatchSyncQty());

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
        //$show->field('sold_num', __('Sold num'));
        //$show->field('total_stocks', __('Total stocks'));
        //$show->field('delivery_mode', __('Delivery mode'));
        //$show->field('delivery_template_id', __('Delivery template id'));
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
        /*
        $form->number('prod_id', __('Prod id'));
        $form->text('prod_name', __('Prod name'));
        $form->number('shop_id', __('Shop id'));
        $form->decimal('ori_price', __('Ori price'))->default(0.00);
        $form->decimal('price', __('Price'));
        $form->text('brief', __('Brief'));
        $form->editor('content', __('Content'));
        $form->image('pic', __('Pic'))->uniqueName();
        $form->image('imgs', __('Imgs'))->uniqueName();
        $form->number('status', __('Status'));
        $form->number('category_id', __('Category id'));
        $form->number('sold_num', __('Sold num'));
        $form->number('total_stocks', __('Total stocks'));
        $form->text('delivery_mode', __('Delivery mode'));
        $form->number('delivery_template_id', __('Delivery template id'));
        $form->datetime('update_time', __('Update time'))->default(date('Y-m-d H:i:s'));
        $form->datetime('putaway_time', __('Putaway time'))->default(date('Y-m-d H:i:s'));
        $form->hidden('version', __('Version'));
        */

        $form->tab('分类', function ($form) {
            if($form->isEditing()) {
                //$form->select('shop_id', __('Shop id'))->options(\App\Libs\Utils::getOrgStores(Admin::user()->org_id))->load('first_cat', '/admin/categories/category_api_data');
                $form->select('first_cat', __('First cat'))->options(function($id){
                    $category = Category::where("category_id",$id)->select(["category_id","category_name"])->first();
                    if($category) {
                        return [$category->category_id => $category->category_name];
                    }else{
                        return \App\Models\Category::where("shop_id", $this->shop_id)->where("parent_id",0)->pluck("category_name","category_id");
                    } 
                })->load('second_cat', '/admin/categories/category_api_data2');
                $form->select("second_cat", __('Second cat'))->options(function($id){
                    $category = Category::where("category_id",$id)->select(["category_id","category_name"])->first();
                    if($category) return [$category->category_id => $category->category_name];
                })->load("third_cat", '/admin/categories/category_api_data2');
                $form->select("third_cat" , __('Third cat'))->options(function($id){
                    $category = Category::where("category_id",$id)->select(["category_id","category_name"])->first();
                    if($category) return [$category->category_id => $category->category_name];
                })->load("category_id", '/admin/categories/category_api_data2');
                $form->select("category_id" , __('Category id'))->options(function($id){
                    $category = Category::where("category_id",$id)->select(["category_id","category_name"])->first();
                    if($category) return [$category->category_id => $category->category_name];
                });
            }

            if($form->isCreating()) {
                $form->select('shop_id', __('Shop id'))->options(\App\Libs\Utils::getOrgStores(Admin::user()->org_id))->load('first_cat', '/admin/categories/category_api_data');
                $form->select('first_cat', __('Category id'))->load('second_cat', '/admin/categories/category_api_data2');
                $form->select("second_cat")->load("third_cat", '/admin/categories/category_api_data2');
                $form->select("third_cat")->load("category_id", '/admin/categories/category_api_data2');
                $form->select("category_id");
            }
            
        
        })->tab('基础信息', function ($form) {

            $form->hidden('prod_id', __('Prod id'));
            $form->hidden('org_id', __('Prod id'))->default(Admin::user()->org_id);
            $form->text('prod_name', __('Prod name'));
            //$form->decimal('ori_price', __('Ori price'))->default(0.00);
            $form->currency('ori_price',__('Ori price'))->symbol('￥');
            //$form->decimal('price', __('Price'));
            $form->currency('price', __('Price'))->symbol('￥');
            $form->text('brief', __('Brief'));

            $states = [
                '1'  => ['value' => 1, 'text' => '打开', 'color' => 'success'],
                '0' => ['value' => 0, 'text' => '关闭', 'color' => 'danger'],
            ];
            $form->switch('status', __('Status'))->states($states);
            //$form->hidden("status")->default(1);
        
        })->tab('商品图片', function($form){

            $form->image('pic', __('Pic'))->uniqueName();
            $form->multipleFile('video_attach',"视频")->pathColumn('file_path')->sortable()->uniqueName()->removable();
            $form->multipleFile('imgs_attach', '图片')->pathColumn('file_path')->sortable()->uniqueName()->removable();

        })->tab('商品详情', function($form) {
            $form->editor('content', __('Content'));
        })->tab(__('Sku'), function ($form) {

            $form->hasMany('sku', function ($form) {
                //if($form->isEditing()) {
                $form->keyValue('properties',__('Properties'));
                //}
                
                $form->currency('price',__('Price'))->symbol('￥');
                $form->text('stocks',__('Stocks'));
                $form->text('party_code',__('Party code'));
                $form->text('weight',__('Weight'));
                $form->text('volume',__('Volume'));
                $form->hidden('sku_org_id', __('Org id'))->default(Admin::user()->org_id);
            });
        });

        //
        $form->submitted(function (Form $form) {
            
        });

        //保存前回调
        $form->saving(function (Form $form) {
            $form->category_id = $form->third_cat;
            if(empty($form->category_id)) $form->category_id = $form->second_cat;
            //Log::info(json_encode($form));
            //Log::info($form->category_id);
        });
        

        return $form;
    }

    // 编辑商品的属性内容
    public function prod_edit($id, Content $content, Request $request) {
        if($request->isMethod('post')) {
            $values = $request->input("value");
            foreach($values as $key=>$value) {
                if(is_null($value)) continue;
                //var_dump($key,$value);
                $prop = \App\Models\ProdProperty::where("prod_id", $id)->where("name", $key)->first();
                if(is_null($prop)) $prop = new \App\Models\ProdProperty();
                $prop->prod_id = $id;
                $prop->name = $key;
                $prop->value = $value;
                $prop->save();
            }
            admin_toastr('您内容保存成功', 'success', ['timeOut' => 5000]);
            return back();
        }

        $prod = \App\Models\Product::where("prod_id", $id)->select(['category_id','prod_name'])->first();
        if(is_null($prod)) {
            // todo
        }
        $categoryProp = \App\Libs\Utils::GetCateProp($prod->category_id, $prod->shop_id);
        $categoryMoreProp = [];
        foreach($categoryProp as $key=>$prop) {
            $rule = \App\Models\ProdProp::where("prop_id", $key)->value("rule");
            $rule = json_decode($rule);
            //if($rule->property_type!="1") continue;
            $categoryMoreProp[$key]['name'] = $prop;
            
            $categoryMoreProp[$key]['rule']['required'] = $rule->required;
            $categoryMoreProp[$key]['rule']['type'] = $rule->type;
            $categoryMoreProp[$key]['rule']['property_type'] = $rule->property_type;
            $categoryMoreProp[$key]['prop_value'] = "";
            if($rule->type=="select") {
                $categoryMoreProp[$key]['prop_value'] = \App\Models\ProdPropValue::where("prop_id",$key)->pluck("prop_value","value_id");
            }
            if($rule->type=="multi_select") {
                $categoryMoreProp[$key]['prop_value'] = \App\Models\ProdPropValue::where("prop_id",$key)->pluck("prop_value","value_id");
            }
            

        }

        $ProdProperty = \App\Models\ProdProperty::where("prod_id", $id)->pluck("value","name")->toArray();

        //var_dump($categoryMoreProp,$ProdProperty);exit;

        return $content->title("商品编辑".$prod->prod_name)->view('admin.products.prop', compact('categoryMoreProp',"id","ProdProperty"));

        //return $content->title("商品编辑")->view("/admin/product/prop");
    }
}
