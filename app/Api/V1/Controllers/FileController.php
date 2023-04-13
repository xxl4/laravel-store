<?php
namespace App\Api\V1\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Libs\Utils;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
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
        $ret = [];
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
        $host = env('OSS_CDN_DOMAIN')."?type=photo";;
        // $host = 'https://xxxx.oss-cn-hangzhou.aliyuncs.com'; // $host的格式为 bucketname.endpoint，
        
        $dir = '/bz/'.$this->org->code.'/images/'; // 用户上传文件时指定的前缀。
        $callbackUrl = env('OSS_UPLOAD_CALLBACK_URL');
        $callback_param = array(
            'callbackUrl' => $callbackUrl,
            'callbackBody' => 'filename=${object}&etag=${etag}&size=${size}&mimeType=${mimeType}&height=${imageInfo.height}&width=${imageInfo.width}&format=${imageInfo.format}',
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

    public function video_signature() {
        $this->org = app('Dingo\Api\Auth\Auth')->user();
        
        $id = env("OSS_ACCESS_ID");         // 请填写您的AccessKeyId。
        $key = env('OSS_ACCESS_KEY');     // 请填写您的AccessKeySecret。
        $bucket = env('OSS_BUCKET');
        $endpoint = env('OSS_ENDPOINT');
        $host = env('OSS_CDN_DOMAIN')."?type=video";
        // $host = 'https://xxxx.oss-cn-hangzhou.aliyuncs.com'; // $host的格式为 bucketname.endpoint，
        
        $dir = '/bz/'.$this->org->code.'/video/'; // 用户上传文件时指定的前缀。
        $callbackUrl = env('OSS_UPLOAD_CALLBACK_URL');
        $callback_param = array(
            'callbackUrl' => $callbackUrl,
            'callbackBody' => 'filename=${object}&etag=${etag}&size=${size}&mimeType=${mimeType}&height=${imageInfo.height}&width=${imageInfo.width}&format=${imageInfo.format}',
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
        $type = $request->input('type');
        if(!in_array($type, array('photo','video'))) {
            header("http/1.1 403 Forbidden");
            exit();
        }
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
            //Log::info($body);
            parse_str($body, $item);
            //Log::info("filename upload data".json_encode($item));
            $file = \App\Models\ProdAttachFile::where("etag", $item['etag'])->first();
            if(is_null($file)) $file = new \App\Models\ProdAttachFile();

            $org_id = 0;

            $filename_info = explode('/', $item['filename']);
            $org_code = $filename_info[1];

            $org_id = \App\Libs\Utils::GetStoreByCode($org_code);



            Log::info(json_encode($filename_info));


            $file->etag = $item['etag'];
            $file->org_id = (int)$org_id;
            $file->file_path = $item['filename'];
            $file->file_type = $item['format'];
            $file->file_size = $item['size'];
            $file->height = $item['height'];
            $file->width = $item['width'];
            $file->save();



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

    public function detail(Request $request) {
        $this->org = app('Dingo\Api\Auth\Auth')->user();
        $validated = $request->validate([
            'id'   => 'required|int',
        ]);
        $id = $request->input('id');
        $model = \App\Models\ProdAttachFile::select("*");
        $model->where("file_id", $id);
        $model->where("org_id", $this->org->id);

        $item = $model->first();
        
        return Utils::ApiResponse($item);
    }

    public function list(Request $request) {
        $this->org = app('Dingo\Api\Auth\Auth')->user();
        $validated = $request->validate([
            'num'   => 'required|int|max:100',
            'page'   => 'required|int',
        ]);
        $num = $request->input('num');
        $page = $request->input('page');
        $model = \App\Models\ProdAttachFile::select("*");
        $model->where("org_id", $this->org->id);
        //var_dump($model);
        $total = $model->count();
        $items = $model->offset($page * $num)->limit($num)->get();

        //数据返回
        $ret = [
            "items"=>$items,
            "total" => $total,
        ];
        return Utils::ApiResponse($ret);
    }

    public function delete(Request $request) {
        $this->org = app('Dingo\Api\Auth\Auth')->user();
        $validated = $request->validate([
            'id'   => 'required|int',
        ]);
        $id = $request->input('id');
        $model = \App\Models\ProdAttachFile::select("*");
        $model->where("file_id", $id);
        $model->where("org_id", $this->org->id);
        $item = $model->first();
        if(is_null($item)) {
            return $this->response->error("您需要删除的资源不存在，或已被删除", 400);
        }
        $item->delete();
        return Utils::ApiResponse([]);
    }
    
}