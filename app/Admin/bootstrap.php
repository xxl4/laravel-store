<?php
use App\Admin\Extensions\WangEditor;
use Nicelizhi\Admin\Form;

Nicelizhi\Admin\Form::forget(['map', 'editor']);
//app('view')->prependNamespace('admin', resource_path('views/admin'));
Form::extend('editor', WangEditor::class);
