<?php
class EclpMasterInsertCustomerRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.master.insertCustomer";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private  $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                                        		                                    	                   			private $sellerNo;
    	                        
	public function setSellerNo($sellerNo){
		$this->sellerNo = $sellerNo;
         $this->apiParas["sellerNo"] = $sellerNo;
	}

	public function getSellerNo(){
	  return $this->sellerNo;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $customerNo;
    	                        
	public function setCustomerNo($customerNo){
		$this->customerNo = $customerNo;
         $this->apiParas["customerNo"] = $customerNo;
	}

	public function getCustomerNo(){
	  return $this->customerNo;
	}

                        	                   			private $customerName;
    	                        
	public function setCustomerName($customerName){
		$this->customerName = $customerName;
         $this->apiParas["customerName"] = $customerName;
	}

	public function getCustomerName(){
	  return $this->customerName;
	}

                        	                   			private $contacts;
    	                        
	public function setContacts($contacts){
		$this->contacts = $contacts;
         $this->apiParas["contacts"] = $contacts;
	}

	public function getContacts(){
	  return $this->contacts;
	}

                        	                   			private $phone;
    	                        
	public function setPhone($phone){
		$this->phone = $phone;
         $this->apiParas["phone"] = $phone;
	}

	public function getPhone(){
	  return $this->phone;
	}

                        	                   			private $customerEmail;
    	                        
	public function setCustomerEmail($customerEmail){
		$this->customerEmail = $customerEmail;
         $this->apiParas["customerEmail"] = $customerEmail;
	}

	public function getCustomerEmail(){
	  return $this->customerEmail;
	}

                        	                   			private $customerAddress;
    	                        
	public function setCustomerAddress($customerAddress){
		$this->customerAddress = $customerAddress;
         $this->apiParas["customerAddress"] = $customerAddress;
	}

	public function getCustomerAddress(){
	  return $this->customerAddress;
	}

                        	                   			private $customerType;
    	                        
	public function setCustomerType($customerType){
		$this->customerType = $customerType;
         $this->apiParas["customerType"] = $customerType;
	}

	public function getCustomerType(){
	  return $this->customerType;
	}

                        	                   			private $transitType;
    	                        
	public function setTransitType($transitType){
		$this->transitType = $transitType;
         $this->apiParas["transitType"] = $transitType;
	}

	public function getTransitType(){
	  return $this->transitType;
	}

                        	                   			private $warehouseName;
    	                        
	public function setWarehouseName($warehouseName){
		$this->warehouseName = $warehouseName;
         $this->apiParas["warehouseName"] = $warehouseName;
	}

	public function getWarehouseName(){
	  return $this->warehouseName;
	}

                        	                   			private $provinceName;
    	                        
	public function setProvinceName($provinceName){
		$this->provinceName = $provinceName;
         $this->apiParas["provinceName"] = $provinceName;
	}

	public function getProvinceName(){
	  return $this->provinceName;
	}

                        	                   			private $cityName;
    	                        
	public function setCityName($cityName){
		$this->cityName = $cityName;
         $this->apiParas["cityName"] = $cityName;
	}

	public function getCityName(){
	  return $this->cityName;
	}

                        	                   			private $countyName;
    	                        
	public function setCountyName($countyName){
		$this->countyName = $countyName;
         $this->apiParas["countyName"] = $countyName;
	}

	public function getCountyName(){
	  return $this->countyName;
	}

                        	                   			private $townName;
    	                        
	public function setTownName($townName){
		$this->townName = $townName;
         $this->apiParas["townName"] = $townName;
	}

	public function getTownName(){
	  return $this->townName;
	}

                        	                   			private $rection;
    	                        
	public function setRection($rection){
		$this->rection = $rection;
         $this->apiParas["rection"] = $rection;
	}

	public function getRection(){
	  return $this->rection;
	}

                        	                   			private $customerRemark;
    	                        
	public function setCustomerRemark($customerRemark){
		$this->customerRemark = $customerRemark;
         $this->apiParas["customerRemark"] = $customerRemark;
	}

	public function getCustomerRemark(){
	  return $this->customerRemark;
	}

                        	                   			private $licenseAddr;
    	                        
	public function setLicenseAddr($licenseAddr){
		$this->licenseAddr = $licenseAddr;
         $this->apiParas["licenseAddr"] = $licenseAddr;
	}

	public function getLicenseAddr(){
	  return $this->licenseAddr;
	}

                        	                   			private $licenseUnit;
    	                        
	public function setLicenseUnit($licenseUnit){
		$this->licenseUnit = $licenseUnit;
         $this->apiParas["licenseUnit"] = $licenseUnit;
	}

	public function getLicenseUnit(){
	  return $this->licenseUnit;
	}

                        	                   			private $licenseUnitNo;
    	                        
	public function setLicenseUnitNo($licenseUnitNo){
		$this->licenseUnitNo = $licenseUnitNo;
         $this->apiParas["licenseUnitNo"] = $licenseUnitNo;
	}

	public function getLicenseUnitNo(){
	  return $this->licenseUnitNo;
	}

                        	                   			private $warehouseNo;
    	                        
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $sellerName;
    	                        
	public function setSellerName($sellerName){
		$this->sellerName = $sellerName;
         $this->apiParas["sellerName"] = $sellerName;
	}

	public function getSellerName(){
	  return $this->sellerName;
	}

                                                    	}





        
 

