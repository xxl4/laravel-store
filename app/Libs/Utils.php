<?php


namespace App\Libs;

use App\Models\Nosql\AmazonData;
use App\Models\Sd\English;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;

/* 图片处理相关常数 */
define('ERR_INVALID_IMAGE',         1);
define('ERR_NO_GD',                 2);
define('ERR_IMAGE_NOT_EXISTS',      3);
define('ERR_DIRECTORY_READONLY',    4);
define('ERR_UPLOAD_FAILURE',        5);
define('ERR_INVALID_PARAM',         6);
define('ERR_INVALID_IMAGE_TYPE',    7);

/* 插件相关常数 */
define('ERR_COPYFILE_FAILED',       1);
define('ERR_CREATETABLE_FAILED',    2);
define('ERR_DELETEFILE_FAILED',     3);

/* 商品属性类型常数 */
define('ATTR_TEXT',                 0);
define('ATTR_OPTIONAL',             1);
define('ATTR_TEXTAREA',             2);
define('ATTR_URL',                  3);

/* 会员整合相关常数 */
define('ERR_USERNAME_EXISTS',       1); // 用户名已经存在
define('ERR_EMAIL_EXISTS',          2); // Email已经存在
define('ERR_INVALID_USERID',        3); // 无效的user_id
define('ERR_INVALID_USERNAME',      4); // 无效的用户名
define('ERR_INVALID_PASSWORD',      5); // 密码错误
define('ERR_INVALID_EMAIL',         6); // email错误
define('ERR_USERNAME_NOT_ALLOW',    7); // 用户名不允许注册
define('ERR_EMAIL_NOT_ALLOW',       8); // EMAIL不允许注册

/* 加入购物车失败的错误代码 */
define('ERR_NOT_EXISTS',            1); // 商品不存在
define('ERR_OUT_OF_STOCK',          2); // 商品缺货
define('ERR_NOT_ON_SALE',           3); // 商品已下架
define('ERR_CANNT_ALONE_SALE',      4); // 商品不能单独销售
define('ERR_NO_BASIC_GOODS',        5); // 没有基本件
define('ERR_NEED_SELECT_ATTR',      6); //需要用户选择属性

/* 购物车商品类型 */
define('CART_GENERAL_GOODS',        0); // 普通商品
define('CART_GROUP_BUY_GOODS',      1); // 团购商品
define('CART_AUCTION_GOODS',        2); // 拍卖商品
define('CART_SNATCH_GOODS',         3); // 夺宝奇兵

/* 订单状态 */
define('OS_UNCONFIRMED',            0); // 未确认
define('OS_CONFIRMED',              1); // 已确认
define('OS_CANCELED',               2); // 已取消
define('OS_INVALID',                3); // 无效
define('OS_RETURNED',               4); // 退货

/* 支付类型 */
define('PAY_ORDER',                 0); // 订单支付
define('PAY_SURPLUS',               1); // 会员预付款

/* 配送状态 */
define('SS_UNSHIPPED',              0); // 未发货
define('SS_SHIPPED',                1); // 已发货
define('SS_RECEIVED',               2); // 已收货
define('SS_PREPARING',              3); // 配货中
define('SS_PREPARED',               4); // 已配货

/* 支付状态 */
define('PS_UNPAYED',                0); // 未付款
define('PS_PAYING',                 1); // 付款中
define('PS_PAYED',                  2); // 已付款
define('PS_DANGBAOPAYING',          3); // 担保支付

/* 综合状态 */
define('CS_AWAIT_PAY',              100); // 待付款：货到付款且已发货且未付款，非货到付款且未付款
define('CS_AWAIT_SHIP',             101); // 待发货：货到付款且未发货，非货到付款且已付款且未发货
define('CS_FINISHED',               102); // 已完成：已确认、已付款、已发货
define('CS_PREPARED',               103); // 已配货

/* 缺货处理 */
define('OOS_WAIT',                  0); // 等待货物备齐后再发
define('OOS_CANCEL',                1); // 取消订单
define('OOS_CONSULT',               2); // 与店主协商

/* 帐户明细类型 */
define('SURPLUS_SAVE',              0); // 为帐户冲值
define('SURPLUS_RETURN',            1); // 从帐户提款

/* 评论状态 */
define('COMMENT_UNCHECKED',         0); // 未审核
define('COMMENT_CHECKED',           1); // 已审核或已回复(允许显示)
define('COMMENT_REPLYED',           2); // 该评论的内容属于回复

/* 红包发放的方式 */
define('SEND_BY_USER',              0); // 按用户发放
define('SEND_BY_GOODS',             1); // 按商品发放
define('SEND_BY_ORDER',             2); // 按订单发放
define('SEND_BY_PRINT',             3); // 线下发放

/* 广告的类型 */
define('IMG_AD',                    0); // 图片广告
define('FALSH_AD',                  1); // flash广告
define('CODE_AD',                   2); // 代码广告
define('TEXT_AD',                   3); // 文字广告

/* 是否需要用户选择属性 */
define('ATTR_NOT_NEED_SELECT',      0); // 不需要选择
define('ATTR_NEED_SELECT',          1); // 需要选择

/* 用户中心留言类型 */
define('M_MESSAGE',                 0); // 留言
define('M_COMPLAINT',               1); // 投诉
define('M_ENQUIRY',                 2); // 询问
define('M_CUSTOME',                 3); // 售后
define('M_BUY',                     4); // 求购
define('M_BUSINESS',                5); // 商家

/* 团购活动状态 */
define('GBS_PRE_START',             0); // 未开始
define('GBS_UNDER_WAY',             1); // 进行中
define('GBS_FINISHED',              2); // 已结束
define('GBS_SUCCEED',               3); // 团购成功（可以发货了）
define('GBS_FAIL',                  4); // 团购失败

/* 红包是否发送邮件 */
define('BONUS_NOT_MAIL',            0);
define('BONUS_MAIL_SUCCEED',        1);
define('BONUS_MAIL_FAIL',           2);

/* 商品活动类型 */
define('GAT_SNATCH',                0);
define('GAT_GROUP_BUY',             1);
define('GAT_AUCTION',               2);
define('GAT_POINT_BUY',             3);

/* 帐号变动类型 */
define('ACT_SAVING',                0);     // 帐户冲值
define('ACT_DRAWING',               1);     // 帐户提款
define('ACT_ADJUSTING',             2);     // 调节帐户
define('ACT_OTHER',                99);     // 其他类型

/* 密码加密方法 */
define('PWD_MD5',                   1);  //md5加密方式
define('PWD_PRE_SALT',              2);  //前置验证串的加密方式
define('PWD_SUF_SALT',              3);  //后置验证串的加密方式

/* 文章分类类型 */
define('COMMON_CAT',                1); //普通分类
define('SYSTEM_CAT',                2); //系统默认分类
define('INFO_CAT',                  3); //网店信息分类
define('UPHELP_CAT',                4); //网店帮助分类分类
define('HELP_CAT',                  5); //网店帮助分类

/* 活动状态 */
define('PRE_START',                 0); // 未开始
define('UNDER_WAY',                 1); // 进行中
define('FINISHED',                  2); // 已结束
define('SETTLED',                   3); // 已处理

/* 验证码 */
define('CAPTCHA_REGISTER',          1); //注册时使用验证码
define('CAPTCHA_LOGIN',             2); //登录时使用验证码
define('CAPTCHA_COMMENT',           4); //评论时使用验证码
define('CAPTCHA_ADMIN',             8); //后台登录时使用验证码
define('CAPTCHA_LOGIN_FAIL',       16); //登录失败后显示验证码

/* 优惠活动的优惠范围 */
define('FAR_ALL',                   0); // 全部商品
define('FAR_CATEGORY',              1); // 按分类选择
define('FAR_BRAND',                 2); // 按品牌选择
define('FAR_SECONDHAND',                 3); // 按商品选择
define('FAR_SECONDSOFT',            4); // 二手货
define('FAR_SECONDHARD',            5); 
define('FAR_SECONDBOARD',            6); //二手木板
define('FAR_STOCKTAKE', 7);



/* 优惠活动的优惠方式 */
define('FAT_GOODS',                 0); // 送赠品或优惠购买
define('FAT_PRICE',                 1); // 现金减免
define('FAT_DISCOUNT',              2); // 价格打折优惠

/* 评论条件 */
define('COMMENT_LOGIN',             1); //只有登录用户可以评论
define('COMMENT_CUSTOM',            2); //只有有过一次以上购买行为的用户可以评论
define('COMMENT_BOUGHT',            3); //只有购买够该商品的人可以评论

/* 减库存时机 */
define('SDT_SHIP',                  0); // 发货时
define('SDT_PLACE',                 1); // 下订单时

/* 加密方式 */
define('ENCRYPT_ZC',                1); //zc加密方式

/* 商品类别 */
define('G_REAL',                    1); //实体商品
define('G_CARD',                    0); //虚拟卡

/* 积分兑换 */
define('TO_P',                      0); //兑换到商城消费积分
define('FROM_P',                    1); //用商城消费积分兑换
define('TO_R',                      2); //兑换到商城等级积分
define('FROM_R',                    3); //用商城等级积分兑换



if (!defined("CURL_TIMEOUT"))
{
    define("CURL_TIMEOUT", "120");
}


final class Utils
{
    static $sto = "32"; //申通快递ID
    static $postb = "29"; // 邮政快递ID
    //static $postb = "26"; // 邮政快递ID 关闭邮政快递 By from wechat 20221219
    static $yto = "26"; // 圆通快递ID

    static $english_queue = "english_queue"; // 英国数据队列处理
    static $rep_queue = "rep_list"; // 重复订单数据

    //检查isbn 是否合法
    static function is_isbn($isbn) {
        $len = strlen($isbn);
        $rc = self::isbn_compute($isbn, $len);

        if ($isbn[$len-1] != $rc)   /* ISBN尾数与计算出来的校验码不符 */
            return 0;
        else
            return 1;
    }

    static function isbn_compute($isbn, $len)
    {
        /* 
        * 该函数用于计算ISBN末位校验码
        * 参数说明：
        *   $isbn : isbn码
        *   $len  : isbn码长度
        */

        $rc='';

        if ($len == 10)
        {
            $digit = 11 - self::isbn_sum($isbn, $len) % 11;

            if ($digit == 10)
                $rc = 'X';
            else if ($digit == 11)
                $rc = '0';
            else
                $rc = (string)$digit;
        }
        else if($len == 13)
        {
            $digit = 10 - self::isbn_sum($isbn, $len) % 10;

            if ($digit == 10)
                $rc = '0';
            else
                $rc = (string)$digit;
        }

        return $rc;
    }

    static function isbn_sum($isbn, $len)
    {
    /* 
    * 该函数用于计算ISBN加权和 
    * 参数说明：
    *   $isbn : isbn码
    *   $len  : isbn码长度
    */
        $sum = 0;
        
        if ($len == 10)
        {
            for ($i = 0; $i < $len-1; $i++)
            {
                $sum = $sum + (int)$isbn[$i] * ($len - $i);
            }
        }
        elseif ($len == 13)
        {
            for ($i = 0; $i < $len-1; $i++)
            {
                if ($i % 2 == 0)
                    $sum = $sum + (int)$isbn[$i];
                else
                    $sum = $sum + (int)$isbn[$i] * 3;
            }
        }
        return $sum;
    }

    static function convert10($isbn) {
        $isbn = str_replace('-', '', $isbn);
        if(!preg_match('/^\d+x?$/i', $isbn)) return null;
        if(strlen($isbn) == 13) return $isbn;
        $sum = 0;
        $num = '978' . substr($isbn, 0, 9);
        for($i = 0; $i < 12; $i++) {
            $n = $num[$i];
            if(($i + 1) % 2 == 0) $sum += $n * 3;
            else $sum += $n;
        }
        $m = $sum % 10;
        if ($m) $check = 10 - $m;
        else $check = $m;
        return $num . $check;
    }

    /**
     *	Function accepts either 12 or 13 digit number, and either provides or checks the validity of the 13th checksum digit
     *    Optionally converts to ISBN 10 as well.
     */
    static function isbn13checker($input, $convert = FALSE){
        $output = FALSE;
        if (strlen($input) < 12){
            $output = array('error'=>'ISBN too short.');
        }
        if (strlen($input) > 13){
            $output = array('error'=>'ISBN too long.');
        }
        if (!$output){
            $runningTotal = 0;
            $r = 1;
            $multiplier = 1;
            for ($i = 0; $i < 13 ; $i++){
                $nums[$r] = substr($input, $i, 1);
                $r++;
            }
            $inputChecksum = array_pop($nums);
            foreach($nums as $key => $value){
                $runningTotal += $value * $multiplier;
                $multiplier = $multiplier == 3 ? 1 : 3;
            }
            $div = $runningTotal / 10;
            $remainder = $runningTotal % 10;

            $checksum = $remainder == 0 ? 0 : 10 - substr($div, -1);

            $output = array('checksum'=>$checksum);
            $output['isbn13'] = substr($input, 0, 12) . $checksum;
            if ($convert){
                //$output['isbn10'] = isbn13to10($output['isbn13']);
                $output['isbn10'] = self::convert10($output['isbn13']);
            }
            if (is_numeric($inputChecksum) && $inputChecksum != $checksum){
                $output['error'] = 'Input checksum digit incorrect: ISBN not valid';
                $output['input_checksum'] = $inputChecksum;
            }
        }
        return $output;
    }

    /**
     *	Function accepts either 10 or 9 digit number, and either provides or checks the validity of the 10th checksum digit
     *    Optionally converts to ISBN 13 as well.
     */
    static function isbn10checker($input, $convert = FALSE){
        $output = FALSE;
        if (strlen($input) < 9){
            $output = array('error'=>'ISBN too short.');
        }
        if (strlen($input) > 10){
            $output = array('error'=>'ISBN too long.');
        }
        if (!$output){
            $runningTotal = 0;
            $r = 1;
            $multiplier = 10;
            for ($i = 0; $i < 10 ; $i++){
                $nums[$r] = substr($input, $i, 1);
                $r++;
            }
            $inputChecksum = array_pop($nums);
            foreach($nums as $key => $value){
                $runningTotal += @$value * $multiplier;
                //echo $value . 'x' . $multiplier . ' + ';
                $multiplier --;
                if ($multiplier === 1){
                    break;
                }
            }
            //echo ' = ' . $runningTotal;
            $remainder = $runningTotal % 11;
            $checksum = $remainder == 1 ? 'X' : 11 - $remainder;
            $checksum = $checksum == 11 ? 0 : $checksum;
            $output = array('checksum'=>$checksum);
            $output['isbn10'] = substr($input, 0, 9) . $checksum;
            if ($convert){
                //$output['isbn13'] = isbn10to13($output['isbn10']);
                $output['isbn13'] = self::convert10($output['isbn10']);
            }
            if ((is_numeric($inputChecksum) || $inputChecksum == 'X') && $inputChecksum != $checksum){
                $output['error'] = 'Input checksum digit incorrect: ISBN not valid';
                $output['input_checksum'] = $inputChecksum;
            }
        }
        return $output;
    }

    // 转换 isbn10 到 isbn 13
    /**
     * 
     * @param string $isbn19
     * @return string $isbn13
     * 
     */
    static function isbn10to13($isbn10){

        $isbnStem = strlen($isbn10) == 10 ? substr($isbn10, 0,9) : $isbn10;
        $isbn13data = self::isbn13checker('978' . $isbnStem);


        return $isbn13data['isbn13'];

    }

    //转换isbn13 到 isbn10
    static  function isbn13to10($isbn13){

        $isbnStem = strlen($isbn13) == 13 ? substr($isbn13, 12) : $isbn13;
        $isbnStem = substr($isbn13, -10);
        $isbn10data = self::isbn10checker($isbnStem);
        return $isbn10data['isbn10'];
    }

    static  function http_post_data($url, $data_string) {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        /*
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json; charset=utf-8',
                'Content-Length: ' . strlen($data_string))
        );
        */
        ob_start();
        $info = curl_exec($ch);
        $return_content = ob_get_contents();
        ob_end_clean();

        return $return_content;

        $return_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        return array($return_code, $return_content);
    }

    //翻译入口
    static function translate($query, $from, $to)
    {
        $args = array(
            'q' => $query,
            'appid' => APP_ID,
            'salt' => rand(10000,99999),
            'from' => $from,
            'to' => $to,

        );
        $args['sign'] = self::buildSign($query, APP_ID, $args['salt'], SEC_KEY);
        $ret = self::call(URL, $args);
        $ret = json_decode($ret, true);
        return $ret;
    }

//加密
    static function buildSign($query, $appID, $salt, $secKey)
    {/*{{{*/
        $str = $appID . $query . $salt . $secKey;
        $ret = md5($str);
        return $ret;
    }/*}}}*/

//发起网络请求
    static function call($url, $args=null, $method="post", $testflag = 0, $timeout = 120, $headers=array())
    {/*{{{*/
        $ret = false;
        $i = 0;
        while($ret === false)
        {
            if($i > 1)
                break;
            if($i > 0)
            {
                sleep(1);
            }
            $ret = self::callOnce($url, $args, $method, false, $timeout, $headers);
            $i++;
        }
        return $ret;
    }/*}}}*/

    static function callOnce($url, $args=null, $method="post", $withCookie = false, $timeout = 120, $headers=array())
    {/*{{{*/
        $ch = curl_init();
        if($method == "post")
        {
            $data = self::convert($args);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_POST, 1);
        }
        else
        {
            $data = self::convert($args);
            if($data)
            {
                if(stripos($url, "?") > 0)
                {
                    $url .= "&$data";
                }
                else
                {
                    $url .= "?$data";
                }
            }
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        if(!empty($headers))
        {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
        if($withCookie)
        {
            curl_setopt($ch, CURLOPT_COOKIEJAR, $_COOKIE);
        }
        $r = curl_exec($ch);
        curl_close($ch);
        return $r;
    }/*}}}*/

    static function convert(&$args)
    {/*{{{*/
        $data = '';
        if (is_array($args))
        {
            foreach ($args as $key=>$val)
            {
                if (is_array($val))
                {
                    foreach ($val as $k=>$v)
                    {
                        $data .= $key.'['.$k.']='.rawurlencode($v).'&';
                    }
                }
                else
                {
                    $data .="$key=".rawurlencode($val)."&";
                }
            }
            return trim($data, "&");
        }
        return $args;
    }/*}}}*/

    // 检查
    //内蒙古、甘肃、宁夏  低于等于2.8不拆单，高于2.8公斤的订单进行拆单（每单限重低于等于3.5公斤）全部发邮政。
    static function SpeCutArea($address, $redis) {
        $area = [
            '内蒙古自治区',
            '甘肃省',
            '宁夏回族自治区',
        ];


    }

    // 获取订单商品的完整重量
    static function GetOrderWeight($redisKey, $orderID, $method='tm') {
        $weight = 0;
        if(!is_null($redisKey)) {

            $orderList = Redis::lrange($redisKey, 0, -1);
            foreach ($orderList as $key=>$order) {
                $order = (array)json_decode($order);
                //echo $method."_order_".$order[0]."\r\n";
                $orderDetail = Redis::get($method."_order_".$order[0]);
                $orderDetail = (array) json_decode($orderDetail);
                //var_dump($orderDetail);
                if(isset($orderDetail['weight'])) {
                    $weight += $orderDetail['weight'];
                }else{
                    $weight += 0; // 针对订单导入，商品又没有导入的情况，先标识重量为0
                }
                

            }
            return $weight;
        }

        return $weight;

    }

    // 获取订单的区域位置
    static function GetOrderProvince($redisKey, $orderID=0, $method='tm') {
        $address = "";
        if($method=='tm') {
            if(!is_null($redisKey)) {
                $orderList = Redis::lrange($redisKey, 0, -1);
                $firstOrder = (array)json_decode($orderList[0]);
                $address = explode(" ", $firstOrder[14]);
                //var_dump($address);
                return $address[0];
            }
        }
        if($method=='vd') {
            if(!is_null($redisKey)) {
                $orderList = Redis::lrange($redisKey, 0, -1);
                var_dump($orderList, $redisKey);
                $firstOrder = (array)json_decode($orderList[0]);
                $address = explode(" ", $firstOrder[13]);
                //var_dump($address);
                return $address[0];
            }
        }
        if($method=='tb') {
            if(!is_null($redisKey)) {
                $orderList = Redis::lrange($redisKey, 0, -1);
                $firstOrder = (array)json_decode($orderList[0]);
                $address = explode(" ", $firstOrder[14]);
                //var_dump($address);
                return $address[0];
            }
        }

        return $address;
    }

    // 发送消息到企业微信模块
    static function SendMsgToWECOM($msgtype='text', $text) {
        $url = WECOM_BOT_URL;
        $argc = [];
        $argc['msgtype'] = $msgtype;
        $argc['text'] = $text;

        $header = [];
        $header[] = "Content-Type:application/json";
        $res = self::call($url, json_encode($argc),"post", 0, 120, $header);
        Log::info("send msg to wecom". json_encode($res));
    }

    //处理价格模块
    /*
    公司图书定价机制
9成新美元价3.99*10*0.306
8成新美元价3.99*10*0.236
7成新美元价3.99*10*0.163
9成申东价反推8成新*0.77
8成新申东反推9成新*1.3

    */
    static function ConvertiblePrice($price, $fineness) {
        $result = [];
        if($fineness==8) {
            $result[9] = round($price * 1.3, 2);
            $result[8] = $fineness;
        }
        if($fineness==9) {
            $result[8] = round($price * 0.77, 2);
            $result[9] = $fineness;
        }
        return $result;
    }

    //支持的快递平台
    /**
     * @param null
     * @author Steve Liu
     * @return array
     */
    static function SupportShipping() {
        $shipping = [
            9 => 'YUNDA',
            12 => 'HTKY',
            26 => 'YTO',
            29 => 'POSTB',
            27 => 'ZTO',
            32=>'STO'
        ];
        $shipping = \Illuminate\Support\Facades\Cache::get("shop_shipping");
        if(empty($shipping)) {
            $shipping = \App\Models\Sd\Shipping::where("enabled",1)->select(["shipping_id","shipping_code"])->get();
            if(!is_null($shipping)) {
                $shippings = [];
                foreach($shipping as $key=>$ship){
                    $shippings[$ship->shipping_id] = $ship->shipping_code;
                }
                \Illuminate\Support\Facades\Cache::put("shop_shipping", json_encode($shippings));
                return $shippings;
            }
            return false;
            //return $shipping;
        }
        return json_decode($shipping);
    }

    //处理特殊商品重量
    /*@param goods_mark 商品标识
    *@return $weight
    */
    static function convertSpecialGoods($goods_mark) {
        $weight = 0;
        $mark = substr($goods_mark, 0, 1);
        if($mark=="l") {
            $weight = 1500; //重量为1.5千克
        }

        if(empty($weight)) {
            $goodsDetail = \App\Models\Sd\Good::where("goods_id", $goods_mark)->select(["goods_weight"])->first();
            if (!is_null($goodsDetail)) $weight = $goodsDetail->goods_weight;
            if (empty($weight)) $weight = 150;
            if ($weight == '0.00') $weight = 150;
        }
        return $weight;
    }

    /**
     * 
     * 通过shopconfig 获取对应的配置文件
     * 
     */
    static function config($code) {
        $value = Redis::get("shop_config_".$code);
        if(empty($value)) {
            $value = \App\Models\Sd\ShopConfig::where("code", $code)->select("value")->first();
            if(!is_null($value)) {
                Redis::set("shop_config_".$code, $value->value);
                return $value->value;
            } 
        }
        return $value;
    }

    /**
     * 
     * 爬取Amazon数据操作
     * @param string $isbn
     * @return boolean|string
     * @author Steve
     * 
     */
    static function proxycrawl($isbn) {
        if(strlen($isbn)==13){
            $isbn10 = self::isbn13to10($isbn);
            $isbn13 = $isbn;
        }  else {
            $isbn13 = self::isbn10to13($isbn);
            $isbn10 = $isbn;
        } 
        //先查询amazon data table 中是否有数据
        $data = AmazonData::where("isbn", $isbn13)->select(["body"])->first();
        if(is_null($data)) {
            $api = new \ProxyCrawl\CrawlingAPI(['token' => env("PROXYCRAWL_TOKEN")]);
            $response = $api->get('https://www.amazon.com/gp/product/'.$isbn10, ['scraper'=>'amazon-product-details', 'format' => 'json']);

            //Log::info($isbn."--".json_encode($response));

            if ($response->statusCode === 200) {

                $data = AmazonData::where("isbn", $isbn13)->select(["body"])->first();
                if(is_null($data)) {
                    $data = new AmazonData();
                    $data->isbn = $isbn13;
                    //$json = json_encode($response->b)
    
                    //var_dump($response->body);
                    $json_body = json_decode($response->body);
                    if($json_body->body->name=="null") $json_body->body->name="无"; //有部分数据是 null的情况
    
                    $data->body = json_encode($json_body->body);
                    $data->save();
                    return json_encode($json_body->body);
                }
                return $data->body;
                
            }else{
                //Log::info($isbn."--".json_encode($response));
                return false;
            }
        }
        return $data->body;
    }

    // add format amazon data
    static function formatAmazonData($body, $isbn, $id=0) {
        if($id > 0) $english = English::where("id", $id)->first();
        //var_dump($body, $isbn);

        //var_dump($body);
        //var_dump(!isset($body->name), !isset($body->price));
        if(is_object($body) && !isset($body->name)) {
            $book['name']="无";
            $book['author']="无";
            $book['translate']="无";
            $book['img'] = "";
            $book['publisher'] = "";
            $book['publishdate'] = "";
            $book['market_price'] = "0.00";
            return $book;
        }
        if(!isset($body->name) && !isset($body->price)) return false;
        
        //var_dump($body);

        $book['name'] = $body->name;
        $book['img'] = $body->mainImage;

        //$english->name = $body->name;
        //$english->img = $body->mainImage;
        //$english->is_black = 0;
        //$english->batch = "0000000000";

        if ($body->price != null) {
            $price = substr($body->price, 1);
            $book['market_price'] = 10 * floatval($price);
        } else {
            $book['market_price'] = 0;
        }

        $byLineInfo = $body->byLineInfo;
        //var_dump($byLineInfo);exit;
        $author = $byLineInfo->name;
        $author = str_replace('Visit Amazon\'s ', '', $author);
        $author = str_replace(' Page', '', $author);
        //$book['author'] = $author;
        
        //$english->translate = "";
        //$english->author = $author;
        $book['author'] = $author;
        $info = $body->productInformation;
        //$info = array_slice($info, 0, 7);
        //$attr_map = ['Publisher'=>'publisher', 'Language'=>''];
        $attr_holder = [];

        foreach ($info as $attr) {
            $name = strval($attr->name);
            $name = str_replace(' ‏','',$name);
            $attr_holder[$name] = str_replace('‎ ','',$attr->value);
        }

        if (isset($attr_holder['Publisher'])) {
            $pos = strrpos($attr_holder['Publisher'], '(');
            $publisher = substr($attr_holder['Publisher'], 0, $pos-1);
            $publishdate = substr($attr_holder['Publisher'], $pos+1);
            if ($pos = strpos($publisher, ' /')) {
                $publisher1 = substr($publisher, 0, $pos);
            } else {
                $publisher1 = $publisher;
            }
            $book['publisher'] = trim($publisher1);
            $publishdate = str_replace(')', '', $publishdate);
            $date = new \DateTime($publishdate);
            $book['publishdate'] = date_format($date, 'Y-m-d');
        } else {
            //$this->cache->set($isbn, $body);
            //self::log($isbn, ['isbn'=>$isbn10]);
            $book['publisher'] = $book['publishdate'] = '';
        }





        //$english->save();

        return $book;
    }

    // 基于ISBN生成hash 数据
    static function ISBNhash($isbn) {
        if (substr($isbn, 0, 3) == '978') {
            $hash = substr($isbn, 3).'4';
        } else {
            $hash = substr($isbn, 3).'a';
        }
        return $hash;
    }

        // 处理重复数据订单提醒
    static function readRepData() {
        $queue = self::$rep_queue;
        //$len = Redis::lLen($queue); // 长度
        $items = Redis::lrange($queue, 0 ,-1);
        //var_dump($items,$queue);
        $orders = "";
        foreach($items as $key=>$item) {
            $item = json_decode($item);
            $orders.= $item->tid;
        }
        Log::info("send msg to wcom ".$orders);
        if(!empty($orders)) {
            Redis::del($queue);

            $text = [];
            $text['content'] = "此订单已在系统中存在请注意: ".$orders;

            $send = self::SendMsgToWECOM("text", $text);
            Log::info("send data log ".json_encode($send));

        }

    }

    //订单状态
    static function getPayStatus() {
        return [
            PS_UNPAYED => '未付款',
            PS_PAYING => '付款中',
            PS_PAYED => '已付款',
           PS_DANGBAOPAYING => '担保支付'
        ];
    }

    //订单配送状态
    static function getShippingStatus() {
        return [

        ];
    }

    //平台
    static function getPlatform() {
        return [
        'JD' => '京东',
        '淘宝'=>'淘宝',
        '天猫'=>"天猫"
        ];
    }

    //平台年龄数据
    static function getAge() {
        return [
            '0-2'=> '0-2',
            '11-14'=> '11-14',
            '3-5'=> '3-5',
            '3-6'=> '3-6',
            '5-6'=> '5-6',
            '6-9'=> '6-9',
            '7-10'=> '7-10'
        ];
    }

    //应对与商品这边做好缓存使用
    static function CacheGoods($goods_id) {
        $key = "goods_".$goods_id;
        $CacheGoods = \Illuminate\Support\Facades\Cache::get($key);
        if(empty($CacheGoods)){
            $CacheGoods = [];
            $goods = \App\Models\Sd\Good::where("goods_id", $goods_id)->select(["isbn","dimensions","page","look","size","placedays","fineness"])->first();
            if(is_null($goods)) return false;

            $CacheGoods['goods'] = $goods->toArray();

            $attr = \App\Models\Sd\GoodAttr::where("goods_id", $goods_id)->pluck("attr_value","attr_id");

            if(!is_null($attr)) $CacheGoods['attr'] = $attr->toArray();

            $more = \App\Models\Sd\GoodMore::where("goods_id", $goods_id)->select(['age'])->first();
            if(!is_null($more)) $CacheGoods['more'] = $more->toArray();
            

            \Illuminate\Support\Facades\Cache::put($key, $CacheGoods);
            \Illuminate\Support\Facades\Cache::put("goods_".$goods->isbn, $goods_id);

        }
        
        return $CacheGoods;



    }

}
