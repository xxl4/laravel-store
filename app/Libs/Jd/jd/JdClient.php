<?php
class JdClient
{
    public $serverUrl = "https://api.jd.com/routerjson";

    public $accessToken;

    public $connectTimeout = 0;

    public $readTimeout = 0;

    public $appKey;

    public $appSecret;

    public $version = "2.0";

    public $format = "json";

    private $charset_utf8 = "UTF-8";

    private $json_param_key = "360buy_param_json";

    protected function generateSign($params)
    {
        ksort($params);
        $stringToBeSigned = $this->appSecret;
        foreach ($params as $k => $v)
        {
            if("@" != substr($v, 0, 1))
            {
                $stringToBeSigned .= "$k$v";
            }
        }
        unset($k, $v);
        $stringToBeSigned .= $this->appSecret;
        return strtoupper(md5($stringToBeSigned));
    }

    public function curl($url, $postFields = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if ($this->readTimeout) {
            curl_setopt($ch, CURLOPT_TIMEOUT, $this->readTimeout);
        }
        if ($this->connectTimeout) {
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->connectTimeout);
        }
        //https ÇëÇó
        if(strlen($url) > 5 && strtolower(substr($url,0,5)) == "https" ) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }

        //var_dump($postFields);exit;

        if (is_array($postFields) && 0 < count($postFields))
        {
            $postBodyString = "";
            $postMultipart = false;
            foreach ($postFields as $k => $v)
            {
                if("@" != substr($v, 0, 1))//ÅÐ¶ÏÊÇ²»ÊÇÎÄ¼þÉÏ´«
                {
                    $postBodyString .= "$k=" . urlencode($v) . "&";
                }
                else
                {
                    $postMultipart = true;
                }
            }
            unset($k, $v);
            curl_setopt($ch, CURLOPT_POST, true);
            if ($postMultipart)
            {
                curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
            }
            else
            {
                curl_setopt($ch, CURLOPT_POSTFIELDS, substr($postBodyString,0,-1));
            }
        }
        $reponse = curl_exec($ch);

        if (curl_errno($ch))
        {
            throw new Exception(curl_error($ch),0);
        }
        else
        {
            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode)
            {
                throw new Exception($reponse,$httpStatusCode);
            }
        }
        curl_close($ch);
        return $reponse;
    }

    public function execute($request, $access_token = null)
    {
        //×é×°ÏµÍ³²ÎÊý
        $sysParams["app_key"] = $this->appKey;
        $version = $request->getVersion();

        $sysParams["v"] = empty($version)? $this->version:$version;
        $sysParams["method"] = $request->getApiMethodName();
        $sysParams["timestamp"] = date("Y-m-d H:i:s");
        if (null != $access_token)
        {
            $sysParams["access_token"] = $access_token;
        }

        //»ñÈ¡ÒµÎñ²ÎÊý
        $apiParam = $request->getApiParas();
        //$sysParams[$this->json_param_key] = $apiParam;
        $apiParams[$this->json_param_key] = $apiParam;

        //Ç©Ãû
        $sysParams["sign"] = $this->generateSign($sysParams);
        //ÏµÍ³²ÎÊý·ÅÈëGETÇëÇó´®
        $requestUrl = $this->serverUrl . "?";
        foreach ($sysParams as $sysParamKey => $sysParamValue)
        {
            $requestUrl .= "$sysParamKey=" . urlencode($sysParamValue) . "&";
        }


        //var_dump($requestUrl);

        try
        {
            $resp = $this->curl($requestUrl, $apiParams);
        }
        catch (Exception $e)
        {
            $result = new \stdClass();
            $result->code = $e->getCode();
            $result->msg = $e->getMessage();
            return $result;
        }

        //½âÎöJD·µ»Ø½á¹û
        $respWellFormed = false;
        if ("json" == $this->format)
        {
            $respObject = json_decode($resp);
            if (null !== $respObject)
            {
                $respWellFormed = true;
//				foreach ($respObject as $propKey => $propValue)
//				{
//					$respObject = $propValue;
//				}
            }
        }
        else if("xml" == $this->format)
        {
            $respObject = @simplexml_load_string($resp);
            if (false !== $respObject)
            {
                $respWellFormed = true;
            }
        }

        //·µ»ØµÄHTTPÎÄ±¾²»ÊÇ±ê×¼JSON»òÕßXML£¬¼ÇÏÂ´íÎóÈÕÖ¾
        if (false === $respWellFormed)
        {
            $this->logCommunicationError($sysParams["method"],$requestUrl,"HTTP_RESPONSE_NOT_WELL_FORMED",$resp);
            $result = new \stdClass();
            $result->code = 0;
            $result->msg = "HTTP_RESPONSE_NOT_WELL_FORMED";
            return $result;
        }

        return $respObject;
    }

    public function exec($paramsArray)
    {
        if (!isset($paramsArray["method"]))
        {
            trigger_error("No api name passed");
        }
        $inflector = new LtInflector;
        $inflector->conf["separator"] = ".";
        $requestClassName = ucfirst($inflector->camelize(substr($paramsArray["method"], 7))) . "Request";
        if (!class_exists($requestClassName))
        {
            trigger_error("No such api: " . $paramsArray["method"]);
        }

        $session = isset($paramsArray["session"]) ? $paramsArray["session"] : null;

        $req = new $requestClassName;
        foreach($paramsArray as $paraKey => $paraValue)
        {
            $inflector->conf["separator"] = "_";
            $setterMethodName = $inflector->camelize($paraKey);
            $inflector->conf["separator"] = ".";
            $setterMethodName = "set" . $inflector->camelize($setterMethodName);
            if (method_exists($req, $setterMethodName))
            {
                $req->$setterMethodName($paraValue);
            }
        }
        return $this->execute($req, $session);
    }

    protected function logCommunicationError($apiName, $requestUrl, $errorCode, $responseTxt)
    {

    }
}