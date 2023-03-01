<?php
use Illuminate\Http\Request;
use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', ["prefix"=>"api/v1","middleware"=>'api.auth'],function ($api) {
    $api->post('stock/add', 'App\Api\V1\Controllers\StockController@add');
    $api->post('stock/down', 'App\Api\V1\Controllers\StockController@down');

    # 分类操作
    $api->post('category/add', 'App\Api\V1\Controllers\CategoryController@add');
    $api->put('category/edit', 'App\Api\V1\Controllers\CategoryController@edit');
    $api->delete('category/delete', 'App\Api\V1\Controllers\CategoryController@delete');
    $api->get('category/prop', 'App\Api\V1\Controllers\CategoryController@prop');
    $api->get('category/get', 'App\Api\V1\Controllers\CategoryController@get');
    $api->get('category/lists', 'App\Api\V1\Controllers\CategoryController@get');

    # 商品操作
    $api->post('product/add', 'App\Api\V1\Controllers\ProductsController@add');
    $api->put('product/edit', 'App\Api\V1\Controllers\ProductsController@edit');
    $api->delete('product/delete', 'App\Api\V1\Controllers\ProductsController@delete');
    $api->get("product/get", 'App\Api\V1\Controllers\ProductsController@get');
    $api->get("product/lists", 'App\Api\V1\Controllers\ProductsController@get');
    $api->get("product/search", 'App\Api\V1\Controllers\ProductsController@search');

    # 商品SKU
    $api->post('sku/add', 'App\Api\V1\Controllers\SkusController@add');
    $api->put('sku/edit', 'App\Api\V1\Controllers\SkusController@edit');
    $api->delete('sku/delete', 'App\Api\V1\Controllers\SkusController@delete');
    $api->get("sku/get", 'App\Api\V1\Controllers\SkusController@get');

    # 订单
    $api->post('order/add', 'App\Api\V1\Controllers\SkusController@add');
    $api->put('order/edit', 'App\Api\V1\Controllers\SkusController@edit');
    $api->delete('order/delete', 'App\Api\V1\Controllers\SkusController@delete');
    $api->get("order/get", 'App\Api\V1\Controllers\SkusController@get');

    # 售后
    $api->post('refund/add', 'App\Api\V1\Controllers\SkusController@add');
    $api->put('refund/edit', 'App\Api\V1\Controllers\SkusController@edit');
    $api->delete('refund/delete', 'App\Api\V1\Controllers\SkusController@delete');
    $api->get("refund/get", 'App\Api\V1\Controllers\SkusController@get');

    # 用户
    $api->post('users/add', 'App\Api\V1\Controllers\SkusController@add');
    $api->put('users/edit', 'App\Api\V1\Controllers\SkusController@edit');
    $api->delete('users/delete', 'App\Api\V1\Controllers\SkusController@delete');
    $api->get("users/get", 'App\Api\V1\Controllers\SkusController@get');

    #发货
    $api->post('shipping/add', 'App\Api\V1\Controllers\ShippingController@add');

    #系统
    $api->get("store/area", 'App\Api\V1\Controllers\StoreController@area');



});

$api->version('v2',["prefix"=>"api/v2","middleware"=>'api.auth'], function ($api) {
    $api->post('stock/add', 'App\Api\V1\Controllers\StockController@down');
    //$api->post('stock/down', 'App\Api\V1\Controllers\StockController@down');
});
