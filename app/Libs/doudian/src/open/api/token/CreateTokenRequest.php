<?php

class CreateTokenRequest
{

    //通用变量
    private $param;

    private $config;

    public function getParam()
    {
        return $this->param;
    }

    public function setParam($param)
    {
        $this->param = $param;
    }

    //通用方法
    public function getUrlPath() {
        return "/token/create";
    }

    public function setConfig($config) {
        $this->config = $config;
    }

    public function getConfig() {
        return $this->config;
    }

    public function execute($accessToken) {
        return DoudianOpClient::getInstance()->request($this, $accessToken);
    }

    public function __construct()
    {
        $this->config = GlobalConfig::getGlobalConfig();
        $this->param = new CreateTokenParam();
    }
}