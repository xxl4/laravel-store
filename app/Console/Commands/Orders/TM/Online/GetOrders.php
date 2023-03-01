<?php

namespace App\Console\Commands\Orders\TM\Online;

use Illuminate\Console\Command;

class GetOrders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orders:TM:get:online {store} {order_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '获取线上订单数据，默认最近一个月的周期';

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
        $this->info("get from online info start".$store);
        $c = new \TopClient();
        $c->appkey = $store->key;
        $c->secretKey = $store->scret;
    }
}
