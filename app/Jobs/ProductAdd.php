<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Redis;

class ProductAdd implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $order_type;
    private $prod_id;
    private $org_id;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($order_type, $prod_id, $org_id)
    {
        //
        $this->order_type = $order_type;
        $this->prod_id = $prod_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $item = [];
        $item['org_id'] = $this->org_id;
        $item['order_type'] = $this->order_type;
        $item['prod_id'] = $this->prod_id;
        Rdis::plush(\App\Enums\RedisQueueEnum::PRODUCT_UPLOAD_QUEUE."_".$this->org_id, json_encode($item));
        
    }
}
