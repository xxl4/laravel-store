<?php

namespace App\Console\Commands\Products\JD\Online;

use Illuminate\Console\Command;

class Down extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:JD:down:online {store} {prod_id} {data?}';

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

        echo "prod id is".$this->prod_id."\r\n";
        $c = new \JdClient();
        $c->appKey = $store->key;
        $c->appSecret = $store->scret;
        $c->accessToken = $store->token;
        

        $prodouter = \App\Models\ProdOuter::where("prod_id", $this->prod_id)->select("outer_id")->first();
        if(is_null($prodouter)) {
            echo $this->prod_id." is not online now ";
            return false;
        }
        if(empty($prodouter->outer_id)) {
            echo $this->prod_id." is not online now ";
            return false;
        }

        $req = new \WareWriteUpOrDownRequest();
        $req->setWareId($prodouter->outer_id);
        $req->setOpType(2); // 1 为上架 2 为下架
        $req->setNote("API 接口下架 ".date("Y-m-d H:i:s"));

        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $c, $c->accessToken, $req);
    }
}
