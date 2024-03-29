<?php

namespace App\Console\Commands\Orders\TM\Online;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class GetOrders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orders:TM:get:online {store} {order_id} {data?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '获取线上订单数据，默认最近一个月的周期';

    private $fields = "tid,oid,buyer_nick,receiver_phone,oaid,payment,received_payment,shipping_type,receiver_name,receiver_state,receiver_city,receiver_district,receiver_address,receiver_zip,receiver_mobile,total_fee,post_fee,discount_fee,pay_time,orders,has_buyer_message,created,modified,status,buyer_open_uid,refund_status,refund_id,seller_flag,has_buyer_message";
    private $size = 100;
    private $total = 0;

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
        $order_id = $this->argument('order_id'); // 但order_id 为 0 的时候获取全部的
        $outer_order_id = 0;
        if($order_id > 0) {
            $outer = \App\Models\Order::where("order_id", $order_id)->where("shop_id", $store->id)->select(["order_number"])->first();
            if(is_null($outer)) {
                //todo
                return $this->OrderDetail($order_id, $store);
                return false;
            }
            return $this->OrderDetail($outer->order_number, $store);
        }
        $this->info("get from online info start".$store);
        
        $this->getOnline(1, $store);

        $this->info("Total ". $this->total);
        if($this->total > $this->size) {
            $pages = ceil($this->total / $this->size);
            //前面获取了第一页面数据了，所以从第二页开始
            for($i=1; $i<=$pages; $i++) {
                $this->info("page ". $i);
                $this->getOnline($i, $store);
                sleep(1);
            }
        }
    }
    private function getOnline($page, $store) {
        $c = new \TopClient();
        $c->appkey = $store->key;
        $c->secretKey = $store->secret;

        $req = new \TradesSoldGetRequest();
        //$req->setStatus('WAIT_SELLER_SEND_GOODS'); //获取订单状态
        $req->setFields($this->fields);
        $req->setPageSize($this->size);
        $req->setStartCreated(date("Y-m-d H:i:s", strtotime("-1 week")));// 最近一个月的数据
        $req->setPageNo($page);
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $c, $store->token, $req);

        if (!property_exists($resp, 'trades')) {
            //todo 
            Log::error(json_encode($resp));
            $this->error("数据好像给出差了哦");
            return false;
        }
        $this->total = $resp->total_results;
        echo $this->total."\r\n";
        foreach($resp->trades->trade as $key=>$item) {
            $this->saveToDB($item, $store); //优化代码逻辑
        }
    }

    private function OrderDetail($outer_id, $store) {
        $c = new \TopClient();
        $c->appkey = $store->key;
        $c->secretKey = $store->secret;

        $req = new \TradeFullinfoGetRequest();
        //$req->setStatus('WAIT_SELLER_SEND_GOODS'); //获取订单状态
        $req->setFields($this->fields);
        $req->setTid($outer_id);
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $c, $store->token, $req);
        //var_dump($resp);
        if (!property_exists($resp, 'trade')) {
            //todo 
            var_dump($resp);
            Log::error(json_encode($resp));
            $this->error("数据好像给出差了哦");
            return false;
        }
        $item = $resp->trade;

        $this->saveToDB($item, $store);

    }

    private function saveToDB($item, $store) {
        $order = \App\Models\Order::where("order_number", $item->tid)->first();
        if(is_null($order)) $order = new \App\Models\Order();
        $order->shop_id = $store->id;
        $order->order_number = $item->tid;

        $order->total = $item->total_fee;
        $order->actual_total = $item->payment;
        $order->freight_amount = $item->post_fee;

        $remark = "";
        $remark.="卖家的小旗帜为:".$item->seller_flag;
        $remark.="买家是否有留意:".$item->has_buyer_message;

        $order->remarks = $remark;

        $order->product_nums = count($item->orders);
        $order->pay_type = 1;

        $order->status = \App\Enums\TM\OrderState::fromKey($item->status);



        $user = \App\Models\User::where("outer_id",$item->buyer_open_uid)->first();
        if(is_null($user)) $user = new \App\Models\User();
        $user->outer_id = $item->buyer_open_uid;
        $user->nick_name = $item->buyer_nick;
        $user->status = 1;
        $user->save();
        $order->user_id = $user->user_id;

        if(isset($item->pay_time)) $order->pay_time = $item->pay_time;
        $order->reduce_amount = $item->discount_fee;

        $order->save();

        //订单商品的同步
        foreach ($item->orders->order as $key=> $good) {
            //var_dump($good);
            $goods_id = str_replace('sd', '', $good->outer_sku_id);
            $orderItem = \App\Models\OrderItem::where("shop_id", $store->id)->where("order_number", $item->tid)->where("prod_id", $goods_id)->first();
            if(is_null($orderItem)) $orderItem = new \App\Models\OrderItem();
            $orderItem->shop_id = $store->id;
            $orderItem->order_number = $item->tid;
            $orderItem->prod_count = $good->num;
            $orderItem->sku_id = (int)$good->sku_id;
            $orderItem->prod_id = (int)$goods_id;
            $orderItem->sku_name = $good->sku_properties_name;
            $orderItem->prod_name = $good->title;
            $orderItem->price = $good->price;
            $orderItem->user_id = $user->user_id;
            $orderItem->product_total_amount = $good->total_fee;

            $orderItem->save();
            
        }
    }
}
