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

        $data = $request->all();

        //todo save data into db

        $product = \App\Models\Product::where("organization_id", $this->org->id)->where("outer_id", $data['outer_id'])->first();
        if(!is_null($product)) {
            return Utils::ApiResponse([], "Duplication of goods", 400);
        }

        //todo check props 类型

        $product = new \App\Models\Product($data);
        $product->user_id = $this->org->user_id;
        $product->organization_id = $this->org->id;
        $product->code = date("YmdHis").mt_rand(1000000000,9999999999);
        $product->save();

        $ret = [
            "product_id" => $product->id
        ];

        //response data to client
        return Utils::ApiResponse($ret);
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
        $data = $request->all();
        
        $ret = [
            "product_id" => $product->id
        ];

        return Utils::ApiResponse($ret);
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
     * @Get("/lists")
    */
    public function get(Request $request) {
        $product_id = $request->input("product_id");
        $cid = $request->input("cid");
        $num = $request->input('num');
        $page = $request->input('page');

        $model = \App\Models\Product::select("*");
        if(!empty($product_id)) {
            $model->where("prod_id", $product_id);
        }
        if(!empty($cid)) {
            $model->where("category_id", $cid);
        }
        //var_dump($model);
        $total = $model->count();
        $items = $model->offset($page * $num)->limit($num)->get();

        
        $ret = [
            "items"=>$items,
            "total" => $total,
            'request'=> $request->all()
        ];
        return Utils::ApiResponse($ret);
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