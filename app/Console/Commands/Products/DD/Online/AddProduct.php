<?php

namespace App\Console\Commands\Products\DD\Online;

use Illuminate\Console\Command;
use App\Libs\Utils;

class AddProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:DD:add:online {store} {prod_id} {data?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '基于机构店铺的商品上传';

    private $prod_id = 0;

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
        ///
        //$org_id = $this->argument("org_id");
        $store = $this->argument('store');
        $this->prod_id = $this->argument("prod_id");

        $goods_upload_log = \App\Models\ProdOuter::where("prod_id", $this->prod_id)->where('shop_id', $store->id)->first();
        if(!is_null($goods_upload_log)) {
            $this->info("对应的的prod id 已在".$goods_upload_log->created_at."完成了上传");
            echo "对应的的prod id 已存在\r\n";
            return false;
        }
        //检查对应的商品是否在线和存在
        $prod = \App\Models\Product::where("prod_id", $this->prod_id)->first();
        if(is_null($prod)) {
            $this->info("对应的的prod id 不存在");
            echo "对应的的prod id 不存在\r\n";
            return false;
        }
        //获取对应商品的内容，完成商品的数据更新
        $access_token = Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);

        //获取到店铺上新的配置数据内容
        $storeConfig = Utils::GetShopConfig($store->id);

        var_dump($storeConfig);

        $req = new \ProductListV2Request();
        $p = new \ProductListV2Param();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        
        $p->outer_product_id = $this->prod_id;
        $p->product_type = 0;
        $p->category_leaf_id = 23430;
        $p->name = $prod->prod_name;
        $p->recommend_remark = $prod->brief;



        $p->pay_type = $storeConfig['pay_type']; // 从配置中心获取
        $p->reduce_type = $storeConfig['reduce_type']; 
        //$p->assoc_ids = ""; //todo
        $p->freight_id = 13143768; // 调用默认的快递配送方式
        $p->weight = $prod->weight;
        $p->weight_unit = $storeConfig['weight_unit'];
        $p->delivery_delay_day = $storeConfig['delivery_delay_day'];
        $p->presell_type = $storeConfig['presell_type'];
        //$p->presell_delay = $storeConfig['presell_delay'];
        $p->supply_7day_return = $storeConfig['supply_7day_return'];
        $p->mobile = $storeConfig['mobile'];
        $p->maximum_per_order = $storeConfig['maximum_per_order'];
        $p->limit_per_buyer = $storeConfig['limit_per_buyer'];
        $p->minimum_per_order = $storeConfig['minimum_per_order'];

        $req->setParam($p);

        

        //$resp = $req->execute($access_token);
        
        
    }
}
