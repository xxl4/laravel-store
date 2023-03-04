<?php

namespace App\Console\Commands\Logistics\DD;

use Illuminate\Console\Command;
use App\Libs\Utils;
use Illuminate\Support\Facades\Cache;

class GetLogistics extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'logistics:DD:get:online {store} {order_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '抖店在线物流模块信息获取';

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
        $order_id = $this->argument('order_id'); // 用于发货
        $store = $this->argument('store');
        $access_token = Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);

        $req = new \OrderLogisticsCompanyListRequest();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $resp = $req->execute($access_token);
        if($resp->code==10000) {
            foreach($resp->data as $key=>$item) {
                $logistics = \App\Models\Delivery::where("shop_type", $store->shop_type)->where("code", $item->code)->where("outer_id", $item->id)->first();
                if(is_null($logistics)) $logistics = new \App\Models\Delivery();
                $logistics->shop_type = $store->shop_type;
                $logistics->outer_id = $item->id;
                $logistics->code = $item->code;
                $logistics->dvy_name = $item->name;
                $logistics->query_url = "https://www.baidu.com";
                $logistics->save();
            }
        }
        

    }
}
