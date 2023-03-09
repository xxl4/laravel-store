<?php

namespace App\Console\Commands\Products\DD\Online;

use Illuminate\Console\Command;

class AddPic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:DD:addpic:online {store} {prod_id} {data?} {file?} {url?}';

    private $folder_id = null;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '抖店图片上传';

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
        $store = $this->argument('store');
        $prod_id = $this->argument("prod_id");
        $file = $this->argument("file");
        $picurl = $this->argument("url");

        $this->folder_id = "70522347406649264791409";

        $picurl = "
        https://sdimage.oss-cn-shanghai.aliyuncs.com/20230309140817.png";
        //
        //获取对应商品的内容，完成商品的数据更新
        $access_token = \App\Libs\Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);

        $req = new \MaterialUploadImageSyncRequest();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $p = new \MaterialUploadImageSyncParam();
        $p->folder_id = $this->folder_id;
        $p->need_distinct = true; // 唯一

        $p->url = $picurl."?x-oss-process=image/crop,x_10,y_10,w_600,h_600,g_se";
        $material_name = basename($picurl);
        $p->material_name = $material_name;
        $req->setParam($p);

        $resp = $req->execute($access_token);
        var_dump($resp);
    }
}
