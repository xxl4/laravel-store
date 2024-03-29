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
    $router->resource('order-items', OrderItmesController::class);

    //售后
    $router->resource('order-refunds', OrderRefundsController::class);

    // 商品
    $router->any('products/prod_edit/{id}', "ProductsController@prod_edit")->name('admin.products.edit_prod');
    $router->post('products/prod_edit/{id}', "ProductsController@prod_edit");
    //$router->get('products_edit', ProductsEditController::class);
    $router->resource('products', ProductsController::class);
    $router->resource('prod-props', ProdPropController::class);
    $router->resource('prod-prop-values', ProdPropValueController::class);
    $router->resource('brands', BrandController::class);
    $router->resource('prod-tags', ProdTagController::class);
    $router->resource('prod-tag-references', ProdTagContrReferenceController::class);
    $router->resource('skus', SkuController::class);
    $router->resource('prod-outers', ProdOuterController::class);

    //商品分类
    $router->any('categories/category_api_data', "CategoryController@category_api_data");
    $router->any('categories/category_api_data2', "CategoryController@category_api_data2");
    $router->resource('categories', CategoryController::class);
    $router->resource('category-props', CategoryPropController::class);

    //消息
    $router->get('/messages', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    $router->get('/messages/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    $router->post('/messages', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    $router->get('/messages/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    $router->put('/messages/{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);

    //客户
    $router->resource('users', UserController::class);
    $router->resource('user-addrs', UserAddrController::class);

    //系统
    $router->resource('areas', AreaController::class);
    $router->resource('deliveries', DeliveryController::class);
    $router->resource('notices', NoticeController::class);

    //文档内容
    $router->resource('attach-files', AttachFileController::class);

});
