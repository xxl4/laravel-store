<?php

class HttpClient
{
    /**
     * @throws Exception
     */
    public function post($httpRequest){
        $data  = $httpRequest->body;
        $headerArray =array("Content-type:application/json;charset='utf-8'","Accept:application/json", "from:sdk", "sdk-type:php");
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $httpRequest->url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,false);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_FAILONERROR, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl,CURLOPT_HTTPHEADER,$headerArray);

        //设置http超时时间
        curl_setopt($curl, CURLOPT_TIMEOUT, $httpRequest->readTimeout);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $httpRequest->connectTimeout);
        $output = curl_exec($curl);
        $httpResponse = new HttpResponse();
        if (curl_errno($curl))
        {
            throw new Exception(curl_error($curl),0);
        }
        else
        {
            $httpStatusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            $httpResponse->statusCode = $httpStatusCode;
        }
        curl_close($curl);

        $httpResponse->body = $output;
        return $httpResponse;
    }

    private static $defaultInstance;

    public function __construct(){}

    public static function getInstance(){

        if(!(self::$defaultInstance instanceof self)){
            self::$defaultInstance = new self();
        }
        return self::$defaultInstance;
    }

    private function __clone(){}
}