<?php

namespace App\Console\Commands\Products\TM\Online;

use Illuminate\Console\Command;
use App\Libs\Utils;

class AddSku extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:TM:add_sku:online {store} {prod_id} {data?}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '添加商品的SKU内容';

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

        $prodouter = \App\Models\ProdOuter::where("prod_id", $this->prod_id)->select("outer_id")->first();
        if(is_null($prodouter)) {
            echo $this->prod_id." is not online now ";
            return false;
        }
        if(empty($prodouter->outer_id)) {
            echo $this->prod_id." is not online now ";
            return false;
        }
        
        

        $c = new \TopClient();
        $c->appkey = $store->key;
        $c->secretKey = $store->secret;
        //@link https://open.taobao.com/api.htm?docId=27&docType=2&source=search
        $req = new \ItemSkuAddRequest();
        $req->setNumIid($prodouter->outer_id);
        $req->setOuterId($prodouter->outer_id);
        $req->setPrice($prodouter->outer_id);
        $req->setProperties($prodouter->outer_id);
        $req->setQuantity($prodouter->outer_id);
        $req->setItemPrice($prodouter->outer_id);
        //$req->setNumIids(0);
        //$req->setFields($this->_fields);
        
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $c, $store->token, $req);
          
    }

    

    public function GetDetail($outer_id, $access_token, $store) {
        echo $outer_id."\r\n";
        $c = new \TopClient();
        $c->appkey = $store->key;
        $c->secretKey = $store->secret;

        $req = new \ItemSkusGetRequest();
        $req->setNumIids($outer_id);
        //$req->setNumIids(0);
        $req->setFields($this->_fields);
        
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $c, $store->token, $req);
        
        foreach($resp->skus->sku as $key=>$sku) {
            $sku_mapping = \App\Models\ProdSkuOuter::where("outer_prod_id", $sku->iid)->where("outer_sku_id", $sku->sku_id)->first();
            if(is_null($sku_mapping)) $sku_mapping = new \App\Models\ProdSkuOuter();

            $status = 1;

            $sku_mapping->outer_prod_id = $sku->iid;
            $sku_mapping->outer_sku_id = $sku->sku_id;
            $sku_mapping->sku_id = $sku->outer_id;
            $sku_mapping->quantity = $sku->quantity;
            $sku_mapping->properties_name = $sku->properties_name;
            if($sku->status=='delete') $status = 0;
            $sku_mapping->status = $status;

            $sku_mapping->save();
        }
        
        
    }
}
