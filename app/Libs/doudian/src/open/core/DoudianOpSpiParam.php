<?php

class DoudianOpSpiParam
{

    public $appKey; //服务器下发的app key

    public $timestamp; //服务器下发的时间戳

    public $sign; //服务器下发的签名

    public $signV2; //服务端下发的v2版本签名（不转义）

    public $signMethod; //服务器下发的签名计算方法

    public $paramJson; //服务器下发的paramJson

}