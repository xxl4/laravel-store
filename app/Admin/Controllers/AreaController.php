<?php

namespace App\Admin\Controllers;

use App\Models\Area;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;
use Nicelizhi\Admin\Layout\Content;
use Nicelizhi\Admin\Tree;

class AreaController extends AdminController
{

    public function index(Content $content) {
        $tree = new Tree(new Area);

        return $content
            ->header('树状模型')
            ->body($tree);
    }

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Area';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Area());

        $grid->column('area_id', __('Area id'));
        $grid->column('area_name', __('Area name'));
        $grid->column('parent_id', __('Parent id'));
        $grid->column('level', __('Level'));

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
        $show = new Show(Area::findOrFail($id));

        $show->field('area_id', __('Area id'));
        $show->field('area_name', __('Area name'));
        $show->field('parent_id', __('Parent id'));
        $show->field('level', __('Level'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Area());

        $form->number('area_id', __('Area id'));
        $form->text('area_name', __('Area name'));
        $form->number('parent_id', __('Parent id'));
        $form->number('level', __('Level'));

        return $form;
    }
}
