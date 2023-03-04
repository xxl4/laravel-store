<?php
namespace App\Libs;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Cache;
use App\Enums\OrganizationUserEnableEnum;
use Carbon\Carbon;
use Cmgmyr\Messenger\Models\Message;
use Cmgmyr\Messenger\Models\Participant;
use Cmgmyr\Messenger\Models\Thread;


final class Utils
{
    /**
     * 获取机构的ID
     * @param int $user_id
     * @return int $organization ID
     * @link 
     */
    static function getOrganizationID($user_id) {
        $organization_id = Cache::get("organization_".$user_id);
        if(empty($organization_id)) {
            $organization = \App\Models\OrganizationUser::where("user_id", $user_id)->where("enable", OrganizationUserEnableEnum::Enable_1)->select(["organization_id"])->first();
            if(!is_null($organization)) {
                Cache::put("organization_".$user_id, $organization->organization_id);
                return $organization->organization_id;
            }
        }
        return $organization_id;
    }

    /**
     * 
     * 统一API格式输出
     * 
     */
    static function ApiResponse($data, $message='Success', $code='200') {
        return [
            'data' => $data,
            'code'  => $code,
            'message' => __($message)
        ];
    }

    static function GetCateProp($cid) {
        $ret = Cache::get(\App\Enums\CachePrefixEnum::CATEGORY_PROP_ID.$cid);
        if(empty($ret)) {
            $items = \App\Models\CategoryProp::where("category_id", $cid)->with("prop_value")->select(['prop_id'])->get();
            $ret = [];
            foreach($items as $key=>$item) {
                foreach($item->prop_value as $kk=>$value) {
                    $ret[$value->prop_id][$value->value_id] = $value->value_id;
                }
                
            }
            Cache::put(\App\Enums\CachePrefixEnum::CATEGORY_PROP_ID.$cid, $ret);
        }
        return $ret;
    }

    /**
     * 
     * 发送站点内消息模块
     * @param from uid
     * @param to uid
     * @param string subject
     * @param string body
     * @return boolean|null
     * 
     */
    static function sendMessage($from, $to,$subject,$body) {
        $thread = Thread::create([
            'subject' => $subject,
        ]);
        // Message
        Message::create([
            'thread_id' => $thread->id,
            'user_id' => $from,
            'body' => $body,
        ]);
        Participant::create([
            'thread_id' => $thread->id,
            'user_id' => $from,
            'last_read' => new Carbon(),
        ]);
        return $thread->addParticipant($to);
    }

    /**
     * 
     * 获取机构店铺配置内容
     * @param int org_id
     * @param int shop_id
     * @param string code
     * @param boolean is_update 是否强制更新
     * @return string|boolean
     */
    static function GetStoreConfig($org_id, $shop_id, $code, $is_update=false) {
        $key = \App\Enums\CachePrefixEnum::CONFIG_SHOP_CODE.$org_id."_".$shop_id."_".$code;
        if($is_update) Cache::delete($key);
        if(Cache::has($key)) {
            return Cache::get($key);
        }else{
            $data = \App\Models\Config::where("org_id", $org_id)->where("shop_id", $shop_id)->where("code", $code)->select(['value'])->first();
            if(is_null($data)) return false;
            Cache::put($key, $data);
            return $data;
        }
        return false;
    }

    /**
     * 
     * 获取Doudian Token 数据
     * @param int $shop_id
     */
    static function GetDoudianStoreToken($shop_id) {
        $key = \App\Enums\CachePrefixEnum::DOUDIAN_STORE_TOKEN.$shop_id;
        if(Cache::has($key)) {
            return Cache::get($key);
        }else{
            $store = \App\Models\OrganizationStore::where("id", $shop_id)->first();
            $req = new \TokenCreateRequest();
            $config = new \DoudianOpConfig();
            $config->appKey = $store->key;
            $config->appSecret = $store->secret;
            $req->setConfig($config);
            $param = new \TokenCreateParam();
            $param->code = "";
            $param->grant_type="authorization_self";
            $param->shop_id=$store->shop_id;
            $req->setParam($param);
            $resp = $req->execute("");
            if($resp->code=10000) {
                $access_token = \AccessToken::wrap($resp);
                $access_token = serialize($access_token);
                Cache::put(\App\Enums\CachePrefixEnum::DOUDIAN_STORE_TOKEN.$shop_id, $access_token, $resp->data->expires_in);
                return $access_token;
            }
        }
        return false;
    }
}
