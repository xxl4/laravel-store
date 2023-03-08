<?php

namespace App\Console\Commands\Brand;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class GetOnline extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'brand:online {store_id} {type} {brand_id} {cid?} {data?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '品牌获取与操作';

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
        $brand_id = $this->argument("brand_id");
        $cid = $this->argument("cid");
        $options = $this->argument("data");
        $this->info("start ".$type." online goods from ".$store_id);
        $store = \App\Models\OrganizationStore::where("id", $store_id)->first();
        if(is_null($store)) {
            $this->error("no have");
            return false;
        }
        $options['org_id'] = $store->organization_id;
        $data = ['store'=>$store,"brand_id"=>$brand_id, "data"=>$options, 'cid'=>$cid];
        $this->info("brand:online:".$store->shop_type.":".$type." params ".json_encode($data));
        Artisan::call("brand:online:".$store->shop_type.":".$type, $data);
    }
}
