<?php

namespace App\Console\Commands\Products\DD\Online;

use Illuminate\Console\Command;

class Down extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:DD:down:online {store} {prod_id} {data?}';

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

        $access_token = \App\Libs\Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);

        $prodouter = \App\Models\ProdOuter::where("prod_id", $this->prod_id)->select("outer_id")->first();
        if(is_null($prodouter)) {
            echo $this->prod_id." is not online now ";
            return false;
        }
        if(empty($prodouter->outer_id)) {
            echo $this->prod_id." is not online now ";
            return false;
        }

        $req = new \ProductSetOfflineRequest();
        $p = new \ProductSetOfflineParam();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $p->product_id = $prodouter->outer_id;
        $req->setParam($p);
        $resp = $req->execute($access_token);
        var_dump($resp,$req);
        if($resp->code=='10000') {
            //var_dump($resp);
            //todo
        }
    }
}
