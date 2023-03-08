<?php

namespace App\Console\Commands\Products\DD\Online;

use Illuminate\Console\Command;

class Putaway extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:DD:putaway:online {store} {prod_id} {data?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '上架';

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
        $this->prod_id = $this->argument("prod_id");

        $access_token = \App\Libs\Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);

        $req = new \ProductEditV2Request();
        $p = new \ProductEditV2Param();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $p->commit = true;
        $req->setParam($p);
        $resp = $req->execute($access_token);
        var_dump($resp);
        if($resp->code=='10000') {
            
        }
    }
}
