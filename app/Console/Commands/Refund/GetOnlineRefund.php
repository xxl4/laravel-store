<?php

namespace App\Console\Commands\Refund;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class GetOnlineRefund extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'refund:get:online {store_id} {refund_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '获取在线售后数据内容';

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
        $store_id = $this->argument('store_id');
        $refund_id = $this->argument("refund_id");
        $this->info("start get online goods from ".$store_id);
        $store = \App\Models\OrganizationStore::where("id", $store_id)->first();
        if(is_null($store)) {
            $this->error("no have");
            return false;
        }
        $data = ['store'=>$store,"refund_id"=>$refund_id];
        $this->info("refund:".$store->shop_type.":get:online params ".json_encode($data));
        Artisan::call("refund:".$store->shop_type.":get:online", $data);
    }
}
