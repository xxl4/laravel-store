<?php

namespace App\Console\Commands\Products\TM\Online;

use Illuminate\Console\Command;
use App\Libs\Utils;

class Skus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:TM:skulist:online {store} {prod_id} {data?}';

    private $_fields = "sku_id,iid,num_iid,properties,properties_name,quantity,price,outer_id,created,modified,status,sku_spec_id,barcode";

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
        if($prod_id > 0) {
            $outer = \App\Models\ProdOuter::where("prod_id", $prod_id)->select(["outer_id"])->first();
            if(is_null($outer)) {
                //$outer_prod_id = $outer->outer_id;
                $this->GetDetail($prod_id, $store->token, $store);
                return false;
            }
            return $this->GetDetail($outer->outer_id, $store->token, $store);
        } 
          
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
