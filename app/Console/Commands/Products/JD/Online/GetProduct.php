<?php

namespace App\Console\Commands\Products\JD\Online;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class GetProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:JD:get:online {store} {prod_id} {data?}';

    private $_field = 'title,offlineTime,onlineTime,wareId,wareStatus,categoryId,outerId,itemNum,colType,stockNum';

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
        $c = new \JdClient();
        $c->appKey = $store->key;
        $c->appSecret = $store->scret;
        $c->accessToken = $store->token;

        // 查找有效的商品
        $size = 100;
        $req = new \WareReadSearchWare4ValidRequest();
        $req->setPageNo(1);
        $req->setPageSize($size);
        $req->setField($this->_field);
        $req->setOrderField("wareId");
        $req->setOrderType("desc");
        //$resp = \App\Libs\Utils::execThirdStoreApi($store->id, $c, $c->accessToken, $req);
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $c, $c->accessToken, $req);

        $total = $resp->jingdong_ware_read_searchWare4Valid_responce->page->totalItem;

        echo "Goods Total ".$total."\r\n";

        $items = (array)$resp->jingdong_ware_read_searchWare4Valid_responce->page->data;
        $goods = [];
        foreach ($items as $key=>$item) {
            $item = (array) $item;

            $checkGood = \App\Models\ProdOuter::where("outer_id", $item['wareId'])->first();
            if(!is_null($checkGood)) continue;

            $item['outerId'] = str_replace('sd','', $item['outerId']);

            $checkGood = new \App\Models\ProdOuter();

            
            $checkGood->outer_id = trim($item['wareId']);
            $checkGood->content = json_encode($item);
            $checkGood->shop_id = $store->id;
            $checkGood->shop_type = $store->shop_type;
            $checkGood->prod_id = trim($item['outerId']);
            $checkGood->save();
        }
        sleep(1);
        $pages = ceil($total / $size);
        //$goods = [];
        for ($i=1;$i<=$pages;$i++) {
            $this->info($i);
            $req = new \WareReadSearchWare4ValidRequest();
            $req->setPageNo($i);
            $req->setPageSize($size);
            $req->setField($this->_field);
            $req->setOrderField("wareId");
            $req->setOrderType("desc");
            $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $c, $c->accessToken, $req);

            $items = (array)$resp->jingdong_ware_read_searchWare4Valid_responce->page->data;
            $goods = [];
            foreach ($items as $key=>$item) {
                $good = [];
                $item = (array) $item;
                $checkGood = \App\Models\ProdOuter::where("outer_id", $item['wareId'])->first();
                if(!is_null($checkGood)) continue;
                $item['outerId'] = str_replace('sd','', $item['outerId']);

                $checkGood = new \App\Models\ProdOuter();
                $checkGood->outer_id = trim($item['wareId']);
                $checkGood->content = json_encode($item);
                $checkGood->shop_id = $store->id;
                $checkGood->shop_type = $store->shop_type;
                $checkGood->prod_id = trim($item['outerId']);
                $checkGood->save();
            }
            sleep(1);
        }


    }
}
