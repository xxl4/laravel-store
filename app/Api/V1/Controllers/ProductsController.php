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
 * stock resource representation
 * @Resource("Stock", uri="/stock")
 */
class ProductsController extends Controller {
    use Helpers;

    /*
     * 添加商品
     * @Versions({"v1"})
     * @Request()
     * @Response()
    */
    public function add(Request $request) {

    }

    /*
     * 编辑商品
     * @Versions({"v1"})
     * @Request()
     * @Response()
    */
    public function edit(Request $request) {

    }

    /*
     * 商品删除
     * @Versions({"v1"})
     * @Request()
     * @Response()
    */
    public function delete(Request $request) {

    }

        /*
     * 商品查看
     * @Versions({"v1"})
     * @Request()
     * @Response()
    */
    public function view(Request $request) {

    }

}