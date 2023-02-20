<?php
namespace App\Api\V1\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Libs\Utils;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\ProductAddRequest; 
use App\Http\Requests\ProductEditRequest; 
use App\Http\Requests\ProductDeleteRequest; 

/**
 * products resource representation
 * @Resource("products", uri="/products")
 */
class ProductsController extends Controller {
    use Helpers;

    private $user = null;// 用户
    private $org = null; //机构

    public function __construct() {
        //$this->org = app('Dingo\Api\Auth\Auth')->user();
        
        //$this->user = \Nicelizhi\Admin\Auth\Database\Administrator::where("id", $this->org->user_id)->first();
    }

    /*
     * 添加商品
     * @Versions({"v1"})
     * @Request("username=foo&password=bar", contentType="application/x-www-form-urlencoded")
     * @Response(200, body={"id": 10, "username": "foo"})
     * @POST("/add")
    */
    public function add(ProductAddRequest $request) {
        $this->org = app('Dingo\Api\Auth\Auth')->user();
        // The incoming request is valid...
 
        // Retrieve the validated input data...
        $validated = $request->validated();
        
    }

    /*
     * 编辑商品
     * @Versions({"v1"})
     * @Request("username=foo&password=bar", contentType="application/x-www-form-urlencoded")
     * @Response(200, body={"id": 10, "username": "foo"})
     * @Put("/edit")
    */
    public function edit(ProductEditRequest $request) {
        $validated = $request->validated();
    }

    /*
     * 商品删除
     * @Versions({"v1"})
     * @Request("username=foo&password=bar", contentType="application/x-www-form-urlencoded")
     * @Response(200, body={"id": 10, "username": "foo"})
     * @Delete("/delete")
    */
    public function delete(ProductDeleteRequest $request) {
        $validated = $request->validated();
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
     * @Request("product_id=111&cid=111", contentType="application/x-www-form-urlencoded")
     * @Response(200, body={"id": 10, "username": "foo"})
     * @Get("/search")
    */
    public function search(Request $request) {
        $product_id = $request->input("product_id");
        $cid = $request->input("cid");


    }

}