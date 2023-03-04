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
        $access_token = Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);
        if($order_id > 0) {
            $outer = \App\Models\Order::where("order_id", $order_id)->select(["order_number"])->first();
            if(is_null($outer)) {
                $outer_order_id = $outer->order_number;
                return false;
            }else{
                //$this->getOrderDetail($outer->order_number);
                //$order_number="4996989871028342018";
                $this->getOrderDetail($order_number, $access_token , $store);
            }
        } 
        

        $this->getOnline(0,$outer_order_id, $access_token, $store);

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
        $resp = $req->execute($access_token);
        if($resp->code==10000) {
            $this->total = $resp->data->total;
            // 订单保存
            foreach($resp->data->shop_order_list as $key=>$item) {

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
        $resp = $req->execute($access_token);
        if($resp->code==10000) {
            $order_detail = $resp->data->shop_order_detail;
            $order = \App\Models\Order::where("order_number", $order_detail->order_id)->first();
            if(is_null($order)) $order = new \App\Models\Order();
            $order->order_id = $order_detail->order_id;
            $order->create_time = date("Y-m-d H:i:s",$order_detail->create_time);
            $order->shop_id = $store->id;
            $order->freight_amount = $order_detail->post_amount;
            $order->total = $order_detail->order_amount;
            $order->actual_total = $order_detail->pay_amount;
            $order->pay_type = $order_detail->pay_type;
            $order->user_id = $order_detail->pay_type;
            
            //加密内容处理
            $items = [];
            $list = [];
            $list['auth_id'] = $order_detail->order_id;
            $list['cipher_text'] = $resp->data->shop_order_detail->encrypt_post_tel;
            $items[] = $list;
            $list = [];
            $list['auth_id'] = $order_detail->order_id;
            $list['cipher_text'] = $resp->data->shop_order_detail->encrypt_post_receiver;
            $items[] = $list;
            $list = [];
            $list['auth_id'] = $order_detail->order_id;
            $list['cipher_text'] = $resp->data->shop_order_detail->post_addr->encrypt_detail;
            $items[] = $list;

            $decrypt = $this->batchDecrypt($order_detail->order_id, $access_token, $store, $items);
            var_dump($decrypt);
            
            
            $order->save();
        }
    }

    // 批量解密操作
    private function batchDecrypt($order_sn,$access_token, $store, $list = array()) {
        $redis_key = \App\Enums\CachePrefixEnum::DOUDIAN_STORE_ORDER_ENCRYPT.$order_sn;
        if(Cache::has($redis_key)) {
            //return Cache::get($redis_key);
        }
        $req = new \OrderBatchDecryptRequest();
        $q = new \OrderBatchDecryptParam();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $q->cipher_infos = $list;
        $req->setParam($q);
        $resp = $req->execute($access_token);
        var_dump($resp);
        if($resp->code==10000) {
            $data = $resp->data;
            $out = [];
            $out['encrypt_post_tel'] = $data->decrypt_infos[1]->decrypt_text;
            $out['encrypt_post_receiver'] = $data->decrypt_infos[2]->decrypt_text;
            $out['encrypt_detail'] = $data->decrypt_infos[0]->decrypt_text;
            Cache::put($redis_key, $out, 3600);
            return $out;
        }

    }
}
