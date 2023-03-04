<?php

namespace App\Console\Commands\Orders;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class GetOnlineOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orders:online {store_id} {type} {order_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '获取在线订单数据列表';

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
        //
        $store_id = $this->argument('store_id');
        $type = $this->argument('type');
        $order_id = $this->argument("order_id");
        $this->info("start ".$type." online goods from ".$store_id);
        $store = \App\Models\OrganizationStore::where("id", $store_id)->first();
        if(is_null($store)) {
            $this->error("no have");
            return false;
        }
        $data = ['store'=>$store,"order_id"=>$order_id];
        $this->info("orders:".$store->shop_type.":".$type.":online params ".json_encode($data));
        Artisan::call("orders:".$store->shop_type.":".$type.":online", $data);
    }
}
