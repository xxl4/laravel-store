<?php

namespace App\Console\Commands\Products\DD\Online;

use Illuminate\Console\Command;

class Stock extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:DD:stock:online {store} {prod_id} {data?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '抖店商品库存获取';

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
    }
}
