<?php

namespace App\Console\Commands\Refund\TM;

use Illuminate\Console\Command;
use App\Libs\Utils;
use Illuminate\Support\Facades\Log;

class GetRefund extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'refund:TM:get:online {store} {refund_id} {data?}';

    private $total = 0; // 订单总量
    private $size = 100; // 订单数量

    private $fields="refund_id, tid, title, buyer_nick, seller_nick, total_fee, status, created, refund_fee, oid, good_status, company_name, sid, payment, reason, desc, has_good_return, modified, order_status,refund_phase,refund_version,outer_id,attribute,sku,num";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '获取天猫售后内容';

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
        if($refund_id > 0) {
            $outer = \App\Models\OrderRefund::where("refund_id", $refund_id)->select(["refund_sn"])->first();
            if(is_null($outer)) {
                //todo
                $this->getDetail($refund_id, $store);
                return false;
            }
            return $this->getDetail($outer->refund_sn, $store);
        }

        $this->getOnline(1,  $store);
        //exit;

        if($this->total > $this->size) {
            $pages = ceil($this->total / $this->size);
            //前面获取了第一页面数据了，所以从第二页开始
            for($i=2; $i<=$pages; $i++) {
                $this->getOnline($i,  $store);
            }
        }
    }

    public function getOnline($page, $store) {
        $this->info($page);
        //RefundsReceiveGetRequest
        $c = new \TopClient();
        $c->appkey = $store->key;
        $c->secretKey = $store->secret;

        $req = new \RefundsReceiveGetRequest();
        //$req->setStatus('WAIT_SELLER_SEND_GOODS'); //获取订单状态
        $req->setFields($this->fields);
        $req->setPageSize($this->size);
        $req->setStartModified(date("Y-m-d H:i:s", strtotime("-1 month")));// 最近一个月的数据
        $req->setPageNo($page);
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $c, $store->token, $req);
        //var_dump($resp);
        if (!property_exists($resp, 'refunds')) {
            //todo 
            var_dump($resp);
            Log::error(json_encode($resp));
            $this->error("数据好像给出差了哦");
            return false;
        }
        $this->total = $resp->total_results;

        foreach($resp->refunds->refund as $key=>$item) {
            //var_dump($localOrder);exit;
            $this->saveToDB($item, $store);
        }  
    }

    /**
     * 
     * 订单详情
     * @param int refund_id
     * @param json store
     * 
     */
    private function getDetail($refund_id, $store){
        $c = new \TopClient();
        $c->appkey = $store->key;
        $c->secretKey = $store->secret;
        $req = new \RefundGetRequest();
        $req->setRefundId($refund_id);
        $req->setFields($this->fields);
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $c, $store->token, $req);
        //var_dump($resp);
        if (!property_exists($resp, 'refund')) {
            //todo 
            var_dump($resp);
            Log::error(json_encode($resp));
            $this->error("数据好像给出差了哦");
            return false;
        }

        $item = $resp->refund;

        $this->saveToDB($item, $store);
        

    }

    private function saveToDB($item, $store) {
        $refund = \App\Models\OrderRefund::where("refund_sn", $item->refund_id)->first();
        if(is_null($refund)) $refund = new \App\Models\OrderRefund();
        $refund->shop_id =  $store->id;
        $refund->refund_sn =  $item->refund_id;
        $refund->order_number =  $item->tid;

        $user = \App\Models\User::where("outer_id",$item->buyer_open_uid)->first();
        if(is_null($user)) $user = new \App\Models\User();
        $user->outer_id = $item->buyer_open_uid;
        $user->nick_name = $item->buyer_nick;
        $user->status = 1;
        $user->save();

        $localOrder = \App\Models\Order::where("order_number", $item->tid)->first();
        if(is_null($localOrder)) {
            $localOrder = new \App\Models\Order();
            $localOrder->order_number = $item->tid;
            $localOrder->user_id = $user->user_id;
            $localOrder->save();
        }

        $refund->user_id = $user->user_id;
        $refund->order_amount = $item->total_fee;
        $refund->refund_amount = $item->refund_fee;
        $refund->buyer_msg = $item->reason;
        $refund->goods_num = (int)$item->num;

        $refund->apply_time = $item->created;
        $refund->order_id = $localOrder->order_id;

        $refund->flow_trade_no = $item->refund_id;
        $refund->order_item_id = intval($item->outer_id);

        $refund->outer_refund = json_encode($item);


        $refund->save();
    }
}
