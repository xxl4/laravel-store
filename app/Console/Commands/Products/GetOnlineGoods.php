<?php

namespace App\Console\Commands\Products;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class GetOnlineGoods extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:get:online {store_id} {prod_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '获取在线商品数据内容';

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
        $store_id = $this->argument('store_id');
        $prod_id = $this->argument("prod_id");
        $this->info("start get online goods from ".$store_id);
        $store = \App\Models\OrganizationStore::where("id", $store_id)->first();
        if(is_null($store)) {
            $this->error("no have");
            return false;
        }
        $data = ['store'=>$store,"prod_id"=>$prod_id];
        $this->info("products:".$store->shop_type.":get:online params ".json_encode($data));
        Artisan::call("products:".$store->shop_type.":get:online", $data);
    }
}
