<?php
/**
 * TOP API: taobao.qimen.supplier.synchronize request
 * 
 * @author auto create
 * @since 1.0, 2019.11.20
 */
class SupplierSynchronizeRequest
{
	/** 
	 * add|update, 必填
	 **/
	private $actionType;
	
	/** 
	 * 区域, string (50)
	 **/
	private $area;
	
	/** 
	 * 城市, string (50)
	 **/
	private $city;
	
	/** 
	 * 国家二字码，string（50）
	 **/
	private $countryCode;
	
	/** 
	 * 详细地址, string (200)
	 **/
	private $detailAddress;
	
	/** 
	 * 电子邮箱, string (50)
	 **/
	private $email;
	
	/** 
	 * 是否有效, Y/N (默认为Y)
	 **/
	private $isValid;
	
	/** 
	 * 联系人姓名, string (50)
	 **/
	private $name;
	
	/** 
	 * 省份, string (50)
	 **/
	private $province;
	
	/** 
	 * 备注, string (500)
	 **/
	private $remark;
	
	/** 
	 * 供应商编码 string (50), 必填
	 **/
	private $supplierCode;
	
	/** 
	 * 供应商名称 string (200) , 必填
	 **/
	private $supplierName;
	
	/** 
	 * 联系电话, string (50)
	 **/
	private $tel;
	
	/** 
	 * 村镇, string (50)
	 **/
	private $town;
	
	private $apiParas = array();
	
	public function setActionType($actionType)
	{
		$this->actionType = $actionType;
		$this->apiParas["actionType"] = $actionType;
	}

	public function getActionType()
	{
		return $this->actionType;
	}

	public function setArea($area)
	{
		$this->area = $area;
		$this->apiParas["area"] = $area;
	}

	public function getArea()
	{
		return $this->area;
	}

	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setCountryCode($countryCode)
	{
		$this->countryCode = $countryCode;
		$this->apiParas["countryCode"] = $countryCode;
	}

	public function getCountryCode()
	{
		return $this->countryCode;
	}

	public function setDetailAddress($detailAddress)
	{
		$this->detailAddress = $detailAddress;
		$this->apiParas["detailAddress"] = $detailAddress;
	}

	public function getDetailAddress()
	{
		return $this->detailAddress;
	}

	public function setEmail($email)
	{
		$this->email = $email;
		$this->apiParas["email"] = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setIsValid($isValid)
	{
		$this->isValid = $isValid;
		$this->apiParas["isValid"] = $isValid;
	}

	public function getIsValid()
	{
		return $this->isValid;
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

	public function setProvince($province)
	{
		$this->province = $province;
		$this->apiParas["province"] = $province;
	}

	public function getProvince()
	{
		return $this->province;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function setSupplierCode($supplierCode)
	{
		$this->supplierCode = $supplierCode;
		$this->apiParas["supplierCode"] = $supplierCode;
	}

	public function getSupplierCode()
	{
		return $this->supplierCode;
	}

	public function setSupplierName($supplierName)
	{
		$this->supplierName = $supplierName;
		$this->apiParas["supplierName"] = $supplierName;
	}

	public function getSupplierName()
	{
		return $this->supplierName;
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

	public function setTown($town)
	{
		$this->town = $town;
		$this->apiParas["town"] = $town;
	}

	public function getTown()
	{
		return $this->town;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.supplier.synchronize";
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
