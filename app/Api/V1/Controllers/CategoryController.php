<?php
namespace App\Api\V1\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Libs\Utils;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\ProductSkuAddRequest; 
use App\Http\Requests\ProductSkuEditRequest; 
use App\Http\Requests\ProductSkuDeleteRequest; 
use Dingo\Api\Auth\Auth;

/**
 * category resource representation
 * @Resource("category", uri="/category")
 */
class CategoryController extends Controller {
    use Helpers;

    private $user = null;// 用户
    private $org = null; //机构

    /*
     * 添加商品
     * @Versions({"v1"})
     * @Request("username=foo&password=bar", contentType="application/x-www-form-urlencoded")
     * @Response(200, body={"id": 10, "username": "foo"})
     * @POST("/add")
    */
    public function add(ProductSkuAddRequest $request) {
        $this->org = app('Dingo\Api\Auth\Auth')->user();

        $ret = [];
        return Utils::ApiResponse($ret);
    }

    /*
     * 编辑商品
     * @Versions({"v1"})
     * @Request("username=foo&password=bar", contentType="application/x-www-form-urlencoded")
     * @Response(200, body={"id": 10, "username": "foo"})
     * @Put("/edit")
    */
    public function edit(ProductSkuEditRequest $request) {
        $validated = $request->validated();
        $data = $request->all();
        
        $ret = [

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
    public function delete(ProductSkuDeleteRequest $request) {
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
        $this->org = app('Dingo\Api\Auth\Auth')->user();
        //$this->org = $user;
        // 验证
        $validated = $request->validate([
            'num'   => 'required|int|max:100',
            'page'   => 'required|int',
            'cid'   => 'int',
        ]);

        $data = $request->all();

        // 接收数据
        $cid = $request->input("cid");
        $page = $request->input("page");
        $num = $request->input("num");

        

        // 数据拼接
        $model = \App\Models\Category::select("*");
        if(!empty($cid)) {
            $model->where("category_id", $cid);
        }
        //$model->where("org_id", $this->org->id);
        //var_dump($model);
        $total = $model->count();
        $items = $model->with("category_prop")->offset($page * $num)->limit($num)->first();

        //数据返回
        $ret = [
            "items"=>$items,
            "total" => $total,
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

    public function prop(Request $request) {
        $this->org = app('Dingo\Api\Auth\Auth')->user();
        $validated = $request->validate([
            'cid'   => 'int|required',
        ]);

        $cid = $request->input('cid');

        $category = \App\Models\Category::where("category_id", $cid)->first();
        if(is_null($category)) {
            return $this->response->error("分类ID错误，请调整".$cid, 500); 
        }

        $ret = \App\Libs\Utils::GetCatePropValue($cid);

        return Utils::ApiResponse($ret);
    }

}