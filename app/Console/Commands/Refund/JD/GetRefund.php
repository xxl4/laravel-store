<?php

namespace App\Console\Commands\Refund\JD;

use Illuminate\Console\Command;

class GetRefund extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'refund:JD:get:online {store} {refund_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'JD 在线售后列表';

    private $total = 0;
    private $size = 2;

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
        $refund_id = $this->argument('refund_id'); // 但prod_id 为 0 的时候获取全部的商品数据
        $outer_refund_id = 0;
        if($outer_refund_id > 0) {
            $outer = \App\Models\RefundOrder::where("order_id", $order_id)->select(["order_number"])->first();
            if(is_null($outer)) {
                // todo
                return false;
            }
        }
        $this->getOnline(1, $store);

    }

    private function getOnline($page, $store) {
        
    }
}
