<?php

namespace App\Console\Commands\Category\DD;

use Illuminate\Console\Command;
use App\Libs\Utils;
use Illuminate\Support\Facades\Artisan;

class StoreGet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'category:DD:storeget:online {store} {cid} {data?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '获取本店菜单内容';

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
                $this->saveToDB($item, $store);
                if($item->enable==true && $item->is_leaf==false) {
                    Artisan::call("category:online",['cid'=>$item->id, 'type'=>'storeget', 'store_id'=>$store->id]);
                    sleep(2);

                }
                //
                if($item->is_leaf==true && $item->enable==true) {
                    //ProductGetCatePropertyV2Request
                   $this->categoryProperty($item->id, $store, $access_token);
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
        if($resp->code=='10000') {
            foreach($resp->data->data as $key=>$item) {
                $prop = \App\Models\ProdProp::where("prop_id",$item->property_id)->where("shop_id", $store->id)->first();
                if(is_null($prop)) $prop = new \App\Models\ProdProp();
                $prop->prop_id=$item->property_id;
                $prop->prop_name=$item->property_name;
                $rule = [];
                $rule['required'] = $item->required;
                $rule['type'] = $item->type;
                $rule['relation_id'] = $item->relation_id;
                $rule['diy_type'] = $item->diy_type;
                $rule['important_type'] = $item->important_type;
                $rule['property_type'] = $item->property_type;
                $rule['status'] = $item->status;
                $rule['multi_select_max'] = $item->multi_select_max;
                $prop->rule = json_encode($rule);
                $prop->save();

                // 保存到prop_value
                foreach($item->options as $kk=>$opt) {
                    $propval = \App\Models\ProdPropValue::where("prop_id", $item->property_id)->where("value_id",$opt->value_id)->first();
                    if(is_null($propval)) $propval = new \App\Models\ProdPropValue();
                    $propval->value_id = $opt->value_id;
                    $propval->prop_value = $opt->name;
                    $propval->save();
                }

                // 保存到category prop
                $categoryProp = \App\Models\CategoryProp::where("category_id", $cid)->where("prop_id", $item->property_id)->first();
                if(is_null($categoryProp)) $categoryProp = new \App\Models\CategoryProp();
                $categoryProp->category_id = $cid;
                $categoryProp->prop_id = $item->property_id;
                $categoryProp->save();
                
            }
        }
    }

    private function saveToDB($item, $store) {
        $category = \App\Models\Category::where("category_id", $item->id)->where("shop_id",$store->id)->first();
        if(is_null($category)) $category = new \App\Models\Category();
        $category->category_id = $item->id;
        $category->shop_id = $store->id;
        $category->parent_id = $item->parent_id;
        $category->category_name = $item->name;
        $category->status = 1;
        $category->seq = 1;
        $category->grade = $item->level;
        $category->save();
    }
}
