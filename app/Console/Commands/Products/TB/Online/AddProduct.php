<?php

namespace App\Console\Commands\Products\TB\Online;

use Illuminate\Console\Command;

class AddProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:TB:add:online {store} {prod_id} {data?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        ///
        $store = $this->argument('store');
        $prod_id = $this->argument("prod_id");

        $goods_upload_log = \App\Models\ProdOuter::where("prod_id", $this->prod_id)->where('shop_id', $store->id)->first();
        if(!is_null($goods_upload_log)) {
            $this->info("对应的的prod id 已在".$goods_upload_log->created_at."完成了上传");
            echo "对应的的prod id".$this->prod_id." 已存在\r\n";
            return false;
        }
        //检查对应的商品是否在线和存在
        $prod = \App\Models\Product::where("prod_id", $this->prod_id)->first();
        if(is_null($prod)) {
            $this->info("对应的的prod id 不存在");
            echo "对应的的prod id ".$this->prod_id." 不存在\r\n";
            return false;
        }

        //
        $this->info("get from online info start".$store);
        $c = new \TopClient();
        $c->appkey = $store->key;
        $c->secretKey = $store->scret;

        //获取到店铺上新的配置数据内容
        $storeConfig = Utils::GetShopConfig($store->id);

        //获取对应商品的内容，完成商品的数据更新
        $item=new \ItemAddRequest;
        $item->setNum($goods_number);
        $item->setPrice($prod->price);
        $item->setPicPath($matches[0]);
        $item->setType($storeConfig['type']);
        $item->setStuffStatus($storeConfig['stuffstatus']);
        $item->setTitle($title);
        $item->setOuterId($id);
        $item->setBarcode($isbn);
        $item->setDesc($name);
        $item->setLocationState($storeConfig['locationstate']);
        $item->setLocationcity($storeConfig['locationcity']);
        $item->setApproveStatus('onsale');
        $item->setCid($cid);
        $item->setSellerCids($sid);
        $item->setFreightPayer('buyer');
        $item->setPostageId($storeConfig['postageid']);
        $item->setAuctionPoint(5);
        $item->setHasInvoice('true');
        $item->setInputPids($attr_ids);
        $item->setInputStr($attr);
        $item->setIsXinpin('false'); //全新设置
        $item->setSubStock("2"); // 付款减库存
        $item->setHasDiscount("true");
        $item->setSellPoint($name);
        $resp = $this->client->execute($item, $this->sesskey);

    }
}
