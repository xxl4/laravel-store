<?php

namespace App\Console\Commands\Products\JD\Online;

use Illuminate\Console\Command;

class UpdateProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:JD:update:online {store} {prod_id} {data?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'JD 商品的批量操作内容';

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
        

        //获取对应商品的内容，完成商品的数据更新
        
    }
}
