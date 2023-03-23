<?php

namespace App\Console\Commands\Products\TM\Online;

use Illuminate\Console\Command;

class Down extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:TM:down:online {store} {prod_id} {data?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '下架';

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

        //
        $store = $this->argument('store');
        $this->prod_id = $this->argument("prod_id");

        $this->info("get from online info start".$store);
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

        //@link https://open.taobao.com/api.htm?docId=53971&docType=2&source=search
        $req = new \AlibabaItemOperateDownshelfRequest();
        $req->setItemId($prodouter->outer_id);
        //$req->setOpType(1); // 1 为上架 2 为下架
        //$req->setNote("API 接口上架 ".date("Y-m-d H:i:s"));

        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $c, $store->token, $req);
        var_dump($resp);
    }
}
