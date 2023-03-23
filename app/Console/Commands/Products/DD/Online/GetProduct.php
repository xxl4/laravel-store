<?php

namespace App\Console\Commands\Products\DD\Online;

use Illuminate\Console\Command;
use App\Libs\Utils;
use Illuminate\Support\Facades\Cache;

class GetProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:DD:get:online {store} {prod_id} {data?}';

    private $total = 0; // 商品总数量

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '获取抖店线上商品内容';

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
        $store = $this->argument('store');
        $prod_id = $this->argument('prod_id'); // 但prod_id 为 0 的时候获取全部的商品数据
        $outer_prod_id = 0;
        $this->info("get from online info start".$store." prod_id ".$prod_id." if prod_id eq 0 and get all");
        $access_token = Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);
        if($prod_id > 0) {
            $outer = \App\Models\ProdOuter::where("prod_id", $prod_id)->select(["outer_id"])->first();
            if(is_null($outer)) {
                //$outer_prod_id = $outer->outer_id;
                $this->GetDetail($prod_id, $access_token, $store);
                return false;
            }
            return $this->GetDetail($outer->outer_id, $access_token, $store);
        } 
        //
        
        $size = 100;
        

        $this->getOnline(1,$outer_prod_id, $access_token, $store);

        $this->info("product total ".$this->total);

        // 如果有超过size的，需要做分页动作
        if($this->total > $size) {
            $pages = ceil($this->total / $size);
            //前面获取了第一页面数据了，所以从第二页开始
            for($i=2; $i<=$pages; $i++) {
                $this->getOnline($i,$outer_prod_id, $access_token, $store);
            }
        }    
    }

    private function getOnline($page,$outer_prod_id, $access_token, $store) {
        $cacheKey = \App\Enums\CachePrefixEnum::RUNING_PRODUCT_ALL_PAGE.$store->id."_".$page;
        if(Cache::has($cacheKey)) {
            return true;
        }
        $this->info($page." outer_id ". $outer_prod_id);
        $req = new \ProductListV2Request();
        $p = new \ProductListV2Param();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $size = 100;
        $p->size = $size;
        $p->page = $page;
        if($outer_prod_id  > 0) $p->product_id = $outer_prod_id;
        $req->setParam($p);
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $req, $access_token);
        if($resp->code==10000) {
            $this->total = $resp->data->total;
            foreach ($resp->data->data as $key=>$item) {
                $this->info($item->product_id);
                //check the doudian goods table
                $product = \App\Models\ProdOuter::where("outer_id", $item->product_id)->first();
                if(is_null($product)) $product = new \App\Models\ProdOuter();
                    
                $product->outer_id = $item->product_id;
                $product->prod_id = $item->out_product_id;
                $product->shop_id = $store->id;
                $product->shop_type = $store->shop_type;
                $product->content = json_encode($item);
                $product->save();
            }
        }
        Cache::put($cacheKey, $page, 3600);
    }

    public function GetDetail($outer_id, $access_token, $store) {
        $req = new \ProductDetailRequest();
        $p = new \ProductDetailParam();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $p->product_id = $outer_id;
        $req->setParam($p);
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $req, $access_token);
        var_dump($resp);
        if($resp->code==10000) {
            $prod = \App\Models\ProdOuter::where("outer_id", $outer_id)->first();
            if(is_null($prod)) $prod = new \App\Models\ProdOuter();
            $item = $resp->data;
            $prod->outer_id = $item->product_id;
            $prod->prod_id = $item->out_product_id;
            $prod->shop_id = $store->id;
            $prod->shop_type = $store->shop_type;
            $prod->content = json_encode($item);
            $prod->save();
        }
    }
}
