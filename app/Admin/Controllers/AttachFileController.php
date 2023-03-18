<?php

namespace App\Admin\Controllers;

use App\Models\AttachFile;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;
use Nicelizhi\Admin\Facades\Admin;

class AttachFileController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'AttachFile';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new AttachFile());

        $grid->column('file_id', __('File id'));
        $grid->column('org_id', __('Org id'));
        $grid->column('file_path', __('File path'));
        $grid->column('file_type', __('File type'));
        $grid->column('file_size', __('File size'));
        $grid->column('upload_time', __('Upload time'));
        $grid->column('file_join_id', __('File join id'));
        $grid->column('file_join_type', __('File join type'));

        $grid->model()->orderBy("file_id","desc");
        $grid->model()->where("org_id", Admin::user()->org_id);

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
        $show = new Show(AttachFile::findOrFail($id));

        $show->field('file_id', __('File id'));
        $show->field('org_id', __('Org id'));
        $show->field('file_path', __('File path'));
        $show->field('file_type', __('File type'));
        $show->field('file_size', __('File size'));
        $show->field('upload_time', __('Upload time'));
        $show->field('file_join_id', __('File join id'));
        $show->field('file_join_type', __('File join type'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new AttachFile());

        $form->hidden('org_id', __('Org id'))->default(Admin::user()->org_id);
        $form->file('file_path', __('File path'));
        $form->hidden('file_type', __('File type'));
        $form->hidden('file_size', __('File size'));
        $form->hidden('file_join_id', __('File join id'))->default(0);
        $form->hidden('file_join_type', __('File join type'))->default(0);

        $form->saved(function (Form $form) {
            
        });

        return $form;
    }
}
