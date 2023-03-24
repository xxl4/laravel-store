<?php

namespace App\Console\Commands\Products\DD\Online;

use Illuminate\Console\Command;

class SpuQueryBookNameByISBN extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:DD:spu_query_book_isbn:online {store} {prod_id} {data?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '图片查询图书';

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
        //ProductSetOfflineRequest
        $store = $this->argument('store');
        $this->prod_id = $this->argument("prod_id");

        echo "prod id is".$this->prod_id."\r\n";

        $access_token = \App\Libs\Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);

        $prod = \App\Models\Product::where("prod_id", $this->prod_id)->where('status', 1)->select("category_id")->first();
        if(is_null($prod)) return false;
        $category_id = $prod->category_id;
        $categoryProp = \App\Models\CategoryProp::where("category_id", $category_id)->select(["prop_id"])->get();
        $prop_id = 0;
        foreach($categoryProp as $kk=>$prop) {
            $prop_name = \App\Models\ProdProp::where("prop_id", $prop->prop_id)->where("prop_name","ISBN编号")->first();
            //var_dump($prop_name);
            if(!empty($prop_name)) {$prop_id = $prop->prop_id; break;}
        }
        $isbn = \App\Models\ProdProperty::where("name", $prop_id)->where("prod_id", $this->prod_id)->value("value");


        $req = new \SpuQueryBookNameByISBNRequest();
        $p = new \SpuQueryBookNameByISBNParam();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $p->isbn = $isbn;
        $p->page_no = 1;
        $p->page_size = 10;
        $req->setParam($p);
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $req, $access_token);
        
    }
}
