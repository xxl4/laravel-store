<?php

/**
 * 参数对象
 * @author auto create
 */
class CmdRenderParams
{
	
	/** 
	 * 客户端ID
	 **/
	public $client_id;
	
	/** 
	 * 客户端类型：weixin/alipay/native
	 **/
	public $client_type;
	
	/** 
	 * 打印配置
	 **/
	public $config;
	
	/** 
	 * 需要打印的文档，包括模板地址、打印数据
	 **/
	public $document;
	
	/** 
	 * 打印机名称
	 **/
	public $printer_name;	
}
?>