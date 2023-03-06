<?php

namespace App\Console\Commands\Refund\DD;

use Illuminate\Console\Command;
use App\Libs\Utils;

class GetRefund extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'refund:DD:get:online {store} {refund_id}';

    private $total = 0; // 订单总量
    private $size = 1; // 订单数量

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '获取抖店售后内容';

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
        $refund_id = $this->argument('refund_id'); // 但prod_id 为 0 的时候获取全部的商品数据
        $outer_refund_id = 0;
        if($outer_refund_id > 0) {
            $outer = \App\Models\RefundOrder::where("order_id", $order_id)->select(["refund_sn"])->first();
            if(is_null($outer)) {
                //todo
                return false;
            }
        }
        $access_token = Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);

        $this->getOnline(0,$outer_refund_id, $access_token, $store);

        if($this->total > $this->size) {
            $pages = ceil($this->total / $this->size);
            //前面获取了第一页面数据了，所以从第二页开始
            for($i=1; $i<=$pages; $i++) {
                $this->getOnline($i,$outer_refund_id, $access_token, $store);
            }
        }
    }

    public function getOnline($page, $outer_id, $access_token, $store) {
        $this->info($page." outer_id ". $outer_id);
        $req = new \AfterSaleListRequest();
        $p = new \AfterSaleListParam();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $p->size = $this->size;
        $p->page = $page;
        $p->order_by = "apply_time asc";
        $req->setParam($p);
        $resp = $req->execute($access_token);
        if($resp->code==10000) {
            $this->total = $resp->data->total;
            foreach($resp->data->items as $key=>$item) {
                var_dump($item->aftersale_info);
                $localOrder = \App\Models\Order::where("order_number", $item->aftersale_info->related_id)->first();
                $localOrderSettlement = \App\Models\OrderSettlement::where("order_number", $item->aftersale_info->related_id)->first();
                $refund = \App\Models\OrderRefund::where("refund_sn", $item->aftersale_info->aftersale_id)->first();
                if(is_null($refund)) $refund = new \App\Models\OrderRefund();
                $refund->shop_id =  $store->id;
                $refund->order_id = $localOrder->order_id;
                $refund->order_number = $item->aftersale_info->related_id;
                $refund->refund_sn = $item->aftersale_info->aftersale_id;
                $refund->goods_num = $item->aftersale_info->aftersale_num;
                $refund->refund_amount = $item->aftersale_info->refund_amount;
                $refund->buyer_msg = $item->aftersale_info->remark;
                $refund->express_name = $item->aftersale_info->return_logistics_company_name;
                $refund->express_no = $item->aftersale_info->return_logistics_code;
                $refund->apply_type = $item->aftersale_info->aftersale_refund_type;

                //$refund->flow_trade_no = $item->aftersale_info->aftersale_refund_type;

                $refund->order_amount = $localOrder->actual_total;
                $refund->user_id = $localOrder->user_id;
                $refund->flow_trade_no = $localOrderSettlement->pay_no;



                $related_id = $item->aftersale_info->related_id;
                //和订单关联

                
                $refund->apply_time = date("Y-m-d H:i:s", $item->aftersale_info->apply_time);
                $refund->save();
                //var_dump($item->aftersale_info);
            }
        }
    }
}
