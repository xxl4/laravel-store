<?php
class B2bOpenPoCenterProviderSubmitPoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.open.PoCenterProvider.submitPo";
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
                                    	                        	                        	                   			private $op;
    	                        
	public function setOp($op){
		$this->op = $op;
         $this->apiParas["op"] = $op;
	}

	public function getOp(){
	  return $this->op;
	}

                        	                   			private $systemSource;
    	                        
	public function setSystemSource($systemSource){
		$this->systemSource = $systemSource;
         $this->apiParas["systemSource"] = $systemSource;
	}

	public function getSystemSource(){
	  return $this->systemSource;
	}

                                            		                                    	                   			private $thirdOrderId;
    	                        
	public function setThirdOrderId($thirdOrderId){
		$this->thirdOrderId = $thirdOrderId;
         $this->apiParas["thirdOrderId"] = $thirdOrderId;
	}

	public function getThirdOrderId(){
	  return $this->thirdOrderId;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                                            		                                    	                   			private $paymentType;
    	                        
	public function setPaymentType($paymentType){
		$this->paymentType = $paymentType;
         $this->apiParas["paymentType"] = $paymentType;
	}

	public function getPaymentType(){
	  return $this->paymentType;
	}

                        	                   			private $delayPay;
    	                        
	public function setDelayPay($delayPay){
		$this->delayPay = $delayPay;
         $this->apiParas["delayPay"] = $delayPay;
	}

	public function getDelayPay(){
	  return $this->delayPay;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                        private $shipmentDate;
                              public function setShipmentDate($shipmentDate ){
                 $this->shipmentDate=$shipmentDate;
                 $this->apiParas["shipmentDate"] = $shipmentDate;
              }

              public function getShipmentDate(){
              	return $this->shipmentDate;
              }
                                                                                                                                                                                                                                                                                                                       private $shipmentType;
                              public function setShipmentType($shipmentType ){
                 $this->shipmentType=$shipmentType;
                 $this->apiParas["shipmentType"] = $shipmentType;
              }

              public function getShipmentType(){
              	return $this->shipmentType;
              }
                                                                                                                                                            		                                    	                   			private $freight;
    	                        
	public function setFreight($freight){
		$this->freight = $freight;
         $this->apiParas["freight"] = $freight;
	}

	public function getFreight(){
	  return $this->freight;
	}

                        	                   			private $jdFreight;
    	                        
	public function setJdFreight($jdFreight){
		$this->jdFreight = $jdFreight;
         $this->apiParas["jdFreight"] = $jdFreight;
	}

	public function getJdFreight(){
	  return $this->jdFreight;
	}

                        	                   			private $needValidate;
    	                        
	public function setNeedValidate($needValidate){
		$this->needValidate = $needValidate;
         $this->apiParas["needValidate"] = $needValidate;
	}

	public function getNeedValidate(){
	  return $this->needValidate;
	}

                                                                        		                                    	                   			private $invoiceType;
    	                        
	public function setInvoiceType($invoiceType){
		$this->invoiceType = $invoiceType;
         $this->apiParas["invoiceType"] = $invoiceType;
	}

	public function getInvoiceType(){
	  return $this->invoiceType;
	}

                        	                   			private $putType;
    	                        
	public function setPutType($putType){
		$this->putType = $putType;
         $this->apiParas["putType"] = $putType;
	}

	public function getPutType(){
	  return $this->putType;
	}

                                            		                                    	                   			private $companyName;
    	                        
	public function setCompanyName($companyName){
		$this->companyName = $companyName;
         $this->apiParas["companyName"] = $companyName;
	}

	public function getCompanyName(){
	  return $this->companyName;
	}

                        	                   			private $taxpayerIdentity;
    	                        
	public function setTaxpayerIdentity($taxpayerIdentity){
		$this->taxpayerIdentity = $taxpayerIdentity;
         $this->apiParas["taxpayerIdentity"] = $taxpayerIdentity;
	}

	public function getTaxpayerIdentity(){
	  return $this->taxpayerIdentity;
	}

                        	                   			private $registeredAddress;
    	                        
	public function setRegisteredAddress($registeredAddress){
		$this->registeredAddress = $registeredAddress;
         $this->apiParas["registeredAddress"] = $registeredAddress;
	}

	public function getRegisteredAddress(){
	  return $this->registeredAddress;
	}

                        	                   			private $registeredBank;
    	                        
	public function setRegisteredBank($registeredBank){
		$this->registeredBank = $registeredBank;
         $this->apiParas["registeredBank"] = $registeredBank;
	}

	public function getRegisteredBank(){
	  return $this->registeredBank;
	}

                        	                   			private $registeredBankAccount;
    	                        
	public function setRegisteredBankAccount($registeredBankAccount){
		$this->registeredBankAccount = $registeredBankAccount;
         $this->apiParas["registeredBankAccount"] = $registeredBankAccount;
	}

	public function getRegisteredBankAccount(){
	  return $this->registeredBankAccount;
	}

                        	                   			private $registeredPhone;
    	                        
	public function setRegisteredPhone($registeredPhone){
		$this->registeredPhone = $registeredPhone;
         $this->apiParas["registeredPhone"] = $registeredPhone;
	}

	public function getRegisteredPhone(){
	  return $this->registeredPhone;
	}

                                                                        		                                    	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $mobile;
    	                        
	public function setMobile($mobile){
		$this->mobile = $mobile;
         $this->apiParas["mobile"] = $mobile;
	}

	public function getMobile(){
	  return $this->mobile;
	}

                        	                   			private $regAddressId;
    	                        
	public function setRegAddressId($regAddressId){
		$this->regAddressId = $regAddressId;
         $this->apiParas["regAddressId"] = $regAddressId;
	}

	public function getRegAddressId(){
	  return $this->regAddressId;
	}

                        	                   			private $provinceId;
    	                        
	public function setProvinceId($provinceId){
		$this->provinceId = $provinceId;
         $this->apiParas["provinceId"] = $provinceId;
	}

	public function getProvinceId(){
	  return $this->provinceId;
	}

                        	                   			private $provinceName;
    	                        
	public function setProvinceName($provinceName){
		$this->provinceName = $provinceName;
         $this->apiParas["provinceName"] = $provinceName;
	}

	public function getProvinceName(){
	  return $this->provinceName;
	}

                        	                   			private $cityId;
    	                        
	public function setCityId($cityId){
		$this->cityId = $cityId;
         $this->apiParas["cityId"] = $cityId;
	}

	public function getCityId(){
	  return $this->cityId;
	}

                        	                   			private $cityName;
    	                        
	public function setCityName($cityName){
		$this->cityName = $cityName;
         $this->apiParas["cityName"] = $cityName;
	}

	public function getCityName(){
	  return $this->cityName;
	}

                        	                   			private $countyId;
    	                        
	public function setCountyId($countyId){
		$this->countyId = $countyId;
         $this->apiParas["countyId"] = $countyId;
	}

	public function getCountyId(){
	  return $this->countyId;
	}

                        	                   			private $countyName;
    	                        
	public function setCountyName($countyName){
		$this->countyName = $countyName;
         $this->apiParas["countyName"] = $countyName;
	}

	public function getCountyName(){
	  return $this->countyName;
	}

                        	                   			private $townId;
    	                        
	public function setTownId($townId){
		$this->townId = $townId;
         $this->apiParas["townId"] = $townId;
	}

	public function getTownId(){
	  return $this->townId;
	}

                        	                   			private $townName;
    	                        
	public function setTownName($townName){
		$this->townName = $townName;
         $this->apiParas["townName"] = $townName;
	}

	public function getTownName(){
	  return $this->townName;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                                                                        		                                    	                   			private $title;
    	                        
	public function setTitle($title){
		$this->title = $title;
         $this->apiParas["title"] = $title;
	}

	public function getTitle(){
	  return $this->title;
	}

                        	                   			private $taxpayerIdentity;
    	                        
	public function setTaxpayerIdentity($taxpayerIdentity){
		$this->taxpayerIdentity = $taxpayerIdentity;
         $this->apiParas["taxpayerIdentity"] = $taxpayerIdentity;
	}

	public function getTaxpayerIdentity(){
	  return $this->taxpayerIdentity;
	}

                        	                   			private $companyName;
    	                        
	public function setCompanyName($companyName){
		$this->companyName = $companyName;
         $this->apiParas["companyName"] = $companyName;
	}

	public function getCompanyName(){
	  return $this->companyName;
	}

                        	                   			private $bookInvoiceContent;
    	                        
	public function setBookInvoiceContent($bookInvoiceContent){
		$this->bookInvoiceContent = $bookInvoiceContent;
         $this->apiParas["bookInvoiceContent"] = $bookInvoiceContent;
	}

	public function getBookInvoiceContent(){
	  return $this->bookInvoiceContent;
	}

                        	                   			private $invoiceContent;
    	                        
	public function setInvoiceContent($invoiceContent){
		$this->invoiceContent = $invoiceContent;
         $this->apiParas["invoiceContent"] = $invoiceContent;
	}

	public function getInvoiceContent(){
	  return $this->invoiceContent;
	}

                        	                   			private $phone;
    	                        
	public function setPhone($phone){
		$this->phone = $phone;
         $this->apiParas["phone"] = $phone;
	}

	public function getPhone(){
	  return $this->phone;
	}

                        	                   			private $email;
    	                        
	public function setEmail($email){
		$this->email = $email;
         $this->apiParas["email"] = $email;
	}

	public function getEmail(){
	  return $this->email;
	}

                                                                                                    		                                    	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $mobile;
    	                        
	public function setMobile($mobile){
		$this->mobile = $mobile;
         $this->apiParas["mobile"] = $mobile;
	}

	public function getMobile(){
	  return $this->mobile;
	}

                        	                   			private $regAddressId;
    	                        
	public function setRegAddressId($regAddressId){
		$this->regAddressId = $regAddressId;
         $this->apiParas["regAddressId"] = $regAddressId;
	}

	public function getRegAddressId(){
	  return $this->regAddressId;
	}

                        	                   			private $provinceId;
    	                        
	public function setProvinceId($provinceId){
		$this->provinceId = $provinceId;
         $this->apiParas["provinceId"] = $provinceId;
	}

	public function getProvinceId(){
	  return $this->provinceId;
	}

                        	                   			private $provinceName;
    	                        
	public function setProvinceName($provinceName){
		$this->provinceName = $provinceName;
         $this->apiParas["provinceName"] = $provinceName;
	}

	public function getProvinceName(){
	  return $this->provinceName;
	}

                        	                   			private $cityId;
    	                        
	public function setCityId($cityId){
		$this->cityId = $cityId;
         $this->apiParas["cityId"] = $cityId;
	}

	public function getCityId(){
	  return $this->cityId;
	}

                        	                   			private $cityName;
    	                        
	public function setCityName($cityName){
		$this->cityName = $cityName;
         $this->apiParas["cityName"] = $cityName;
	}

	public function getCityName(){
	  return $this->cityName;
	}

                        	                   			private $countyId;
    	                        
	public function setCountyId($countyId){
		$this->countyId = $countyId;
         $this->apiParas["countyId"] = $countyId;
	}

	public function getCountyId(){
	  return $this->countyId;
	}

                        	                   			private $countyName;
    	                        
	public function setCountyName($countyName){
		$this->countyName = $countyName;
         $this->apiParas["countyName"] = $countyName;
	}

	public function getCountyName(){
	  return $this->countyName;
	}

                        	                   			private $townId;
    	                        
	public function setTownId($townId){
		$this->townId = $townId;
         $this->apiParas["townId"] = $townId;
	}

	public function getTownId(){
	  return $this->townId;
	}

                        	                   			private $townName;
    	                        
	public function setTownName($townName){
		$this->townName = $townName;
         $this->apiParas["townName"] = $townName;
	}

	public function getTownName(){
	  return $this->townName;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $email;
    	                        
	public function setEmail($email){
		$this->email = $email;
         $this->apiParas["email"] = $email;
	}

	public function getEmail(){
	  return $this->email;
	}

                        	                   			private $idCard;
    	                        
	public function setIdCard($idCard){
		$this->idCard = $idCard;
         $this->apiParas["idCard"] = $idCard;
	}

	public function getIdCard(){
	  return $this->idCard;
	}

                                                                        		                                    	                   			private $preOccupy;
    	                        
	public function setPreOccupy($preOccupy){
		$this->preOccupy = $preOccupy;
         $this->apiParas["preOccupy"] = $preOccupy;
	}

	public function getPreOccupy(){
	  return $this->preOccupy;
	}

                                                                                                    		                                    	                   			private $totalAmount;
    	                        
	public function setTotalAmount($totalAmount){
		$this->totalAmount = $totalAmount;
         $this->apiParas["totalAmount"] = $totalAmount;
	}

	public function getTotalAmount(){
	  return $this->totalAmount;
	}

                        	                   			private $totalPurchaseAmount;
    	                        
	public function setTotalPurchaseAmount($totalPurchaseAmount){
		$this->totalPurchaseAmount = $totalPurchaseAmount;
         $this->apiParas["totalPurchaseAmount"] = $totalPurchaseAmount;
	}

	public function getTotalPurchaseAmount(){
	  return $this->totalPurchaseAmount;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["skuId"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                                                                                                                                                                                                       private $num;
                              public function setNum($num ){
                 $this->num=$num;
                 $this->apiParas["num"] = $num;
              }

              public function getNum(){
              	return $this->num;
              }
                                                                                                                                                                                                                                                                                                                       private $jdPrice;
                              public function setJdPrice($jdPrice ){
                 $this->jdPrice=$jdPrice;
                 $this->apiParas["jdPrice"] = $jdPrice;
              }

              public function getJdPrice(){
              	return $this->jdPrice;
              }
                                                                                                                                                                                                                                                                                                                       private $price;
                              public function setPrice($price ){
                 $this->price=$price;
                 $this->apiParas["price"] = $price;
              }

              public function getPrice(){
              	return $this->price;
              }
                                                                                                                                                                                                                                                                                                                       private $skuType;
                              public function setSkuType($skuType ){
                 $this->skuType=$skuType;
                 $this->apiParas["skuType"] = $skuType;
              }

              public function getSkuType(){
              	return $this->skuType;
              }
                                                                                                                                                                                                                                                                                         	                        	                                                                                                                                                                                                                                                                                        private $suiteId;
                              public function setSuiteId($suiteId ){
                 $this->suiteId=$suiteId;
                 $this->apiParas["suiteId"] = $suiteId;
              }

              public function getSuiteId(){
              	return $this->suiteId;
              }
                                                                                                                                                                                                                                                                                                                       private $type;
                              public function setType($type ){
                 $this->type=$type;
                 $this->apiParas["type"] = $type;
              }

              public function getType(){
              	return $this->type;
              }
                                                                                                                                                                                                                                                                                                                       private $name;
                              public function setName($name ){
                 $this->name=$name;
                 $this->apiParas["name"] = $name;
              }

              public function getName(){
              	return $this->name;
              }
                                                                                                                                                                                                                                                                                                                       private $num;
                              public function setNum($num ){
                 $this->num=$num;
                 $this->apiParas["num"] = $num;
              }

              public function getNum(){
              	return $this->num;
              }
                                                                                                                                                                                                                                                                    }





        
 

