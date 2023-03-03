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
}
