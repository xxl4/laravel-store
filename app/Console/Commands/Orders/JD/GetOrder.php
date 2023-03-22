<?php

namespace App\Console\Commands\Orders\JD;

use Illuminate\Console\Command;

class GetOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orders:JD:get:online {store} {order_id} {data?}';

    private $fields = "waybill,logisticsId,realPin,pin,returnOrder,open_id_buyer,xid_buyer,orderState,deliveryType,itemInfoList,orderId,isShipmenttype,scDT,idSopShipmenttype,orderStartTime,orderTotalPrice,consigneeInfo,payType,orderStartTime,paymentConfirmTime,orderRemark,orderPayment,orderTotalPrice,freightPrice,orderSource,payType,invoiceInfo,invoiceCode,invoiceEasyInfo,orderType";

    private $orderStatus = "WAIT_SELLER_STOCK_OUT,WAIT_GOODS_RECEIVE_CONFIRM,WAIT_SELLER_DELIVERY,PAUSE,FINISHED_L,TRADE_CANCELED,LOCKED,POP_ORDER_PAUSE";

    private $size = 100;
    private $total = 0;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'JD 订单同步获取操作';

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
        if($order_id > 0) {
            $outer = \App\Models\Order::where("order_id", $order_id)->select(["order_number"])->first();
            if(is_null($outer)) {
                //$outer_order_id = $outer->order_number;
                return $this->getOrderDetail($order_id, $store); //
                return false;
            }
            return $this->getOrderDetail($outer->order_number, $store);
        }
        $this->getOnline(1, $store);
        $this->info("Total ". $this->total);
        if($this->total > $this->size) {
            $pages = ceil($this->total / $this->size);
            //前面获取了第一页面数据了，所以从第二页开始
            for($i=1; $i<=$pages; $i++) {
                $this->getOnline($i, $store);
            }
        }
    }

    private function getOnline($page, $store) {
        $c = new \JdClient();
        $c->appKey = $store->key;
        $c->appSecret = $store->secret;
        $c->accessToken = $store->token;

        $req = new \PopOrderSearchRequest();
        $req->setOrderState($this->orderStatus);
        $req->setOptionalFields($this->fields);
        $req->setPage($page);
        $req->setPageSize($this->size);
        $resp = $c->execute($req, $c->accessToken);
        var_dump($resp);
        if($resp->jingdong_pop_order_search_responce->code==0) {
            $this->total = $resp->jingdong_pop_order_search_responce->searchorderinfo_result->orderTotal;
            foreach ($resp->jingdong_pop_order_search_responce->searchorderinfo_result->orderInfoList as $key=> $item) {
                $order = \App\Models\Order::where("order_number", $item->orderId)->first();
                if(is_null($order)) $order = new \App\Models\Order();
                $order->order_number = $item->orderId;
                $order->shop_id = $store->id;
                $order->total = $item->orderTotalPrice;
                $order->actual_total = $item->orderPayment;
                $order->freight_amount = $item->freightPrice;
                $order->create_time = $item->orderStartTime;
                $order->remarks = $item->orderRemark." 开票内容：".$item->invoiceInfo;
                //$order->orderPayment = $item->orderRemark;
                $order->product_nums = count($item->itemInfoList);
                //$order->orderState = count($item->itemInfoList);
                $pay_type = explode('-', $item->payType);
                $order->pay_type = \App\Enums\JD\OrderPayType::fromValue($pay_type[0]);
                //var_dump($item->orderState);
                $order->status = \App\Enums\JD\OrderState::fromKey($item->orderState);

                //用户查找
                $user = \App\Models\User::where("nick_name",$item->realPin)->first();
                if(is_null($user)) $user = new \App\Models\User();
                $user->nick_name = $item->realPin;
                $user->status = 1;
                $user->save();
                $order->user_id = $user->user_id;
                $order->dvy_flow_id = $item->waybill;

                //订单商品的同步
                foreach ($item->itemInfoList as $key=> $good) {
                    $goods_id = str_replace('sd', '', $good->outerSkuId);
                    if(empty($goods_id)) {
                        $goods_id = str_replace('sd', '', $good->productNo);
                    }
                    $orderItem = \App\Models\OrderItem::where("shop_id", $store->id)->where("order_number", $item->orderId)->where("prod_id", $goods_id)->first();
                    if(is_null($orderItem)) $orderItem = new \App\Models\OrderItem();
                    $orderItem->shop_id = $store->id;
                    $orderItem->order_number = $item->orderId;
                    $orderItem->prod_count = $good->itemTotal;
                    $orderItem->sku_id = (int)$good->outerSkuId;
                    $orderItem->prod_id = $goods_id;
                    $orderItem->sku_name = $good->skuName;
                    $orderItem->prod_name = $good->skuName;
                    $orderItem->price = $good->jdPrice;
                    $orderItem->user_id = $user->user_id;
                    $orderItem->product_total_amount = $good->jdPrice * $good->itemTotal;

                    $orderItem->save();
                    
                }
                $order->save();
            }
            
        }
    }

    private function getOrderDetail($order_id, $store) {
        $c = new \JdClient();
        $c->appKey = $store->key;
        $c->appSecret = $store->secret;
        $c->accessToken = $store->token;

        $req = new \PopOrderGetRequest();
        $req->setOptionalFields($this->fields);
        $req->setOrderId($order_id);
        $resp = $c->execute($req, $c->accessToken);
        if($resp->jingdong_pop_order_get_responce->code==0) {
            $item = $resp->jingdong_pop_order_get_responce->orderDetailInfo->orderInfo;
            $order = \App\Models\Order::where("order_number", $item->orderId)->first();
                if(is_null($order)) $order = new \App\Models\Order();
                $order->order_number = $item->orderId;
                $order->shop_id = $store->id;
                $order->total = $item->orderTotalPrice;
                $order->actual_total = $item->orderPayment;
                $order->freight_amount = $item->freightPrice;
                $order->create_time = $item->orderStartTime;
                $order->remarks = $item->orderRemark." 开票内容：".$item->invoiceInfo;
                //$order->orderPayment = $item->orderRemark;
                $order->product_nums = count($item->itemInfoList);
                //$order->orderState = count($item->itemInfoList);
                $pay_type = explode('-', $item->payType);
                $order->pay_type = \App\Enums\JD\OrderPayType::fromValue($pay_type[0]);
                //var_dump($item->orderState);
                $order->status = \App\Enums\JD\OrderState::fromKey($item->orderState);

                //用户查找
                $user = \App\Models\User::where("nick_name",$item->realPin)->first();
                if(is_null($user)) $user = new \App\Models\User();
                $user->nick_name = $item->realPin;
                $user->status = 1;
                $user->save();
                $order->user_id = $user->user_id;
                $order->dvy_flow_id = $item->waybill;

                //订单商品的同步
                foreach ($item->itemInfoList as $key=> $good) {
                    $goods_id = str_replace('sd', '', $good->outerSkuId);
                    if(empty($goods_id)) {
                        $goods_id = str_replace('sd', '', $good->productNo);
                    }
                    $orderItem = \App\Models\OrderItem::where("shop_id", $store->id)->where("order_number", $item->orderId)->where("prod_id", $goods_id)->first();
                    if(is_null($orderItem)) $orderItem = new \App\Models\OrderItem();
                    $orderItem->shop_id = $store->id;
                    $orderItem->order_number = $item->orderId;
                    $orderItem->prod_count = $good->itemTotal;
                    $orderItem->sku_id = (int)$good->outerSkuId;
                    $orderItem->prod_id = $goods_id;
                    $orderItem->sku_name = $good->skuName;
                    $orderItem->prod_name = $good->skuName;
                    $orderItem->price = $good->jdPrice;
                    $orderItem->user_id = $user->user_id;
                    $orderItem->product_total_amount = $good->jdPrice * $good->itemTotal;

                    $orderItem->save();
                    
                }
                $order->save();
        }
    }
}
