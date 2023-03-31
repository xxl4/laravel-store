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

    private $folder_id = 0;

    private $prod_id = 0;

    private $imgUrl="https://sdimage.oss-cn-shanghai.aliyuncs.com/";

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
        $this->prod_id = $this->argument("prod_id");
        $file = $this->argument("file");
        $picurl = $this->argument("url");

        //$this->folder_id = "70522347406649264791409";

        //获取到店铺上新的配置数据内容
        $storeConfig = \App\Libs\Utils::GetShopConfig($store->id);

        //$picurl = "https://sdimage.oss-cn-shanghai.aliyuncs.com/20230309140817.png";
        $photo_max_height = $storeConfig['photo_max_height'];
        //
        //获取对应商品的内容，完成商品的数据更新
        $access_token = \App\Libs\Utils::GetDoudianStoreToken($store->id);
        $access_token = unserialize($access_token);

        //检查对应的商品是否在线和存在
        $prod = \App\Models\Product::where("prod_id", $this->prod_id)->first();
        if(is_null($prod)) {
            $this->info("对应的的prod id 不存在");
            echo "对应的的prod id ".$this->prod_id." 不存在\r\n";
            return false;
        }


        //上传主图
        if(!empty($prod->pic)) {
            //判断是否有http开头的加对于的地址内容
            $url = $prod->pic;
            if(!\App\Libs\Utils::checkUrl($url)) $url = $this->imgUrl.$prod->pic."?x-oss-process=image/resize,m_pad,h_".$photo_max_height.",w_".$photo_max_height.",color_FFffff";
            $items[] = [
                'url' => $url,
                'request_id'=> $this->prod_id,
                'folder_id' => $this->folder_id,
                'material_type' => 'photo',
                'name'  => $this->prod_id."_main"
            ];
        }
        //上传SKU图片
        $skus = \App\Models\Sku::where("prod_id",$this->prod_id)->select(["pic","sku_id"])->get();
        foreach($skus as $key=>$sku) {
            if(empty($sku->pic)) continue;
            $url = $sku->pic;
            if(!\App\Libs\Utils::checkUrl($url)) $url = $this->imgUrl.$sku->pic."?x-oss-process=image/resize,m_pad,h_".$photo_max_height.",w_".$photo_max_height.",color_FFffff";
            $items[] = [
                'url' => $url,
                'request_id'=> $this->prod_id."_".$sku->sku_id,
                'folder_id' => $this->folder_id,
                'material_type' => 'photo',
                'name'  => $this->prod_id.'_'.$sku->sku_id."_main"
            ];
        }
        
        //上传相册图片
        $imgs = \App\Models\AttachFile::where("file_join_id", $this->prod_id)->select(["file_id","file_path"])->get();
        foreach($imgs as $kk => $img) {
            if(empty($img->file_path)) continue;
            $url = $img->file_path;
            if(!\App\Libs\Utils::checkUrl($url)) $url = $this->imgUrl.$img->file_path."?x-oss-process=image/resize,m_pad,h_".$photo_max_height.",w_".$photo_max_height.",color_FFffff";
            $items[] = [
                'url' => $url,
                'request_id'=> $this->prod_id."_".$img->file_id,
                'folder_id' => $this->folder_id,
                'material_type' => 'photo',
                'name'  => $this->prod_id.'_'.$img->file_id."_gallery"
            ];
        }
        //var_dump($items);
        $this->batchUploadImageSync($items, $access_token, $store);

        //上传主视频内容
        $items = [];
        if(!empty($prod->video)) {
            //判断是否有http开头的加对于的地址内容
            $url = $prod->video;
            if(!\App\Libs\Utils::checkUrl($url)) $url = $this->imgUrl.$prod->video;
            $items[] = [
                'url' => $url,
                'request_id'=> $this->prod_id,
                'folder_id' => $this->folder_id,
                'material_type' => 'video',
                'name'  => $this->prod_id."_main_video"
            ];
        }
        $this->batchUploadVideoAsync($items, $access_token, $store);
        
    }

    //@link https://op.jinritemai.com/docs/api-docs/69/1616
    public function batchUploadImageSync($materials, $access_token, $store) {
        //MaterialBatchUploadImageSyncRequest
        $req = new \MaterialBatchUploadImageSyncRequest();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $p = new \MaterialBatchUploadImageSyncParam();
        //$p->folder_id = $this->folder_id;
        //$materials = [];
        $p->materials = $materials;
        $p->need_distinct = true; // 唯一
        $req->setParam($p);
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $req, $access_token);
        foreach($resp->data->success_map as $key=>$item) {
            $pic = \App\Models\AttachFileMapping::where("file_id", $item->Name)->first();
            if(is_null($pic)) $pic = new \App\Models\AttachFileMapping();
            $pic->status = $item->AuditStatus;
            $pic->file_id = $item->Name;
            if(empty($item->ByteUrl)) {
                $pic->url = $item->MaterialId;
            }else{
                $pic->url = $item->ByteUrl;
            }

            $pic->file_type = 1;
            
            $pic->shop_id = $store->id;
            $pic->save();
        }
    }
    //@link https://op.jinritemai.com/docs/api-docs/69/1617
    public function batchUploadVideoAsync($materials, $access_token, $store) {
        $req = new \MaterialBatchUploadVideoAsyncRequest();
        $config = new \DoudianOpConfig();
        $config->appKey = $store->key;
        $config->appSecret = $store->secret;
        $req->setConfig($config);
        $p = new \MaterialBatchUploadVideoAsyncParam();
        $p->materials = $materials;
        $req->setParam($p);
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $req, $access_token);
        foreach($resp->data->success_map as $key=>$item) {
            $pic = \App\Models\AttachFileMapping::where("file_id", $item->Name)->first();
            if(is_null($pic)) $pic = new \App\Models\AttachFileMapping();
            $pic->status = $item->AuditStatus;
            $pic->file_id = $item->Name;
            if(isset($item->ByteUrl)) {
                $pic->url = $item->MaterialId;
            }else{
                $pic->url = $item->ByteUrl;
            }

            $pic->file_type = \App\Enums\FileTypeEnum::PROD_MAIN_VIDEO;
            $pic->shop_id = $store->id;
            $pic->save();
        }
    }
}
