<?php

namespace App\Console\Commands\Products\TB\Online;

use Illuminate\Console\Command;

class GetProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products.TB.get.online {store} {prod_id}';

    private $_field = "approve_status,num_iid,title,nick,type,cid,pic_url,num,props,valid_thru,list_time,price,has_discount,has_invoice,has_warranty,has_showcase,modified,delist_time,postage_id,seller_cids,outer_id,sold_quantity";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '获取天猫线上商品内容';

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
        //
        $this->info("get from online info start".$store);
        $c = new \TopClient();
        $c->appkey = $store->key;
        $c->secretKey = $store->scret;

        $size = 100;

        $req = new \ItemsOnsaleGetRequest();
        $req->setFields($this->_field);
        $req->setPageNo(1);
        $req->setPageSize($size);
        $resp = $c->execute($req, $store->token);
        //var_dump($resp);
        $total = $resp->total_results;
        var_dump($total,$resp);
        foreach ($resp->items->item as $key=> $item) {
            $item = (array) $item;
            $item['created_at'] = date("Y-m-d H:i:s");
            $item['updated_at'] = date("Y-m-d H:i:s");
            DB::table("taobao_goods")->insert($item);
        }

        $pages = ceil($total / $size);
        for ($i=2;$i<=$pages;$i++) {
            $req = new \ItemsOnsaleGetRequest();
            $req->setFields($this->_field);
            $req->setPageNo($i);
            $req->setPageSize($size);
            $resp = $c->execute($req, $store->token);
            foreach ($resp->items->item as $key=> $item) {
                $item = (array) $item;
                $item['created_at'] = date("Y-m-d H:i:s");
                $item['updated_at'] = date("Y-m-d H:i:s");
                DB::table("taobao_goods")->insert($item);
            }

        }
    }
}
