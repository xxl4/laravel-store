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
    protected $signature = 'logistics:DD:get:online {store} {order_id} {data?}';

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

        $access_token = Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);

        $this->logisticsCompanyList($store, $access_token);
        $this->freightTemplateList($store, $access_token);
        

    }

    private function logisticsCompanyList($store, $access_token) {
        $req = new \OrderLogisticsCompanyListRequest();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $req, $access_token);
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

    private function freightTemplateList($store, $access_token) {
        $req = new \FreightTemplateListRequest();
        $p = new \FreightTemplateListParam();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $p->page = 0;
        $p->size = 10;
        $req->setParam($p);
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $req, $access_token);
        //var_dump($resp);
        if($resp->code==10000) {
            foreach($resp->data->List as $key=>$item) {
                $transport = \App\Models\Transport::where("outer_id",$item->template->id)->where("shop_id", $store->id)->first();
                if(is_null($transport)) $transport = new \App\Models\Transport();
                $transport->shop_id = $store->id;
                $transport->trans_name = $item->template->template_name;
                $transport->outer_id = $item->template->id;
                $transport->charge_type = 0;
                $transport->is_free_fee = 0;
                $transport->has_free_condition = 0;
                $transport->save();
            }
           
        }
    }
}
