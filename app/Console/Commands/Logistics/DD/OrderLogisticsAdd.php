<?php

namespace App\Console\Commands\Logistics\DD;

use Illuminate\Console\Command;

class OrderLogisticsAdd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'logistics:DD:add:online {store} {order_id} {data?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '抖店订单发货';

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
        //OrderLogisticsAddRequest
        $store = $this->argument('store');
        $order_id = $this->argument('order_id'); // 用于发货

        //检查对应的OrderID 是否有内容
        $order = \App\Models\Order::where("order_id", $order_id)->where("shop_id", $store->id)->first();
        if(is_null($order)) {
            //todo
            return false;
        }

        $access_token = Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);

        $req = new \OrderLogisticsAddRequest();
        $p = new \OrderLogisticsAddParam();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);

        $p->order_id = $order_id;
        $p->company = $order_id;
        $p->company_code = $order_id;
        $p->logistics_code = $order_id;
        $p->serial_number_list = $order_id;

        $req->setParam($p);
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $req, $access_token);
        if($resp->code!=10000) {
            //todo
        }
        

    }
}
