<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '客户';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('user_id', __('User id'));
        $grid->column('nick_name', __('Nick name'));
        $grid->column('real_name', __('Real name'));
        $grid->column('user_mail', __('User mail'));
        $grid->column('login_password', __('Login password'));
        $grid->column('pay_password', __('Pay password'));
        $grid->column('user_mobile', __('User mobile'));
        $grid->column('modify_time', __('Modify time'));
        $grid->column('user_regtime', __('User regtime'));
        $grid->column('user_regip', __('User regip'));
        $grid->column('user_lasttime', __('User lasttime'));
        $grid->column('user_lastip', __('User lastip'));
        $grid->column('user_memo', __('User memo'));
        $grid->column('sex', __('Sex'));
        $grid->column('birth_date', __('Birth date'));
        $grid->column('pic', __('Pic'));
        $grid->column('status', __('Status'));
        $grid->column('score', __('Score'));

        $grid->model()->orderBy("user_id","DESC");

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
        $show = new Show(User::findOrFail($id));

        $show->field('user_id', __('User id'));
        $show->field('nick_name', __('Nick name'));
        $show->field('real_name', __('Real name'));
        $show->field('user_mail', __('User mail'));
        $show->field('login_password', __('Login password'));
        $show->field('pay_password', __('Pay password'));
        $show->field('user_mobile', __('User mobile'));
        $show->field('modify_time', __('Modify time'));
        $show->field('user_regtime', __('User regtime'));
        $show->field('user_regip', __('User regip'));
        $show->field('user_lasttime', __('User lasttime'));
        $show->field('user_lastip', __('User lastip'));
        $show->field('user_memo', __('User memo'));
        $show->field('sex', __('Sex'));
        $show->field('birth_date', __('Birth date'));
        $show->field('pic', __('Pic'));
        $show->field('status', __('Status'));
        $show->field('score', __('Score'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User());

        $form->text('nick_name', __('Nick name'));
        $form->text('real_name', __('Real name'));
        $form->text('user_mail', __('User mail'));
        $form->text('login_password', __('Login password'));
        $form->text('pay_password', __('Pay password'));
        $form->text('user_mobile', __('User mobile'));
        $form->text('user_regip', __('User regip'));
        $form->datetime('user_lasttime', __('User lasttime'))->default(date('Y-m-d H:i:s'));
        $form->text('user_lastip', __('User lastip'));
        $form->text('user_memo', __('User memo'));
        $form->text('sex', __('Sex'))->default('M');
        $form->text('birth_date', __('Birth date'));
        $form->image('pic', __('Pic'));
        $form->number('status', __('Status'))->default(1);
        $form->number('score', __('Score'));

        return $form;
    }
}
