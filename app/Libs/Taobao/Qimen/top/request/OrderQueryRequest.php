<?php
/**
 * TOP API: taobao.qimen.order.query request
 * 
 * @author auto create
 * @since 1.0, 2021.08.02
 */
class OrderQueryRequest
{
	/** 
	 * 结束时间, string (19) , YYYY-MM-DD HH:MM:SS
	 **/
	private $endTime;
	
	/** 
	 * 移动电话, string (50) , 必填
	 **/
	private $mobile;
	
	/** 
	 * 姓名, string (50) , 必填
	 **/
	private $name;
	
	/** 
	 * 1001，客服咨询；1002，售后服务
	 **/
	private $scene;
	
	/** 
	 * 开始时间, string (19) , YYYY-MM-DD HH:MM:SS
	 **/
	private $startTime;
	
	/** 
	 * 固定电话, string (50)
	 **/
	private $tel;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setScene($scene)
	{
		$this->scene = $scene;
		$this->apiParas["scene"] = $scene;
	}

	public function getScene()
	{
		return $this->scene;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["startTime"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setTel($tel)
	{
		$this->tel = $tel;
		$this->apiParas["tel"] = $tel;
	}

	public function getTel()
	{
		return $this->tel;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.order.query";
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
