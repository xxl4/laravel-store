<?php
/**
 * Created by PhpStorm.
 * User: stevenliu
 * Date: 2020-07-29
 * Time: 10:56
 */

namespace App\Libs\Fxg;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Tebru\Gson\GsonBuilder;
use Tebru\Gson\Gson;


class Fxg
{
    private $method = null;
    private $app_key = null;
    private $app_secret = null;
    private $access_token = null;
    private $param_json = null;
    private $timestamp = null;
    private $v = '2';
    private $sign = null;

    public function __construct($access_token)
    {
        $this->app_key = env("TT_APPKEY");
        $this->app_secret = env("TT_APPSECRET");
        $this->timestamp = date("Y-m-d H:i:s");
        $this->access_token = $access_token;

    }

    // 商品
    public function ProductDetail() {

    }

    public function ProductList() {

    }

    /**
     * @link https://op.jinritemai.com/docs/api-docs/14/58
     * @author
     */
    public function ProductGetGoodsCategory(array $params) {
        $url = "/product/getGoodsCategory";
        $this->method = "product.getGoodsCategory";
        $request = [];
        $request['method'] = $this->method;
        //ksort($params);
        $request['param_json'] = json_encode($params);
        $request['sign'] = $this->GetSign($params);

        $this->exec($url, $request);
    }

    /**
     * @link https://op.jinritemai.com/docs/api-docs/14/59
     * @param http://openapi-fxg.jinritemai.com/product/add?app_key=your_app_key_here&method=product.add&access_token=your_accesstoken_here&param_json={"description":"http://img.alicdn.com/imgextra/i3/729863055/TB2BROYcamWBuNkHFJHXXaatVXa-729863055.jpg|http://img.alicdn.com/imgextra/i2/729863055/TB2tDz7iXmWBuNjSspdXXbugXXa-729863055.jpg","discount_price":"26800","first_cid":"2","market_price":"29800","mobile":"13122223333","name":"气质时尚女装碎花修身显瘦裙子","out_product_id":"123456","pay_type":"2","pic":"http://img.alicdn.com/imgextra/i1/729863055/TB2FG49iuOSBuNjy0FdXXbDnVXa_!!729863055.jpg|http://img.alicdn.com/imgextra/i4/729863055/TB2kMSXiuuSBuNjSsziXXbq8pXa_!!729863055.jpg","product_format":"品牌:ss^货号:8888^上市年份季节:2018年秋季","recommend_remark":"remark...","second_cid":"123","spec_id":"1","spec_pic":"5|http://img.alicdn.com/imgextra/i2/729863055/TB2mdV0cDXYBeNkHFrdXXciuVXa_!!729863055.jpg","third_cid":"1234"}&timestamp=2018-04-27%2011:55:56&v=2&sign=your_sign_here
     * @author Steven Liu
     */
    public function ProductAdd($params) {
        $url = "/product/add";
        $this->method = "product.add";
        //$param = [];
        //ksort($params);

        $request = [];
        $request['method'] = $this->method;
        $request['param_json'] = json_encode($params, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        $request['sign'] = $this->GetSign($params);
        ksort($request);

        $this->exec($url, $request);
    }

    public function ProductDel() {

    }


    public function ProductEdit() {

    }

    public function SpecAdd() {

    }

    /**
     * @link https://op.jinritemai.com/docs/api-docs/14/64
     */
    public function SpecList($params) {
        $url = "/spec/list";
        $this->method = "spec.list";
        $request = [];
        $request['method'] = $this->method;
        $request['param_json'] = json_encode($params);

        //var_dump($request);exit;

        $request['sign'] = $this->GetSign($params);

        $this->exec($url, $request);
    }









    // 订单

    public function OrderList() {

    }

    public function OrderDetail() {

    }

    public function OrderStockUp() {

    }

    public function OrderCancel() {

    }

    public function OrderServiceList() {

    }

    public function OrderReplyService() {

    }

    // 物流

    public function OrderLogisticsCompanyList() {

    }

    public function OrderLogisticsAdd() {

    }

    public function OrderLogisticsEdit() {

    }

    // 售后
    public function RefundOrderList() {

    }

    public function RefundShopRefund() {

    }

    public function AfterSaleOrderList() {

    }

    public function AfterSaleOrderDetail() {

    }

    public function AfterSaleBuyerReturn() {

    }

    public function AfterSaleFirmReceive() {

    }

    public function AfterSaleUploadCompensation(){

    }

    public function AfterSaleAddOrderRemark() {

    }

    public function AfterSaleRefundProcessDetail() {

    }


    /**
     * 通过参数生成签名
     * @param  array $params
     * @return string
     */
    public function GetSign($params) {
        //ksort($params);
        $md5 = [];
        $md5['app_key'] = env("TT_APPKEY");
        $md5['method'] = $this->method;
        $md5['param_json'] = json_encode($params, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        //$gson = Gson::builder()->build();
        //$md5['param_json'] = $gson->toJson($params);
        //$md5['param_json'] = json_encode($params);
        $md5['timestamp'] = $this->timestamp;
        $md5['v'] = $this->v;
        ksort($md5);
        $md5Str = "";
        foreach ($md5 as $key=>$item) {
            $md5Str.=$key.$item;
        }
        $md5Str = $this->app_secret.$md5Str.$this->app_secret;

        echo $md5Str."\r\n";

        return md5($md5Str);

    }





    public static function AccessToken() {
        $content = Cache::get("fxg");
        //if(true) {
        if($content==false) {
            $url = env("TT_URL")."/oauth2/access_token?app_id=".env("TT_APPKEY")."&app_secret=".env("TT_APPSECRET")."&grant_type=authorization_self";
            $content = file_get_contents($url);

            //var_dump($content);

            Cache::put("fxg", $content, 604800);
        }
        $output = json_decode($content);
        return $output->data;
    }

    public function exec($url, $data) {
        $data['app_key'] = $this->app_key;
        $data['timestamp'] = $this->timestamp;
        $data['v'] = $this->v;



        //var_dump($data);exit;

        ksort($data);

        $data['access_token'] = $this->access_token;

        //var_dump($data);exit;

        $url = env("TT_URL").$url."?".http_build_query($data);
        echo $url."\r\n";

        Log::info("url".$url);

        $resp = file_get_contents($url);

        echo $resp."\r\n";

        Log::info("response". $resp);
    }


}