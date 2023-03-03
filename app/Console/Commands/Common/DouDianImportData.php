<?php

namespace App\Console\Commands\Common;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
class DouDianImportData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'common:doudian:import:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '抖店内容导入';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //$this->createToken();exit;
        $doudian_token_obj = Cache::get("doudian_token_obj");
        $access_token = unserialize($doudian_token_obj);
        //var_dump($access_token);exit;
        //
        $store = \App\Models\OrganizationStore::where("id", 3)->first();
        $req = new \ShopGetShopCategoryRequest();
        $p = new \ShopGetShopCategoryParam();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $p->cid = 0;
        $req->setParam($p);
        $resp = $req->execute($access_token);
        var_dump($resp, $req);
    }

    public function createToken() {
        $store = \App\Models\OrganizationStore::where("id", 3)->first();
        $req = new \TokenCreateRequest();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $param = new \TokenCreateParam();
        $param->code = "";
        $param->grant_type="authorization_self";
        $param->shop_id=$store->shop_id;
        $req->setParam($param);
        $resp = $req->execute("");
        var_dump($resp);
        if($resp->code=10000) {
            $access_token = \AccessToken::wrap($resp);
            $access_token = serialize($access_token);
            Cache::put("doudian_token_obj", $access_token);
            //var_dump($resp->data);
            Cache::put("doudian_access_token", $resp->data->access_token, $resp->data->expires_in);
            Cache::put("doudian_refresh_token", $resp->data->refresh_token,$resp->data->expires_in);
        }
    }
}
