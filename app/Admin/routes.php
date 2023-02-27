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

    //机构
    $router->any('organizations/secret', "OrganizationController@secret");
    //$router->get('form', OrganizationSecret::class);
    $router->resource('organizations', OrganizationController::class);
    $router->get('organization-users/users', "OrganizationUserController@getUser");
    $router->resource('organization-users', OrganizationUserController::class);
    $router->resource('organization-stores', OrganizationStoresController::class);


    // 订单
    $router->resource('orders', OrdersController::class);

    // 商品
    $router->resource('products', ProductsController::class);
    $router->resource('prod-props', ProdPropController::class);
    $router->resource('prod-prop-values', ProdPropValueController::class);
    $router->resource('brands', BrandController::class);

    //商品分类
    $router->resource('categories', CategoryController::class);
    $router->resource('category-props', CategoryPropController::class);

    //消息
    $router->get('/messages', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    $router->get('/messages/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    $router->post('/messages', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    $router->get('/messages/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    $router->put('/messages/{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);

});
