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
    protected $signature = 'products:TB:get:online {store} {prod_id} {data?}';

    private $_field = "approve_status,num_iid,title,nick,type,cid,pic_url,num,props,valid_thru,list_time,price,has_discount,has_invoice,has_warranty,has_showcase,modified,delist_time,postage_id,seller_cids,outer_id,sold_quantity";

    private $total = 0;
    private $size = 100;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '获取淘宝线上商品内容';

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
        //
        $this->getOnline(1, $store);

        $this->info("get from online info Total ".$this->total);

        // 如果有超过size的，需要做分页动作
        if($this->total > $this->size) {
            $pages = ceil($this->total / $this->size);
            //前面获取了第一页面数据了，所以从第二页开始
            for($i=2; $i<=$pages; $i++) {
                $this->getOnline($i, $store);
            }
        } 

    }

    private function getOnline($page, $store) {
        $this->info("pages". $page);
        $c = new \TopClient();
        $c->appkey = $store->key;
        $c->secretKey = $store->secret;

        $req = new \ItemsOnsaleGetRequest();
        $req->setFields($this->_field);
        $req->setPageNo($page);
        $req->setPageSize($this->size);
        $resp = $c->execute($req, $store->token);
        //var_dump($resp,$req, $store,$c);exit;
        $this->total = (int)$resp->total_results;
        //var_dump($total,$resp);
        foreach ($resp->items->item as $key=> $item) {
            
            //$item = (array) $item;
            $product = \App\Models\ProdOuter::where("outer_id", $item->num_iid)->first();
            if(is_null($product)) $product = new \App\Models\ProdOuter();
            $product->outer_id = $item->num_iid;
            $product->prod_id = (int)$item->outer_id;
            $product->shop_id = $store->id;
            $product->shop_type = $store->shop_type;
            $product->content = json_encode($item);
            $product->save();
        }

        
    }
}
