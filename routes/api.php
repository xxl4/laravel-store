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

    # 商品操作
    $api->post('product/add', 'App\Api\V1\Controllers\ProductsController@add');
    $api->put('product/edit', 'App\Api\V1\Controllers\ProductsController@edit');
    $api->delete('product/delete', 'App\Api\V1\Controllers\ProductsController@delete');
    $api->get("product/get", 'App\Api\V1\Controllers\ProductsController@get');
    $api->get("product/lists", 'App\Api\V1\Controllers\ProductsController@get');
    $api->get("product/search", 'App\Api\V1\Controllers\ProductsController@search');

    #系统
    $api->get("store/area", 'App\Api\V1\Controllers\StoreController@area');



});

$api->version('v2',["prefix"=>"api/v2","middleware"=>'api.auth'], function ($api) {
    $api->post('stock/add', 'App\Api\V1\Controllers\StockController@down');
    //$api->post('stock/down', 'App\Api\V1\Controllers\StockController@down');
});
