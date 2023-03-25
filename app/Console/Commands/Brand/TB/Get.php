<?php

namespace App\Console\Commands\Brand\TB;

use Illuminate\Console\Command;
use App\Libs\Utils;

class Get extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'brand:online:TB:get {store} {brand_id} {cid?} {data?}';

    private $_fileds = "brand.vid, brand.name, item_cat.cid, item_cat.name, item_cat.status,item_cat.sort_order,item_cat.parent_cid,item_cat.is_parent,xinpin_item_cat.cid, xinpin_item_cat.name, xinpin_item_cat.status,xinpin_item_cat.sort_order,xinpin_item_cat.parent_cid,xinpin_item_cat.is_parent";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'TB';

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
        $brand_id = $this->argument('brand_id'); 
        $cid = $this->argument('cid'); // 但prod_id 为 0 的时候获取全

        $c = new \TopClient();
        $c->appkey = $store->key;
        $c->secretKey = $store->secret;
        //@link https://open.taobao.com/v2/doc?spm=a219a.15212433.0.0.54c6669abptZAk#/apiFile?docType=2&docId=161
        $req = new \ItemcatsAuthorizeGetRequest();
        $req->setFields($this->_fileds);
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $c, $store->token, $req);
        //todo 
        foreach($resp->seller_authorize->item_cats->item_cat as $key=>$item) {
            var_dump($item);

        }
    }
}
