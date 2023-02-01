<?php

class DoudianOpSpiRequest
{
    private $spiParam;

    private $config;

    private $spiClient;

    public function execute($callback) {
       return $this->spiClient->request($this, $callback);
    }

    public function __construct()
    {
        $this->config = GlobalConfig::getGlobalConfig();
        $this->spiClient = DoudianOpSpiClient::getInstance();
        $this->spiParam = new SpiParam();
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function getSpiParam()
    {
        return $this->spiParam;
    }

    public function getSpiClient()
    {
        return $this->spiClient;
    }

    public function setConfig($config)
    {
        $this->config = $config;
    }

    public function setSpiClient($spiClient)
    {
        $this->spiClient = $spiClient;
    }

    public function setSpiParam($spiParam)
    {
        $this->spiParam = $spiParam;
    }
}