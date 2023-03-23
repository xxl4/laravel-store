<?php

namespace App\Console\Commands\Products\DD\Online;

use Illuminate\Console\Command;

class AddSku extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:DD:addsku:online {store} {prod_id} {data?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '为商品添加SKU内容';

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
        $prod_id = $this->argument('prod_id'); // 但prod_id 为 0 的时候获取全部的商品数据
        $outer_prod_id = 0;
        $this->info("get from online info start".$store." prod_id ".$prod_id." if prod_id eq 0 and get all");
        $access_token = Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);
        if($prod_id > 0) {
            $outer = \App\Models\ProdOuter::where("prod_id", $prod_id)->select(["outer_id"])->first();
            if(is_null($outer)) {
                //$outer_prod_id = $outer->outer_id;
                $this->GetDetail($prod_id, $access_token, $store);
                return false;
            }
            return $this->GetDetail($outer->outer_id, $access_token, $store);
        } 
    }
}
