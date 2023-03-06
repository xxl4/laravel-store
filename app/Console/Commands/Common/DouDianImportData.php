<?php

namespace App\Console\Commands\Common;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Artisan;
use App\Libs\Utils;
class DouDianImportData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'common:doudian:import:data {shop_id} {cid}';

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
        $cid = $this->argument('cid');
        $shop_id = $this->argument('shop_id');
        $this->info($cid);
        //$shop_id = 3;
        //$this->createToken();exit;
        $access_token = Utils::GetDoudianStoreToken($shop_id);
        $access_token = unserialize($access_token);
        //var_dump($access_token);exit;
        //
        $store = \App\Models\OrganizationStore::where("id", $shop_id)->first();
        $req = new \ShopGetShopCategoryRequest();
        $p = new \ShopGetShopCategoryParam();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $p->cid = $cid;
        $req->setParam($p);
        $resp = $req->execute($access_token);
        var_dump($resp, $req);
        if($resp->code=='10000') {
            $cache_key = "shop_category_".$p->cid;
            Cache::put($cache_key, json_encode($resp->data));
            $items = $resp->data;
            foreach($items as $key=>$item) {
                $category = \App\Models\Category::where("category_id", $item->id)->where("shop_id",$shop_id)->first();
                if(is_null($category)) $category = new \App\Models\Category();
                $category->category_id = $item->id;
                $category->shop_id = $shop_id;
                $category->parent_id = $item->parent_id;
                $category->category_name = $item->name;
                $category->status = 1;
                $category->seq = 1;
                $category->grade = $item->level;
                $category->save();
                if($item->enable==true && $item->is_leaf==false) {
                    Artisan::call("common:doudian:import:data",['cid'=>$item->id,'shop_id'=>$shop_id]);
                }
            }
        }
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
