<?php


class DoudianOpSpiClient
{
    public function request($request, $callback) {
        $appKey = $request->getSpiParam()->appKey;
        $timestamp = $request->getSpiParam()->timestamp;
        $sign = $request->getSpiParam()->sign;
        $signMethod = $request->getSpiParam()->signMethod;
        $appSecret = $request->getConfig()->appSecret;

        $response = new DoudianOpSpiResponse();

        //将string类型的paramJson转成数组
        $paramJsonArray = json_decode($request->getSpiParam()->paramJson);
        $sortedParamJson = SignUtil::marshal($paramJsonArray);
        $signMethodNumber = $signMethod == 'hmac-sha256' ? 2 : 1;
        //验证签名
        $calcSign = SignUtil::spiSign($appKey, $appSecret, $timestamp, $sortedParamJson, $signMethodNumber);
        print $calcSign . "\n";
        if ($sign != $calcSign) {
            $response->code = 100001;
            return $response;
        }

        $spiContext = new DoudianOpSpiContext();
        $spiContext->setRequest($request);
        $spiContext->setResponse($response);
        //执行业务逻辑
        call_user_func($callback, $spiContext);
        return $response;
    }


    private static $defaultInstance;

    public static function getInstance(){

        if(!(self::$defaultInstance instanceof self)){
            self::$defaultInstance = new self();
        }
        return self::$defaultInstance;
    }
}
