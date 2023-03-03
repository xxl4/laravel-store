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
 * Store resource representation
 * @Resource("Store", uri="/store")
 */
class OrderController extends Controller {

    /**
     * 区域内容
     * 
     */
    public function area(Request $request) {
        $area_id = $request->input("area_id"); // 默认0 开头
        $items = \App\Models\Area::where("parent_id", $area_id)->select(["area_id","area_name"])->get();
        $ret = [
            'items'=>$items
        ];
        return Utils::ApiResponse($ret);
    }
}