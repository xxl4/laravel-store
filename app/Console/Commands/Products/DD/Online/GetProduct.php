<?php

namespace App\Console\Commands\Products\DD\Online;

use Illuminate\Console\Command;
use App\Libs\Utils;

class GetProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products.DD.get.online {store} {prod_id}';

    private $_field = "approve_status,num_iid,title,nick,type,cid,pic_url,num,props,valid_thru,list_time,price,has_discount,has_invoice,has_warranty,has_showcase,modified,delist_time,postage_id,seller_cids,outer_id,sold_quantity";

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
        //
        $this->info("get from online info start".$store." prod_id ".$prod_id." if prod_id eq 0 and get all");
        $c = new \TopClient();
        $access_token = Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);
        

        $req = new \ProductListV2Request();
        $p = new \ProductListV2Param();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        //$p->status = 1;
        $p->size = 100;
        $p->page = 1;
        $req->setParam($p);
        $resp = $req->execute($access_token);
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
}
