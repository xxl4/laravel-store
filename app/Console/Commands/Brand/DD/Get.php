<?php

namespace App\Console\Commands\Brand\DD;

use Illuminate\Console\Command;
use App\Libs\Utils;

class Get extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'brand:online:DD:get {store} {brand_id} {cid?} {data?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'DD';

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
        $brand_id = $this->argument('brand_id'); 
        $cid = $this->argument('cid'); // 但prod_id 为 0 的时候获取全
        $access_token = Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);

        //ShopBrandListRequest
        $req = new \BrandListRequest();
        $p = new \BrandListParam();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $p->category_id = $cid;
        $req->setParam($p);
        $req->setConfig($config);
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $req, $access_token);
        var_dump($resp, $req);
        if($resp->code=='10000') {
            if (!property_exists($resp, 'brand_list')) {
                //todo 
                var_dump($resp);
                return false;
            }
            foreach($resp->data->brand_list as $key=>$item) {
                $brand = \App\Models\Brand::where("shop_id", $store->id)->where("outer_id", $item->brand_id)->first();
                if(is_null($brand)) $brand = new \App\Models\Brand();

                $brand->brand_name = $item->name_cn.'|'.$item->name_en;
                $brand->outer_id = $item->brand_id;
                $brand->shop_id = $store->id;
                $brand->org_id = $store->organization_id;
                $brand->status = 1;
                $brand->save();

                $cateBrand = \App\Models\CategoryBrand::where("category_id", $cid)->where("brand_id", $brand->id)->first();
                if(is_null($cateBrand)) $cateBrand = new \App\Models\CategoryBrand();
                $cateBrand->category_id = $cid;
                $cateBrand->brand_id = $brand->brand_id;
                $cateBrand->save();

            }
        }
    }
}
