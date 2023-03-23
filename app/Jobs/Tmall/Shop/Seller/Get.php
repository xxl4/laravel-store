<?php

namespace App\Jobs\Tmall\Shop\Seller;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class Get implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $shop_id; //店铺ID
    protected $user_id; // 用户ID

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($shop_id, $user_id)
    {
        //
        $this->shop_id = $shop_id;
        $this->user_id = $user_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $store = \App\Models\OrganizationStore::where("id", $this->shop_id)->first();
        if(is_null($store)) {
            $subject = "店铺不存在";
            $message = "请检查您店铺是否存在";
            Utils::sendMessage(1, $this->user_id, $subject, $message);
            return false;
        }
        if(empty($store->key) || empty($store->secret)) {
            $subject = "店铺内容不完整";
            $message = "请检查您店铺信息是否完整";
            Utils::sendMessage(1, $this->user_id, $subject, $message);
            return false;
        }
        $c = new \TopClient();
        $c->appkey = $store->key;
        $c->secretKey = $store->scret;
        $req = new \ShopSellerGetRequest();
        $req->setFields('sid,title,pic_path');
        $resp = \App\Libs\Utils::execThirdStoreApi($store->id, $c, $store->token, $req);
        if (!property_exists($resp, 'shop_seller_get_response')) {
            $subject = "店铺".$this->shop_id."验证失败，请确认好内容继续重试";
            $message = "请检查您店铺信息是否完整";
            Utils::sendMessage(1, $this->user_id, $subject, $message);
            return false;
        }
        $subject = "店铺".$this->shop_id."验证成功！";
        $message = "恭喜您店铺验证成功";
        Utils::sendMessage(1, $this->user_id, $subject, $message);
        return true;
    }
}
