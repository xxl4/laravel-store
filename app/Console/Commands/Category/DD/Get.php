<?php

namespace App\Console\Commands\Category\DD;

use Illuminate\Console\Command;
use App\Libs\Utils;

class Get extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'category:DD:get:online {store} {cid}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        //
        $store = $this->argument('store');
        $cid = $this->argument('cid'); // 但prod_id 为 0 的时候获取全
        $access_token = Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);

        $this->categoryProperty($cid, $store, $access_token);
        return false;

        
        $req = new \ShopGetShopCategoryRequest();
        $p = new \ShopGetShopCategoryParam();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $p->cid = $cid;
        $req->setParam($p);
        $resp = $req->execute($access_token);
        if($resp->code=='10000') {
            $items = $resp->data;
            foreach($items as $key=>$item) {
                $this->saveToDB($item);
                if($item->enable==true && $item->is_leaf==false) {
                    Artisan::call("common:doudian:import:data",['cid'=>$item->id]);
                }
                //
                if($item->is_leaf==true && $item->enable==true) {
                    //ProductGetCatePropertyV2Request
                    $req = new \ProductGetCatePropertyV2Request();
                    $p = new \ProductGetCatePropertyV2Param();
                    $config = new \DoudianOpConfig();
                    $config->appKey = $store->key;
                    $config->appSecret = $store->secret;
                    $req->setConfig($config);
                    $p->cid = $item->id;
                    $req->setParam($p);
                    $resp = $req->execute($access_token);
                    var_dump($resp);
                    if($resp->code=='10000') {

                    }
                }
            }
        }
    }

    private function categoryProperty($cid, $store, $access_token) {
        $req = new \ProductGetCatePropertyV2Request();
        $p = new \ProductGetCatePropertyV2Param();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $p->category_leaf_id = $cid;
        $req->setParam($p);
        $resp = $req->execute($access_token);
        var_dump($resp);
        if($resp->code=='10000') {
            foreach($resp->data as $key=>$item) {
                
            }
        }
    }

    private function saveToDB($item) {
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
    }
}
