<?php
namespace App\Api\V1\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Libs\Utils;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\UserGetRequest;
use App\Http\Requests\UserAddRequest;

/**
 * User resource representation
 * @Resource("User", uri="/user")
 */
class UserController extends Controller {

    /**
     * 客户获取
     */
    public function get(UserGetRequest $request) {
        $this->org = app('Dingo\Api\Auth\Auth')->user();
        $validated = $request->validated();
    }

    public function add(UserAddRequest $request) {

    }
}