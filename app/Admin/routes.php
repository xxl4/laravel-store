<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('configs', ConfigController::class);

    $router->resource('organizations', OrganizationController::class);
    $router->resource('organization-users', OrganizationUserController::class);

    // 订单
    $router->resource('orders', OrdersController::class);

    // 商品
    $router->resource('products', ProductsController::class);

});
