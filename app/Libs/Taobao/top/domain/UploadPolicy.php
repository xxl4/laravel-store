<?php

/**
 * 请求策略
 * @author auto create
 */
class UploadPolicy
{
	
	/** 
	 * 图片分类ID，可通过taobao.picture.category.get获取。根目录值为0。
	 **/
	public $dir_id;
	
	/** 
	 * token有效期的截止时间，值为自1970年1月1日0时起的毫秒数。若当前时间晚于expired_time，token失效，上传文件失败。
	 **/
	public $expired_time;
	
	/** 
	 * 限制用户上传文件的类型，多个值用；分隔。 可设置的值为：image/jpeg,image/png,image/webp等。 若用户上传文件的mime类型不在mime_limit范围内，无法上传成功。
	 **/
	public $mime_limit;
	
	/** 
	 * 限制用户上传文件的大小。 若用户上传文件大小超过size_limit，无法上传成功。
	 **/
	public $size_limit;	
}
?>