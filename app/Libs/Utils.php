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
        if(is_null($data)) $data = (array) $data;
        return [
            'data' => $data,
            'code'  => $code,
            'message' => __($message)
        ];
    }

    /**
     * 
     * 获取分类的属性名称
     * @param int cid
     * @param int shop_id
     * @return boolean|array
     * 
     */
    static function GetCateProp($cid, $shop_id=0) {
        $cacheKey = \App\Enums\CachePrefixEnum::CATEGORY_PROP_ID.$cid;
        if(Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }else{
            $items = \App\Models\CategoryProp::where("category_id", $cid)->select(['prop_id'])->get();
            $ret = [];
            foreach($items as $key=>$item) {
                $ret[$item->prop_id] = \App\Models\ProdProp::where("prop_id", $item->prop_id)->value("prop_name");
            }
            Cache::put($cacheKey, $ret);
        }
        return $ret;
    }

      /**
     * 
     * 获取分类的属性名称
     * @param int cid
     * @param int shop_id
     * @return boolean|array
     * 
     */
    static function GetCatePropValue($cid) {
        $cacheKey = \App\Enums\CachePrefixEnum::CATEGORY_PROP_VALUE_ID.$cid;
        if(Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }else{
            $items = \App\Models\CategoryProp::where("category_id", $cid)->select(['prop_id'])->get();
            $ret = [];
            foreach($items as $key=>$item) {
                $prop = \App\Models\ProdProp::where("prop_id", $item->prop_id)->first();
                $ret[$item->prop_id]['name'] = $prop->prop_name;
                $ret[$item->prop_id]['rule'] = json_decode($prop->rule);
                $ret[$item->prop_id]['prop_id'] = $prop->prop_id;
                $ret[$item->prop_id]['prop_value'] = \App\Models\ProdPropValue::where("prop_id",$prop->prop_id)->pluck("prop_value","value_id");
            }
            Cache::put($cacheKey, $ret);
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
        if($is_update) return Cache::delete($key);
        if(Cache::has($key)) {
            return Cache::get($key);
        }else{
            $data = \App\Models\Config::where("org_id", $org_id)->where("shop_id", $shop_id)->where("code", $code)->select(['value'])->first();
            if(is_null($data)) return false;
            Cache::put($key, $data->value);
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
            return false;
        }
        return false;
    }

    /**
     * 
     * 基于店铺ID获取对应的配置内容
     * @param int $shop_id
     * @return boolean | object
     */
    static function GetShopConfig($shop_id, $type='0') {
        if($type=='0') {
            $key = \App\Enums\CachePrefixEnum::CONFIG_SHOP_ID.$shop_id;
        }else {
            $key = \App\Enums\CachePrefixEnum::CONFIG_SHOP_TYPE_ID.$shop_id."_".$type;
        }
        if(Cache::has($key)) {
            return Cache::get($key);
        }else{
            if($type > 0 ){
                $items = \App\Models\Config::where("shop_id", $shop_id)->where('type', $type)->pluck('value', 'code');
            }else{
                $items = \App\Models\Config::where("shop_id", $shop_id)->select(['code','value'])->pluck('value', 'code');
            }

            if(!is_null($items)) {
                $items = $items->toArray();
                Cache::put($key, $items, 600);
                return $items;
            }
            
        }
        return false;
    }

    /**
     * 根据店铺类型不一样，配置不一样的队列处理
     * @param string shop_type
     * @param array data
     */
    static function pushQueueByShopType($shop_type, $data) {
        switch($shop_type) {
            case "TM":
                \App\Jobs\Taobao\Queue::dispatch(json_encode($data))->onConnection('redis')->onQueue(\App\Enums\RedisQueueEnum::TAOBAO_REDIS_QUEUE);
            break;
            case "TB":
                \App\Jobs\Taobao\Queue::dispatch(json_encode($data))->onConnection('redis')->onQueue(\App\Enums\RedisQueueEnum::TAOBAO_REDIS_QUEUE);
            break;
            case "DD":
                \App\Jobs\Taobao\Queue::dispatch(json_encode($data))->onConnection('redis')->onQueue(\App\Enums\RedisQueueEnum::DOUDIAN_REDIS_QUEUE);
            break;
            case "JD":
                \App\Jobs\Taobao\Queue::dispatch(json_encode($data))->onConnection('redis')->onQueue(\App\Enums\RedisQueueEnum::JD_REDIS_QUEUE);
            break;
            case "WD":
                \App\Jobs\Taobao\Queue::dispatch(json_encode($data))->onConnection('redis')->onQueue(\App\Enums\RedisQueueEnum::WD_REDIS_QUEUE);
            break;
            default:
            \App\Jobs\Taobao\Queue::dispatch(json_encode($data))->onConnection('redis')->onQueue(\App\Enums\RedisQueueEnum::TAOBAO_REDIS_QUEUE);
        }
    }

    /**
     * 
     * 获取机构下的店铺列表
     * @param int org_id
     * @return array|boolean
     */
    static function getOrgStores($org_id) {
        $key = \App\Enums\CachePrefixEnum::ORG_STORE_LIST.$org_id;
        if(Cache::has($key)) {
            return Cache::get($key);
        }else{
            $items = \App\Models\OrganizationStore::where("organization_id", $org_id)->pluck("name","id");
            if(!is_null($items)) {
                $items = $items->toArray();
                Cache::put($key, $items, 600);
                return $items;
            }
        }
        return false;
    }
    
    /**
     * 
     * 获取机构下的店铺列表
     * @param int org_id
     * @return array|boolean
     */
    static function getOrgStoresType($org_id) {
        $key = \App\Enums\CachePrefixEnum::ORG_STORE_TYPE.$org_id;
        if(Cache::has($key)) {
            return Cache::get($key);
        }else{
            $items = \App\Models\OrganizationStore::where("organization_id", $org_id)->pluck("name","shop_type");
            if(!is_null($items)) {
                $items = $items->toArray();
                Cache::put($key, $items, 600);
                return $items;
            }
        }
        return false;
    }
    /**
     * 
     * 获取店铺类型
     * @param int org_id
     * @return array|boolean
     */
    static function ShopType($shop_id) {
        $key = \App\Enums\CachePrefixEnum::ORG_STORE_TYPE.$shop_id;
        if(Cache::has($key)) {
            return Cache::get($key);
        }else{
            $shopType = \App\Models\OrganizationStore::where("id", $shop_id)->value("shop_type");
            if(is_null($shopType)) return false;
            Cache::put($key, $shopType);
            return $shopType;
        }
        return false;
    }

    /**
     * 
     * 获取订单状态
     * @param int org_id
     * @return array|boolean
     */
    static function ShopOrderStatus($shop_id, $status) {
        $shopType = self::ShopType($shop_id);
        switch($shopType) {
            case "TM":
                //todo
            break;
            case "TB":
                //todo
            break;
            case "DD":
                
            break;
            case "JD":
                //todo
            break;
            case "WD":
                //todo
            break;
            default:
            //todo
        }
    }

    /**
     * 
     * 统一的处理第三方API接口请求处理
     * @param shop_id 店铺的ID
     * @param client 第三方API的 client object
     * @param token 第三方API 需要的token 内容
     * @param req 基于需要构建 request 内容的接口使用
     * @return boolean|object
     * 
     */
    static function execThirdStoreApi($shop_id, $client, $token, $req="") {
        $shopType = self::ShopType($shop_id);
        $resp = false;
        switch($shopType) {
            case "DD":
                $resp = $client->execute($token);
                if($resp->code!=10000) { 
                    self::sendMessage(1, 1, $resp->msg, $resp->sub_msg."--".$resp->log_id."--".$resp->sub_code);
                    return false;
                }
            break;
            case "JD":
                $resp = $client->execute($req, $token);
                if (property_exists($resp, 'errorMessage')) {
                    //todo
                    self::sendMessage(1, 1, $resp->msg, $resp->sub_msg."--".$resp->log_id."--".$resp->sub_code);
                    return false;
                }
            break;
            case "TM":
                $resp = $client->execute($req, $token);
                //var_dump($resp);
                if (property_exists($resp, 'error_response')) {
                    self::sendMessage(1, 1, $resp->msg, $resp->sub_msg."--".$resp->log_id."--".$resp->sub_code);
                    return false;
                }
                return $resp;
            break;
            case "TB":
                $resp = $client->execute($req, $token);
                if (property_exists($resp, 'error_response')) {
                    //todo
                    self::sendMessage(1, 1, $resp->msg, $resp->sub_msg."--".$resp->log_id."--".$resp->sub_code);
                    return false;
                }
                //todo
            break;
        }
        return $resp;
    }

    /**
     * 
     * 基于机构的code 获取到对于的ID
     * @param code 店铺的code
     * @return boolean|object
     * 
     */
    static function GetStoreByCode($code) {
        $key = \App\Enums\CachePrefixEnum::ORG_CODE.$code;
        if(Cache::has($key)) {
            return Cache::get($key);
        }else{
            $org_id = \App\Models\Organization::where("code", $code)->value("id");
            if(is_null($org_id)) return false;
            Cache::put($key, $org_id);
            return $org_id;
        }
        return false;
    }

    static function checkUrl($url) {
        $preg = "/^http(s)?:\\/\\/.+/";
        if(preg_match($preg,$url)){
            return true;
        }else{
            return false;
        }
    }
}
