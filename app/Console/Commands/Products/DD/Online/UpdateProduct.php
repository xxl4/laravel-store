<?php

namespace App\Console\Commands\Products\DD\Online;

use Illuminate\Console\Command;
use App\Libs\Utils;

class UpdateProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:DD:update:online {store} {prod_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '更新抖店线上商品内容';

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
        $prod_id = $this->argument("prod_id");
        //
        $this->info("get from online info start".$store);

        $access_token = Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);

        //获取对应商品的内容，完成商品的数据更新

        
        
    }
}
