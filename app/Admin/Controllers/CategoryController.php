<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;
use Nicelizhi\Admin\Facades\Admin;
use App\Libs\Utils;
use Nicelizhi\Admin\Widgets\Table;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class CategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '分类';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category());

        $grid->column('id', __('Id'))->filter()->sortable()->display(function($id) {
            return "<a href='/admin/categories?parent_id=".$this->category_id."'>".$id."</a>";
        });
        //$grid->column('shop_id', __('Shop id'))->filter(\App\Libs\Utils::getOrgStores(Admin::user()->org_id))->sortable();
        $grid->column('parent_id', __('Parent id'))->filter()->sortable()->copyable();
        $grid->column('category_name', __('Category name'))->expand(function ($model) {

            $skus = $model->category_prop()->take(20)->get()->map(function ($sku) {
                return $sku->only(['id', 'prop_id']);
            });

            return new Table(['ID','属性ID'], $skus->toArray());

        })->sortable()->filter();
        $grid->column('icon', __('Icon'))->hide();
        $grid->column('pic', __('Pic'))->hide();
        $grid->column('seq', __('Seq'))->filter()->sortable()->editable();
        $grid->column('status')->bool(['1' => true, '0' => false])->sortable()->filter();
        $grid->column('rec_time', __('Rec time'))->hide();
        $grid->column('grade', __('Grade'))->filter()->sortable()->hide();
        $grid->column('update_time', __('Update time'))->hide();

        $org_id = Admin::user()->org_id;
        //$org_id = Utils::getOrganizationID($uid);
        $shop_ids = \App\Models\OrganizationStore::where("organization_id", $org_id)->select(["id"])->first();
        if(is_null($shop_ids)) {
            $grid->model()->where("shop_id", 0);
        }else{
            //$grid->model()->whereIN("shop_id", $shop_ids->toArray());
        }
        $grid->model()->orderBy("id", "asc");

        $grid->actions(function ($actions) {
            //$actions->add(new \App\Admin\Actions\Category\ProdProp);
        });

        $grid->filter(function($filter){
            // 去掉默认的id过滤器
            $filter->disableIdFilter();
            $items = \App\Libs\Utils::getOrgStores(Admin::user()->org_id);
            foreach($items as $key=>$item) {
                $filter->scope('shop_type_'.$key, "查看".$item)->where('shop_id', $key);
            } 
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
        $show = new Show(Category::findOrFail($id));

        //$cate = Category::findOrFail($id);
        //var_dump($cate->prop);

        $show->field('category_id', __('Category id'));
        $show->field('shop_id', __('Shop id'));
        $show->field('parent_id', __('Parent id'));
        $show->field('category_name', __('Category name'));
        $show->field('icon', __('Icon'));
        $show->field('pic', __('Pic'));
        $show->field('seq', __('Seq'));
        $show->field('status', __('Status'));
        $show->field('rec_time', __('Rec time'));
        $show->field('grade', __('Grade'));
        $show->field('update_time', __('Update time'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Category());
        $uid = Admin::user()->id;
        $org_id = Utils::getOrganizationID($uid);

        $form->select('shop_id', __('Shop id'))->options(\App\Models\OrganizationStore::where("organization_id",$org_id)->pluck("name","id"));
        $form->select('parent_id', __('Parent id'));
        $form->text('category_name', __('Category name'));
        $form->image('icon', __('Icon'));
        $form->image('pic', __('Pic'));
        $form->number('seq', __('Seq'));
        $form->hidden('status', __('Status'))->default(1);
        $form->hidden('grade', __('Grade'));

        return $form;
    }

    public function category_api_data(Request $request) {

        $q = $request->get('q');

        return \App\Models\Category::where('shop_id', $q)->where("parent_id",0)->get([DB::raw('category_id as id'), DB::raw('category_name as text')]);
    }

    public function category_api_data2(Request $request) {

        $q = $request->get('q');
        return \App\Models\Category::where('parent_id', $q)->get([DB::raw('category_id as id'), DB::raw('category_name as text')]);
        
    }
}
