<?php
namespace App\Api\V1\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Libs\Utils;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\ProductSkuAddRequest; 
use App\Http\Requests\ProductSkuEditRequest; 
use App\Http\Requests\ProductSkuDeleteRequest; 
use Dingo\Api\Auth\Auth;
use Illuminate\Support\Facades\Log;

/**
 * category resource representation
 * @Resource("file", uri="/file")
 */
class FileController extends Controller {
    use Helpers;

    private $user = null;// 用户
    private $org = null; //机构

    /*
     * 添加商品
     * @Versions({"v1"})
     * @Request("username=foo&password=bar", contentType="application/x-www-form-urlencoded")
     * @Response(200, body={"id": 10, "username": "foo"})
     * @POST("/add")
    */
    public function signature2(ProductSkuAddRequest $request) {
        $this->org = app('Dingo\Api\Auth\Auth')->user();
        
        return Utils::ApiResponse($ret);
    }

    public function gmt_iso8601($time)
    {
        $dtStr = date("c", $time);
        $mydatetime = new \DateTime($dtStr);
        $expiration = $mydatetime->format(\DateTime::ISO8601);
        $pos = strpos($expiration, '+');
        $expiration = substr($expiration, 0, $pos);
        return $expiration . "Z";
    }

    // 阿里云签名接口
    // 调用该接口可传入要上传到的文件夹dir
    public function signature(Request $request) 
    {
        $this->org = app('Dingo\Api\Auth\Auth')->user();
        
        $id = env("OSS_ACCESS_ID");         // 请填写您的AccessKeyId。
        $key = env('OSS_ACCESS_KEY');     // 请填写您的AccessKeySecret。
        $bucket = env('OSS_BUCKET');
        $endpoint = env('OSS_ENDPOINT');
        $host = env('OSS_CDN_DOMAIN');
        // $host = 'https://xxxx.oss-cn-hangzhou.aliyuncs.com'; // $host的格式为 bucketname.endpoint，
        
        $dir = 'bz/'.$this->org->code; // 用户上传文件时指定的前缀。

        // 若需要配置回调服务器URL 则此配置
        // private $callbackUrl = 'http://你的域名/callback.php';//上传回调的地址 还记得上图中callback.php文件吗，把这文件放在你的项目中，配个路由保证能访问到这个文件就行，这个值就是访问callback.php此文件的URL 例如：我放在项目根目录 那值就为 http://liutong.pro/callback.php
        // $callbackUrl = $this->callbackUrl;
        // $callbackUrl为上传回调服务器的URL，请将下面的IP和Port配置为您自己的真实URL信息。
        // $callback_param = array('callbackUrl' => $callbackUrl,
        //     'callbackBody' => 'filename=${object}&size=${size}&mimeType=${mimeType}&height=${imageInfo.height}&width=${imageInfo.width}',
        //     'callbackBodyType' => "application/x-www-form-urlencoded");
        // $callback_string = json_encode($callback_param);
        // $base64_callback_body = base64_encode($callback_string);
        $callbackUrl = env('OSS_UPLOAD_CALLBACK_URL');
        $callback_param = array(
            'callbackUrl' => $callbackUrl,
            'callbackBody' => 'filename=${object}&size=${size}&mimeType=${mimeType}&height=${imageInfo.height}&width=${imageInfo.width}&format=${imageInfo.format}',
            'callbackBodyType' => "application/x-www-form-urlencoded"
        );
        $callback_string = json_encode($callback_param);
        
        $base64_callback_body = base64_encode($callback_string);

        $now = time();
        $expire = 30;  //设置该policy超时时间是10s. 即这个policy过了这个有效时间，将不能访问。
        $end = $now + $expire;
        $expiration = $this->gmt_iso8601($end);


        //最大文件大小.用户可以自己设置
        $condition = array(0 => 'content-length-range', 1 => 0, 2 => 2147483648);
        $conditions[] = $condition;

        // 表示用户上传的数据，必须是以$dir开始，不然上传会失败，这一步不是必须项，只是为了安全起见，防止用户通过policy上传到别人的目录。
        $start = array(0 => 'starts-with', 1 => '$key', 2 => $dir);
        $conditions[] = $start;


        $arr = array('expiration' => $expiration, 'conditions' => $conditions);
        $policy = json_encode($arr);
        $base64_policy = base64_encode($policy);
        $string_to_sign = $base64_policy;
        $signature = base64_encode(hash_hmac('sha1', $string_to_sign, $key, true));

        $response = array();
        $response['accessid'] = $id;
        $response['host'] = $host;
        $response['policy'] = $base64_policy;
        $response['signature'] = $signature;
        $response['expire'] = $end;
        $response['callback'] = $base64_callback_body;
        $response['dir'] = $dir;  // 这个参数是设置用户上传文件时指定的前缀。
        //echo json_encode($response);

        return Utils::ApiResponse($response);
    }

    public function oss_callback(Request $request) {
        $authorizationBase64 = $request->server('HTTP_AUTHORIZATION');
        $pubKeyUrlBase64 = $request->server('HTTP_X_OSS_PUB_KEY_URL');
        

        if ($authorizationBase64 == '' || $pubKeyUrlBase64 == '')
        {
            header("http/1.1 403 Forbidden");
            exit();
        }

        // 2.获取OSS的签名
        $authorization = base64_decode($authorizationBase64);

        // 3.获取公钥
        $pubKeyUrl = base64_decode($pubKeyUrlBase64);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $pubKeyUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        $pubKey = curl_exec($ch);
        if ($pubKey == "")
        {
            header("http/1.1 403 Forbidden");
            exit();
        }

        // 4.获取回调body
        $body = file_get_contents('php://input');
        Log::info($body);

        // 5.拼接待签名字符串
        $authStr = '';
        $path = $_SERVER['REQUEST_URI'];
        $pos = strpos($path, '?');
        if ($pos === false)
        {
            $authStr = urldecode($path)."\n".$body;
        }
        else
        {
            $authStr = urldecode(substr($path, 0, $pos)).substr($path, $pos, strlen($path) - $pos)."\n".$body;
        }

        // 6.验证签名
        $ok = openssl_verify($authStr, $authorization, $pubKey, OPENSSL_ALGO_MD5);
        if ($ok == 1)
        {
            $body = urldecode($body);
            Log::info($body);
            parse_str($body, $item);
            Log::info("filename upload data".json_encode($item));

            //\App\Models\ProdAttachFile
            
            header("Content-Type: application/json");
            $data = array("Status"=>"Ok");
            echo json_encode($data);
        }
        else
        {
            header("http/1.1 403 Forbidden");
            exit();
        }


    }
    
}