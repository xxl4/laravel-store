<?php

namespace App\Console\Commands\System\DD;

use Illuminate\Console\Command;

class TestConfig extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'system:online:DD:test_config {store} {data?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'DD';

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
        $data = $this->argument('data');
        // 获取店铺内容

        $ret = \App\Libs\Utils::GetDoudianStoreToken($store->id);
        if($ret==false) return false;

        return true;
    }
}
