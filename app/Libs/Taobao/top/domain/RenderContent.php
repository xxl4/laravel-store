<?php

/**
 * 包含的区域列表。对于有自定义区的文档，content会包含两条，即第一条是标准模板区域内容、第二条是自定义区域内容
 * @author auto create
 */
class RenderContent
{
	
	/** 
	 * 附加数据(用于修改数据)
	 **/
	public $add_data;
	
	/** 
	 * 是否获取加密数据
	 **/
	public $encrypted;
	
	/** 
	 * 打印数据
	 **/
	public $print_data;
	
	/** 
	 * 数据签名
	 **/
	public $signature;
	
	/** 
	 * 模板url
	 **/
	public $template_url;
	
	/** 
	 * 加密数据使用秘钥版本
	 **/
	public $ver;	
}
?>