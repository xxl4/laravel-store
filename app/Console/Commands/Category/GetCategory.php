<?php

namespace App\Console\Commands\Category;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class GetCategory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'category:online {store_id} {type} {cid}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '分类获取操作';

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
        $cid = $this->argument("cid");
        $this->info("start ".$type." online goods from ".$store_id);
        $store = \App\Models\OrganizationStore::where("id", $store_id)->first();
        if(is_null($store)) {
            $this->error("no have");
            return false;
        }
        $data = ['store'=>$store,"cid"=>$cid];
        $this->info("category:".$store->shop_type.":".$type.":online params ".json_encode($data));
        Artisan::call("category:".$store->shop_type.":".$type.":online", $data);
    }
}
