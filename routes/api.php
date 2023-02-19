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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'namespace'     => "\App\Http\Controllers\Jos",
    'middleware'    => ['web'],
], function (Router $router) {
    $router->any("v1/Jos/order/lists/{page}/{pagesize}", "OrderController@syncOrder");


});

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->post('stock/add', 'App\Api\V1\Controllers\StockController@add');
    $api->post('stock/down', 'App\Api\V1\Controllers\StockController@down');

    # 商品操作
    $api->post('product/add', 'App\Api\V1\Controllers\ProductsController@add');
    $api->put('product/edit', 'App\Api\V1\Controllers\ProductsController@edit');
    $api->delete('product/delete', 'App\Api\V1\Controllers\ProductsController@delete');

    

});

$api->version('v2', function ($api) {
    $api->post('stock/add', 'App\Api\V1\Controllers\StockController@down');
    //$api->post('stock/down', 'App\Api\V1\Controllers\StockController@down');
});
