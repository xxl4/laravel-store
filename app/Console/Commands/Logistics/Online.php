<?php

namespace App\Console\Commands\Logistics;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class Online extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'logistics:online {store_id} {type} {order_id} {data?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '物流模块';

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
        $type = $this->argument('type');
        $order_id = $this->argument('order_id');
        $options = $this->argument("data");
        $this->info("start ".$type." online logistics from ".$store_id);
        $store = \App\Models\OrganizationStore::where("id", $store_id)->first();
        if(is_null($store)) {
            $this->error("no have");
            return false;
        }
        $options['org_id'] = $store->organization_id;
        $data = ['store'=>$store,"order_id"=>$order_id, "data"=>$options];
        $this->info("logistics:".$store->shop_type.":".$type.":online params ".json_encode($data));
        Artisan::call("logistics:".$store->shop_type.":".$type.":online", $data);
    }
}
