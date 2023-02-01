<?php
/**
 * TOP API: taobao.picture.token request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class PictureTokenRequest
{
	/** 
	 * 请求参数
	 **/
	private $generateTokenRequest;
	
	private $apiParas = array();
	
	public function setGenerateTokenRequest($generateTokenRequest)
	{
		$this->generateTokenRequest = $generateTokenRequest;
		$this->apiParas["generate_token_request"] = $generateTokenRequest;
	}

	public function getGenerateTokenRequest()
	{
		return $this->generateTokenRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.picture.token";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
