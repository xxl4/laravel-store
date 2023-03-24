<?php

namespace App\Console\Commands\Orders\DD;

use Illuminate\Console\Command;
use App\Libs\Utils;
use Illuminate\Support\Facades\Cache;

class GetOrders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orders:DD:get:online {store} {order_id} {data?}';

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
        $access_token = Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);
        if($order_id > 0) {
            $outer = \App\Models\Order::where("order_id", $order_id)->select(["order_number"])->first();
            if(is_null($outer)) {
                return $this->getOrderDetail($order_id, $access_token , $store);
                return false;
            }else{
                return $this->getOrderDetail($outer->order_number, $access_token , $store);
            }
        } 
        

        $this->getOnline(0,$outer_order_id, $access_token, $store);
        echo $this->total."\r\n";

        if($this->total > $this->size) {
            $pages = ceil($this->total / $this->size);
            //前面获取了第一页面数据了，所以从第二页开始
            for($i=1; $i<=$pages; $i++) {
                $this->getOnline($i,$outer_order_id, $access_token, $store);
            }
        }
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
        //$resp = \App\Libs\Utils::execThirdStoreApi($store->id, $req, $access_token);

        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $req, $access_token);

        //var_dump($resp);
        if($resp->code==10000) {
            $this->total = $resp->data->total;
            // 订单保存
            foreach($resp->data->shop_order_list as $key=>$item) {
                $this->saveToDB($item, $store, $access_token);
            }
        }
        
    }

     /**
     * 
     * 获取订单详情
     * @param int $shop_order_id
     */
    private function getOrderDetail($shop_order_id, $access_token, $store) {
        $req = new \OrderOrderDetailRequest();
        $p = new \OrderOrderDetailParam();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $p->shop_order_id = $shop_order_id;
        $req->setParam($p);
        //$resp = \App\Libs\Utils::execThirdStoreApi($store->id, $req, $access_token);
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $req, $access_token);
        //var_dump($resp);
        if($resp->code==10000) {
            $order_detail = $resp->data->shop_order_detail;
            var_dump($order_detail);
            $this->saveToDB($order_detail, $store, $access_token);
        }
    }

    public function saveToDB($order_detail, $store, $access_token){
        $order = \App\Models\Order::where("order_number", $order_detail->order_id)->first();
        if(is_null($order)) $order = new \App\Models\Order();
        $order->order_id = $order_detail->order_id;
        $order->create_time = date("Y-m-d H:i:s",$order_detail->create_time);
        $order->shop_id = $store->id;
        $order->freight_amount = $order_detail->post_amount / 100;
        $order->total = $order_detail->order_amount / 100;
        $order->actual_total = $order_detail->pay_amount / 100;
        $order->pay_type = $order_detail->pay_type;
        $order->remarks = $order_detail->buyer_words;
        $order->order_number = $order_detail->order_id;
        $order->status = $order_detail->order_status;
        //var_dump($order_detail);exit;
        $order->product_nums = 1;

        
        
        //加密内容处理
        $items = [];
        $list = [];
        $list['auth_id'] = $order_detail->order_id;
        $list['cipher_text'] = $order_detail->encrypt_post_tel;
        $items[] = $list;
        $list = [];
        $list['auth_id'] = $order_detail->order_id;
        $list['cipher_text'] = $order_detail->encrypt_post_receiver;
        $items[] = $list;
        $list = [];
        $list['auth_id'] = $order_detail->order_id;
        $list['cipher_text'] = $order_detail->post_addr->encrypt_detail;
        $items[] = $list;

        $decrypt = $this->batchDecrypt($order_detail->order_id, $access_token, $store, $items);
        var_dump($decrypt);
        $user = \App\Models\User::where("user_mobile",$decrypt['encrypt_post_tel'])->first();
        if(is_null($user)) $user = new \App\Models\User();
        //$user->shop_id = $store->id;
        $user->user_mobile = $decrypt['encrypt_post_tel'];
        $user->real_name = $decrypt['encrypt_post_receiver'];
        $user->user_memo = $decrypt['encrypt_detail'];
        $user->save();
        $order->user_id = $user->user_id;
        $order->pay_time = date("Y-m-d H:i:s", $order_detail->pay_time);
        if(!empty($order_detail->pay_time)) $order->is_payed = 1;

        $order->save();

        //$order->reduce_amount = $item->discount_fee;
        // 订单的商品内容
        $sku_order_list = $order_detail->sku_order_list;
        foreach ($sku_order_list as $k => $sku_order) {
            if($sku_order->order_status !=2) {
                continue;
            }

            //var_dump($sku_order->code);exit;

            $order_item = \App\Models\OrderItem::where("shop_id", $store->id)->where("order_number",$sku_order->order_id)->where("prod_id", $sku_order->out_product_id)->where("sku_id", $sku_order->out_sku_id)->first();
            if(is_null($order_item)) $order_item = new \App\Models\OrderItem();
            $order_item->shop_id = $store->id;
            $order_item->order_number = $sku_order->order_id;
            $order_item->prod_id = $sku_order->out_product_id;
            $order_item->sku_id = $sku_order->out_sku_id;
            $order_item->prod_count = $sku_order->item_num;
            $order_item->prod_name = $sku_order->product_name;
            $order_item->sku_name = $sku_order->product_name;
            $order_item->pic = $sku_order->product_pic;
            $order_item->user_id = $user->user_id;
            $order_item->price = $sku_order->pay_amount / 100;
            $order_item->product_total_amount = $sku_order->pay_amount / 100;
            //var_dump($sku_order);
            $order_item->rec_time = date("Y-m-d H:i:s", $sku_order->create_time);

            $order_item->save();
            /*
            $ginfo = [];
            $goods_id = $sku_order->out_sku_id;
            
            $ginfo['goods_id'] = $real_goods_id; //修改out sku id data
            $ginfo['seat'] = $seat; //修改out sku id data
            $ginfo['goods_price'] = $sku_order->origin_amount;
            $ginfo['goods_number'] = $sku_order->item_num;
            $ginfo['goods_name'] = $sku_order->product_name;

            // 用户保存对应的订单的商品情况，方便发货处理
            $doudian_redis_order_goods = [];
            $doudian_redis_order_goods['goods_id'] = $ginfo['goods_id'];
            $doudian_redis_order_goods['product_id'] = $sku_order->product_id;
            Redis::set("doudian_sync_".$order_sn,json_encode($doudian_redis_order_goods));
            Redis::expire("doudian_sync_".$order_sn, 180000); // 配置过期时间
            */
            //var_dump($sku_order);exit;


            //$goods[] = $ginfo;
        }

        //exit;
    }
    // 批量解密操作
    private function batchDecrypt($order_sn,$access_token, $store, $list = array()) {
        $redis_key = \App\Enums\CachePrefixEnum::DOUDIAN_STORE_ORDER_ENCRYPT.$order_sn;
        if(Cache::has($redis_key)) {
            return Cache::get($redis_key);
        }
        $req = new \OrderBatchDecryptRequest();
        $q = new \OrderBatchDecryptParam();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $q->cipher_infos = $list;
        $req->setParam($q);
        //$resp = \App\Libs\Utils::execThirdStoreApi($store->id, $req, $access_token);
        //@link https://op.jinritemai.com/docs/api-docs/15/982
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $req, $access_token);
        //var_dump($resp);
        if($resp->code==10000) {
            $data = $resp->data;
            $out = [];
            $out = [];
            foreach($data->decrypt_infos as $key=>$item) {
                if($item->data_type==3) $out['encrypt_post_tel'] = $item->decrypt_text;
                if($item->data_type==2) $out['encrypt_post_receiver'] = $item->decrypt_text;
                if($item->data_type==1) $out['encrypt_detail'] = $item->decrypt_text;
            }
            Cache::put($redis_key, $out, 36000);
            return $out;
        }

    }

}
