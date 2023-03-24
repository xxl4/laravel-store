<?php

namespace App\Console\Commands\Products\DD\Online;

use Illuminate\Console\Command;
use App\Libs\Utils;

class AuditList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:DD:auditlist:online {store} {prod_id} {data?}';

    private $total = 0; // 商品总数量

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '获取审核结果内容';

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
        $store = $this->argument('store');
        $prod_id = $this->argument('prod_id'); // 但prod_id 为 0 的时候获取全部的商品数据

        //获取对应商品的内容，完成商品的数据更新
        $access_token = Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);
        
        $this->GetDetail($prod_id,$access_token, $store);
          
    }

    

    public function GetDetail($outer_id, $access_token, $store) {
        $req = new \ProductAuditListRequest();
        $p = new \ProductAuditListParam();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        if($outer_id > 0 ) $p->product_id = $outer_id;
        $p->page = 1;
        $p->size = 10;
        $p->publish_status = 2;
        $req->setParam($p);
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $req, $access_token);
        var_dump($resp);
        if($resp->code==10000) {
            //$product->outer_id = $item->product_id;
            //$product->prod_id = $item->out_product_id;
            //$product->shop_id = $store->id;
            //$product->shop_type = $store->shop_type;
            //$product->content = json_encode($item);
            //$product->save();
        }
    }
}
