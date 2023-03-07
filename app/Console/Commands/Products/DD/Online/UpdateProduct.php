<?php

namespace App\Console\Commands\Products\DD\Online;

use Illuminate\Console\Command;
use App\Libs\Utils;

class UpdateProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:DD:edit:online {store} {prod_id} {data?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '更新抖店线上商品内容';

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
        $prod_id = $this->argument("prod_id");
        //
        $this->info("get from online info start".$store);

        $access_token = Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);

        //获取对应商品的内容，完成商品的数据更新
        if($prod_id > 0) {
            $outer = \App\Models\ProdOuter::where("prod_id", $prod_id)->select(["outer_id"])->first();
            if(is_null($outer)) {
                //$outer_prod_id = $outer->outer_id;
                $this->EditDetail($prod_id, $access_token, $store);
                return false;
            }
            return $this->EditDetail($outer->outer_id, $access_token, $store);
        }
    }

    public function EditDetail($prod_id, $access_token, $store) {
        $req = new \ProductEditV2Request();
        $p = new \ProductEditV2Param();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $p->product_id = $prod_id;

        //添加属性
        $specs = "成色|成色1,成色2";
        $p->specs =$specs;
        //$p->spec_name ="成色";
        $spec_prices = [];
        $spec_prices[0]['spec_detail_name1'] = "成色1";
        $spec_prices[0]['stock_num'] = 0;
        $spec_prices[0]['price'] = 1000;
        $spec_prices[0]['out_sku_id'] = 22222;
        $spec_prices[0]['code'] = "SD22222";
        $spec_prices[0]['step_stock_num'] = 0;
        $spec_prices[0]['supplier_id'] = "";

        $pic = "https://p6-aio.ecombdimg.com/obj/ecom-shop-material/v1_wnOrEgF_71097411733851507340409_d421ddb2b0f96650b5907898f7a0736b_sx_191962_www600-600";

        $p->spec_pic = $pic.",".$pic;

        
        $spec_prices[1]['spec_detail_name1'] = "成色2";
        $spec_prices[1]['stock_num'] = 0;
        $spec_prices[1]['price'] = 11000;
        $spec_prices[1]['out_sku_id'] = 1111;
        $spec_prices[1]['code'] = "SD1111";
        $spec_prices[1]['step_stock_num'] = 0;
        $spec_prices[1]['supplier_id'] = "";
        
        

        var_dump(json_encode($spec_prices));

        $p->spec_prices = json_encode($spec_prices,JSON_UNESCAPED_UNICODE);

        $p->commit = true;

        $req->setParam($p);
        $resp = $req->execute($access_token);
        var_dump($resp);
    }
}
