<?php
namespace App\Api\V1\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Libs\Utils;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

/**
 * products resource representation
 * @Resource("products", uri="/products")
 */
class ProductsController extends Controller {
    use Helpers;

    /*
     * 添加商品
     * @Versions({"v1"})
     * @Request("username=foo&password=bar", contentType="application/x-www-form-urlencoded")
     * @Response(200, body={"id": 10, "username": "foo"})
     * @POST("/add")
    */
    public function add(Request $request) {
        $user = app('Dingo\Api\Auth\Auth')->user();
        
    }

    /*
     * 编辑商品
     * @Versions({"v1"})
     * @Request("username=foo&password=bar", contentType="application/x-www-form-urlencoded")
     * @Response(200, body={"id": 10, "username": "foo"})
     * @Put("/edit")
    */
    public function edit(Request $request) {

    }

    /*
     * 商品删除
     * @Versions({"v1"})
     * @Request("username=foo&password=bar", contentType="application/x-www-form-urlencoded")
     * @Response(200, body={"id": 10, "username": "foo"})
     * @Delete("/delete")
    */
    public function delete(Request $request) {

    }

    /*
     * 商品查看
     * @Versions({"v1"})
     * @Request("username=foo&password=bar", contentType="application/x-www-form-urlencoded")
     * @Response(200, body={"id": 10, "username": "foo"})
     * @Get("/view")
    */
    public function view(Request $request) {
        $product_id = $request->input("product_id");
        $cid = $request->input("cid");
    }

    /*
     * 商品查找
     * @Versions({"v1"})
     * @Request("username=foo&password=bar", contentType="application/x-www-form-urlencoded")
     * @Response(200, body={"id": 10, "username": "foo"})
     * @Get("/search")
    */
    public function search(Request $request) {
        $product_id = $request->input("product_id");
        $cid = $request->input("cid");


    }

}