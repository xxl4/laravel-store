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

$api->version('v1', ["middleware"=>'api.auth'],function ($api) {
    $api->post('stock/add', 'App\Api\V1\Controllers\StockController@add');
    $api->post('stock/down', 'App\Api\V1\Controllers\StockController@down');

    # 商品操作
    $api->post('product/add', 'App\Api\V1\Controllers\ProductsController@add');
    $api->put('product/edit', 'App\Api\V1\Controllers\ProductsController@edit');
    $api->delete('product/delete', 'App\Api\V1\Controllers\ProductsController@delete');
    $api->get("product/view", 'App\Api\V1\Controllers\ProductsController@view');
    $api->get("product/search", 'App\Api\V1\Controllers\ProductsController@search');



});

$api->version('v2', function ($api) {
    $api->post('stock/add', 'App\Api\V1\Controllers\StockController@down');
    //$api->post('stock/down', 'App\Api\V1\Controllers\StockController@down');
});
