<?php

namespace App\Console\Commands\Products\DD\Online;

use Illuminate\Console\Command;
use App\Libs\Utils;

class DeleteProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:DD:delete:online {store} {prod_id}';

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
        //
        $store = $this->argument('store');
        $prod_id = $this->argument("prod_id");
        //
        $this->info("get from online info start".$store);

        //获取对应商品的内容，完成商品的数据更新
        $access_token = Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);

        //获取对应商品的内容，完成商品的数据更新
        if($prod_id > 0) {
            $outer = \App\Models\ProdOuter::where("prod_id", $prod_id)->select(["outer_id"])->first();
            if(is_null($outer)) {
                //$outer_prod_id = $outer->outer_id;
                //$this->EditDetail($prod_id, $access_token, $store);
                return false;
            }
            return $this->delete($outer->outer_id, $access_token, $store);
        }
    }

    private function delete($outer_id, $access_token, $store) {
        $req = new \ProductDelRequest();
        $p = new \ProductDelParam();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $p->product_id = $outer_id;
        $p->delete_forever = true;
        $req->setParam($p);
        $resp = $req->execute($access_token);
        var_dump($resp, $outer_id);
        if($resp->code==10000) {
            echo $outer_id."已成功被删除";
            \App\Models\ProdOuter::where("outer_id", $outer_id)->where("shop_id", $store->id)->delete();
        }
    }
}
