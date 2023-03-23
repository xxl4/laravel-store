<?php

namespace App\Console\Commands\Products\TM\Online;

use Illuminate\Console\Command;
use App\Libs\Utils;

class EditSku extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:TM:edit_sku:online {store} {prod_id} {data?}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '编辑商品的SKU内容';

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
        
        //@link https://open.taobao.com/api.htm?docId=29&docType=2&source=search
        echo $outer_id."\r\n";
        $c = new \TopClient();
        $c->appkey = $store->key;
        $c->secretKey = $store->secret;

        $prodouter = \App\Models\ProdOuter::where("prod_id", $this->prod_id)->select("outer_id")->first();
        if(is_null($prodouter)) {
            echo $this->prod_id." is not online now ";
            return false;
        }
        if(empty($prodouter->outer_id)) {
            echo $this->prod_id." is not online now ";
            return false;
        }

        $req = new \ItemSkuUpdateRequest();
        $req->setNumIid($prodouter->outer_id);
        $req->setOuterId($prodouter->outer_id);
        $req->setPrice($prodouter->outer_id);
        $req->setProperties($prodouter->outer_id);
        $req->setQuantity($prodouter->outer_id);
        $req->setItemPrice($prodouter->outer_id);
        
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $c, $store->token, $req);
    }


}
