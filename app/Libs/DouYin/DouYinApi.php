<?php


namespace App\Libs\DouYin;


use Illuminate\Filesystem\Cache;
use phpDocumentor\Reflection\Types\Self_;

final class DouYinApi
{
    const Douyin_Url = "https://open.douyin.com";
    const client_key = "";
    const client_secret = "";

    static $access_token = "act.f1ec46e29400ea3779e44dca8792ffa2biNjqvQinoMtx9IXHYT3HhDV04fQ";
    static $refresh_token = "rft.49862b3314ec2db57e3d1b623f5f051afSR3WUdliDwX3Y2NFLxa6WOwjqYw";
    static $open_id = "690d678b-12a2-4fbd-9548-193acf5da0e0";
    static $client_token = "clt.50dba5776cb9c5fb2861d59fe58373faREDOyI1BRG3BshvQg33yuSfp1F94";

    /**
     *
     *
     * {"data":{"access_token":"act.f1ec46e29400ea3779e44dca8792ffa2biNjqvQinoMtx9IXHYT3HhDV04fQ","captcha":"","desc_url":"","description":"","error_code":0,"expires_in":1296000,"open_id":"690d678b-12a2-4fbd-9548-193acf5da0e0","refresh_expires_in":2592000,"refresh_token":"rft.49862b3314ec2db57e3d1b623f5f051afSR3WUdliDwX3Y2NFLxa6WOwjqYw","scope":"user_info,video.create,video.list"},"message":"success"}
     */

    static $response = null;

    public static function client_token() {
        $url = self::Douyin_Url . '/oauth/client_token/?client_key=' . self::client_key . '&client_secret=' . self::client_secret."&grant_type=client_credential";
        echo $url."\r\n";
    }

    //上传西瓜视频
    public static function xigua_video_upload($open_id, $access_token, $file){
        $url = self::Douyin_Url . '/xigua/video/upload/?open_id=' . $open_id . '&access_token=' . $access_token;
        $type = "xigua";
        return self::https_byte($url, $file, $type);
    }

    //上传抖音视频
    public static function video_upload($open_id, $access_token, $file)
    {
        $url = self::Douyin_Url . '/video/upload/?open_id=' . $open_id . '&access_token=' . $access_token;
        $type = "douyin";
        //var_dump($url);
        return self::https_byte($url, $file, $type);
    }

    //查询授权账号视频列表
    public static function video_list($openid, $access_token, $page = 0, $cursor = 10)
    {
        $params = [
            'open_id' => $openid,
            'access_token' => $access_token,
            'count' => $cursor,
            'cursor' => $page
        ];
        $url = self::Douyin_Url . '/video/list/';
        echo $url."\r\n";
        var_dump($params);
        return self::https_get($url, $params);
    }

    public static function poi_search_keyword($access_token, $keyword, $city="上海", $cursor = 0, $count=10) {
        $params = [
            'access_token' => $access_token,
            'city' => $city,
            'count' => $count,
            'keyword' => $keyword,
            'cursor' => $cursor
        ];
        $url = self::Douyin_Url . '/poi/search/keyword/';
        echo $url."\r\n";
        var_dump($params);
        return self::https_get($url, $params);
    }

    //创建抖音视频
    public static function video_create($open_id, $access_token, $video_id, $text = '', $othes = [])
    {
        $url = self::Douyin_Url . '/video/create/?open_id=' . $open_id . '&access_token=' . $access_token;
        $params = [
            'open_id' => $open_id,
            'access_token' => $access_token,
            'video_id' => $video_id,
            'text' => $text,
            'real_share' => !empty($othes['real_share']) ? $othes['real_share'] : '',
            'real_openid' => !empty($othes['real_openid']) ? $othes['real_openid'] : '',
        ];
        if (!empty($othes['real_openid'])) {
            $params['at_users'] = array(
                $othes['real_openid']
            );
        }
        if (empty($othes['aimingAt'])) {
            $params['poi_id'] = !empty($othes['poi_id']) ? $othes['poi_id'] : '';
            $params['poi_name'] = !empty($othes['poi_name']) ? $othes['poi_name'] : '';
            //$params['poi_share'] = !empty($othes['poi_share']) ? $othes['poi_share'] : '';
        } else {
            $params['micro_app_id'] = !empty($othes['micro_app_id']) ? $othes['micro_app_id'] : '';
            $params['micro_app_title'] = !empty($othes['micro_app_title']) ? $othes['micro_app_title'] : '';
            $params['micro_app_url'] = !empty($othes['micro_app_url']) ? $othes['micro_app_url'] : '';
        }
        return self::https_post($url, $params);
    }

    public static function toArray()
    {
        return self::response ? json_decode(self::response, true) : true;
    }

    public static function https_get($url, $params = [])
    {
        if ($params) {
            $url = $url . '?' . http_build_query($params);
        }
        echo $url."\r\n";
        self::$response = self::https_request($url);
        $result = json_decode(self::$response, true);
        return $result;
    }

    public static function https_post($url, $data = [])
    {
        $header = [
            'Accept:application/json', 'Content-Type:application/json'
        ];
        self::$response = self::https_request($url, json_encode($data), $header);
        $result = json_decode(self::$response, true);
        return $result;
    }

    public static function https_request($url, $data = null, $headers = null)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        if (!empty($data)) {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        if (!empty($headers)) {
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        }
        //设置curl默认访问为IPv4
        if (defined('CURLOPT_IPRESOLVE') && defined('CURL_IPRESOLVE_V4')) {
            curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        }
        $output = curl_exec($curl);
        curl_close($curl);
        return ($output);
    }

    public static function https_byte($url, $file, $type)
    {
        $filename = basename($file);

        $file_md5 = md5_file($file);

        $cacheKey = $type."_".$file_md5;


        $data = \Illuminate\Support\Facades\Cache::get($cacheKey);
        if(!empty($data)) return json_decode($data, true);

        $payload = '';
        $params = "--__X_PAW_BOUNDARY__\r\n"
            . "Content-Type: application/x-www-form-urlencoded\r\n"
            . "\r\n"
            . $payload . "\r\n"
            . "--__X_PAW_BOUNDARY__\r\n"
            . "Content-Type: video/mp4\r\n"
            . "Content-Disposition: form-data; name=\"video\"; filename=\".$filename.\"\r\n"
            . "\r\n"
            . file_get_contents($file) . "\r\n"
            . "--__X_PAW_BOUNDARY__--";

        $first_newline = strpos($params, "\r\n");
        $multipart_boundary = substr($params, 2, $first_newline - 2);
        $request_headers = array();
        $request_headers[] = 'Content-Length: ' . strlen($params);
        $request_headers[] = 'Content-Type: multipart/form-data; boundary=' . $multipart_boundary;

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $request_headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($curl);
        curl_close($curl);
        var_dump($output);
        $result = json_decode($output, true);
        if(isset($result['data']['video']['video_id'])) {
            \Illuminate\Support\Facades\Cache::put($cacheKey, $output);
        }
        return $result;
    }
}
