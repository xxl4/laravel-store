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
 * Sku resource representation
 * @Resource("Skus", uri="/sku")
 */
class SkusController extends Controller {
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
        // The incoming request is valid...
 
        // Retrieve the validated input data...
        $validated = $request->validated();

        $data = $request->all();

        //验证商品是否存在
        $prod = \App\Models\Product::where("prod_id", $data['prod_id'])->select(['category_id'])->first();
        if(is_null($prod)) {
            return $this->response->error("商品内容不存在", 400);
        }

        $sysCate = $this->_getCateProp($prod->category_id);
        $props = $data['properties'];
        $props = json_decode($props);
        //var_dump($sysCate);
        foreach($props as $key=>$prop) {
            if(!isset($sysCate[$key][$prop])) {
                return $this->response->error("属性错误，请调整".$key, 500);
            }
        }

        //todo save data into db

        //todo check props 类型
        $data['org_id'] = $this->org->id;
        $data['stocks'] = 0;
        $sku =\App\Models\Sku::create($data);

        $ret = [
            "sku_id" => $sku->sku_id
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
    public function edit(ProductSkuEditRequest $request) {
        $validated = $request->validated();
        $data = $request->all();


        //验证商品是否存在
        $prod = \App\Models\Product::where("prod_id", $data['prod_id'])->select(['category_id'])->first();
        if(is_null($prod)) {
            return $this->response->error("商品内容不存在", 400);
        }

        $sysCate = $this->_getCateProp($prod->category_id);
        $props = $data['properties'];
        $props = json_decode($props);
        //var_dump($sysCate);
        foreach($props as $key=>$prop) {
            if(!isset($sysCate[$key][$prop])) {
                return $this->response->error("属性错误，请调整".$key, 500);
            }
        }
        \App\Models\Sku::where("sku_id",$data['sku_id'])->update($data);
        \App\Models\Sku::where("sku_id",$data['sku_id'])->increment('version');
        
        $ret = [
            "sku_id" => $data['sku_id']
        ];

        Cache::delete(\App\Enums\CachePrefixEnum::SKU_ID.$data['sku_id']); //清理缓存

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
        $this->org = app('Dingo\Api\Auth\Auth')->user();
        $validated = $request->validated();
        $data = $request->all();
        $item = \App\Models\Sku::where("org_id", $this->org->id)->where("sku_id", $data['sku_id'])->first();
        if(is_null($item)) {
            return $this->response->error("您需要删除的商品不存在，请确认", 400);
        }

        \App\Models\Sku::where("sku_id", $item->sku_id)->update(['is_delete'=>1]);

        $ret = [
        ];

        return Utils::ApiResponse($ret);

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
            'sku_id'   => 'int',
            'prod_id'   => 'int',
        ]);

        // 接收数据
        $prod_id = $request->input("prod_id");
        $sku_id = $request->input("sku_id");
        $num = $request->input('num');
        $page = $request->input('page');

        // 数据拼接
        $model = \App\Models\Sku::select("*");
        if(!empty($prod_id)) {
            $model->where("prod_id", $prod_id);
        }
        if(!empty($sku_id)) {
            $model->where("sku_id", $sku_id);
        }
        $model->where("org_id", $this->org->id);
        //var_dump($model);
        $total = $model->count();
        $items = $model->offset($page * $num)->limit($num)->get();

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

    private function _getCateProp($cid) {
        $ret = Cache::get(\App\Enums\CachePrefixEnum::CATEGORY_PROP_ID.$cid);
        if(empty($ret)) {
            $items = \App\Models\CategoryProp::where("category_id", $cid)->with("prop_value")->select(['prop_id'])->get();
            //var_dump($items->prop_value);exit;
            $ret = [];
            foreach($items as $key=>$item) {
                foreach($item->prop_value as $kk=>$value) {
                    $ret[$value->prop_id][$value->value_id] = $value->value_id;
                }
                
            }
            Cache::put(\App\Enums\CachePrefixEnum::CATEGORY_PROP_ID.$cid, $ret);
        }
        return $ret;
        
    }

}