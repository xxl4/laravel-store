<?php

namespace App\Console\Commands\Orders\DD;

use Illuminate\Console\Command;
use App\Libs\Utils;

class GetOrders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orders:DD:get:online {store} {order_id}';

    private $total = 0; // 订单总量
    private $size = 1; // 订单数量

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '抖店在线订单';

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
        $order_id = $this->argument('order_id'); // 但prod_id 为 0 的时候获取全部的商品数据
        $outer_order_id = 0;
        if($outer_order_id > 0) {
            $outer = \App\Models\Order::where("order_id", $order_id)->select(["order_number"])->first();
            if(is_null($outer)) {
                $outer_order_id = $outer->order_number;
                return false;
            }
        } 
        $access_token = Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);

        $this->getOnline(1,$outer_order_id, $access_token, $store);
    }

    private function getOnline($page,$outer_order_id, $access_token, $store) {
        $this->info($page." outer_id ". $outer_order_id);
        $req = new \OrderSearchListRequest();
        //$p = new \ProductListV2Param();
        $p = new \OrderSearchListParam();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $p->size = $this->size;
        $p->page = $page;
        $p->create_time_start = strtotime("-3 months", time());
        //$p->create_time_end = strtotime("-4 months", time());
        //if($outer_order_id  > 0) $p->product_id = $outer_order_id;
        $req->setParam($p);
        $resp = $req->execute($access_token);
        if($resp->code==10000) {
            $this->total = $resp->data->total;
            // 订单保存
            foreach($resp->data->shop_order_list as $key=>$item) {

            }
        }
        
    }
}
