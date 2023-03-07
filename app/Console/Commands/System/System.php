<?php

namespace App\Console\Commands\System;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class System extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'system:online {store_id} {type} {data?}';

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
        //
        $store_id = $this->argument('store_id');
        $type = $this->argument('type');
        $options = $this->argument("data");
        $this->info("start ".$type." online goods from ".$store_id);
        $store = \App\Models\OrganizationStore::where("id", $store_id)->first();
        if(is_null($store)) {
            $this->error("no have");
            return false;
        }
        $options['org_id'] = $store->organization_id;
        $data = ['store'=>$store, "data"=>$options];
        $this->info("system:online".$store->shop_type.":".$type." params ".json_encode($data));
        Artisan::call("system:online:".$store->shop_type.":".$type."", $data);
    }
}
