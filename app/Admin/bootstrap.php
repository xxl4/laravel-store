<?php
Nicelizhi\Admin\Form::forget(['map', 'editor']);
app('view')->prependNamespace('admin', resource_path('views/admin'));
