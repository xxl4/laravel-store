<?php

class GlobalConfig extends DoudianOpConfig
{

    private static $instance;

    private function __construct(){}

    public static function getGlobalConfig(){

        if(!(self::$instance instanceof self)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone(){}
}