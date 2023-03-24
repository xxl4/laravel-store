<?php

namespace App\Console\Commands\System;

use Illuminate\Console\Command;

class Push extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'system:push';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '定时发送数据到队列中去处理';

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
        $this->push("DD", 3);
        $this->skuslist();
        //$this->push("JD", 4);
        //$this->push("TM", 1);
        //$this->push("TB", 2);
        
    }

    public function push($shop_type, $shop_id) {
        //同步订单
        $data = [];
        $data['shop_id'] = $shop_id;
        $data['act_type'] = "sync_order";
        $data['order_id'] = 0;
        \App\Libs\Utils::pushQueueByShopType($shop_type, $data);
        
        //同步售后
        $data['act_type'] = "sync_refund_order";
        $data['refund_id'] = 0;
        \App\Libs\Utils::pushQueueByShopType($shop_type, $data);
        //同步商品
        $data['act_type'] = "sync_good";
        $data['prod_id'] = 0;
        \App\Libs\Utils::pushQueueByShopType($shop_type, $data);
        //上新
        $data['act_type'] = "upload";
        $data['prod_id'] = 719678;
        \App\Libs\Utils::pushQueueByShopType($shop_type, $data);
        //同步库存
        $data['act_type'] = "sync_good";
        $data['prod_id'] = 3554815857253334579;
        \App\Libs\Utils::pushQueueByShopType($shop_type, $data);
        //上架
        $data['act_type'] = "putaway";
        $data['prod_id'] = 3554815857253334579;
        \App\Libs\Utils::pushQueueByShopType($shop_type, $data);
        //下架
        $data['act_type'] = "down";
        $data['prod_id'] = 0;
        \App\Libs\Utils::pushQueueByShopType($shop_type, $data);
        //添加sku
        //删除SKU
        //修改价格
        //发货
        
    }

    public function skuslist() {
        $shop_type = "TM";
        $shop_id = 1;
        // 同步商品
        $items = \App\Models\ProdOuter::where("shop_id", $shop_id)->select("prod_id")->limit(1)->get();
        foreach($items as $key=>$item) {
            $data = [];
            $data['act_type'] = "skulist";
            $data['prod_id'] = $item->prod_id;
            $data['shop_id'] = $shop_id;
            \App\Libs\Utils::pushQueueByShopType($shop_type, $data);
        }
        //同步订单状态
        $items = \App\Models\Order::where("shop_id", $shop_id)->select("order_id")->limit(10)->get();
        foreach($items as $key=>$item) {
            $data = [];
            $data['act_type'] = "skulist";
            $data['order_id'] = $item->order_id;
            $data['shop_id'] = $shop_id;
            \App\Libs\Utils::pushQueueByShopType($shop_type, $data);
        }


    }
}
