<?php

namespace App\Console\Commands\Logistics\JD;

use Illuminate\Console\Command;

class GetLogistics extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'logistics:JD:get:online {store} {order_id} {data?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'JD';

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

        $this->logisticsCompanyList($store);
        //$this->freightTemplateList($store);
    }

    private function logisticsCompanyList($store) {
        $c = new \TopClient();
        $c->appkey = $store->key;
        $c->secretKey = $store->secret;
        $c->accessToken = $store->token;

        $req = new \OrderLogisticsCompanyListRequest();
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $c, $c->accessToken, $req);
        var_dump($resp);exit;
        //$resp = \App\Libs\Utils::execThirdStoreApi($store->id, $c, $store->token, $req);
        foreach($resp->logistics_companies->logistics_company as $key=>$item) {
            $logistics = \App\Models\Delivery::where("shop_type", $store->shop_type)->where("code", $item->code)->where("outer_id", $item->id)->first();
            if(is_null($logistics)) $logistics = new \App\Models\Delivery();
            $logistics->shop_type = $store->shop_type;
            $logistics->outer_id = $item->id;
            $logistics->code = $item->code;
            $logistics->dvy_name = $item->name;
            $logistics->query_url = $item->reg_mail_no;
            $logistics->save();
        }
    }

    private function freightTemplateList($store) {
        $c = new \TopClient();
        $c->appkey = $store->key;
        $c->secretKey = $store->secret;
        $req = new \DeliveryTemplatesGetRequest();
        $req->setFields($this->_field2);
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $c, $store->token, $req);
        foreach($resp->delivery_templates->delivery_template as $key=>$item) {
            $transport = \App\Models\Transport::where("outer_id",$item->template_id)->where("shop_id", $store->id)->first();
            if(is_null($transport)) $transport = new \App\Models\Transport();
            $transport->shop_id = $store->id;
            $transport->trans_name = $item->name;
            $transport->outer_id = $item->template_id;
            $transport->charge_type = 0;
            $transport->is_free_fee = 0;
            $transport->has_free_condition = 0;
            $transport->save();
        }
    }
}
