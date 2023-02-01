<?php
class OtsOrderbankExportRestOperatePayResourceRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ots.orderbank.export.rest.OperatePayResource";
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
                                                        		                                    	                   			private $notePub;
    	                        
	public function setNotePub($notePub){
		$this->notePub = $notePub;
         $this->apiParas["notePub"] = $notePub;
	}

	public function getNotePub(){
	  return $this->notePub;
	}

                        	                   			private $payEnum;
    	                        
	public function setPayEnum($payEnum){
		$this->payEnum = $payEnum;
         $this->apiParas["payEnum"] = $payEnum;
	}

	public function getPayEnum(){
	  return $this->payEnum;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $payTime;
    	                        
	public function setPayTime($payTime){
		$this->payTime = $payTime;
         $this->apiParas["payTime"] = $payTime;
	}

	public function getPayTime(){
	  return $this->payTime;
	}

                        	                   			private $oper;
    	                        
	public function setOper($oper){
		$this->oper = $oper;
         $this->apiParas["oper"] = $oper;
	}

	public function getOper(){
	  return $this->oper;
	}

                        	                   			private $businessNo;
    	                        
	public function setBusinessNo($businessNo){
		$this->businessNo = $businessNo;
         $this->apiParas["businessNo"] = $businessNo;
	}

	public function getBusinessNo(){
	  return $this->businessNo;
	}

                        	                   			private $payType;
    	                        
	public function setPayType($payType){
		$this->payType = $payType;
         $this->apiParas["payType"] = $payType;
	}

	public function getPayType(){
	  return $this->payType;
	}

                        	                   			private $payMoney;
    	                        
	public function setPayMoney($payMoney){
		$this->payMoney = $payMoney;
         $this->apiParas["payMoney"] = $payMoney;
	}

	public function getPayMoney(){
	  return $this->payMoney;
	}

                        	                   			private $currencyName;
    	                        
	public function setCurrencyName($currencyName){
		$this->currencyName = $currencyName;
         $this->apiParas["currencyName"] = $currencyName;
	}

	public function getCurrencyName(){
	  return $this->currencyName;
	}

                        	                   			private $merchantId;
    	                        
	public function setMerchantId($merchantId){
		$this->merchantId = $merchantId;
         $this->apiParas["merchantId"] = $merchantId;
	}

	public function getMerchantId(){
	  return $this->merchantId;
	}

                        	                   			private $parentOrderId;
    	                        
	public function setParentOrderId($parentOrderId){
		$this->parentOrderId = $parentOrderId;
         $this->apiParas["parentOrderId"] = $parentOrderId;
	}

	public function getParentOrderId(){
	  return $this->parentOrderId;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $currency;
    	                        
	public function setCurrency($currency){
		$this->currency = $currency;
         $this->apiParas["currency"] = $currency;
	}

	public function getCurrency(){
	  return $this->currency;
	}

                        	                   			private $ext2;
    	                        
	public function setExt2($ext2){
		$this->ext2 = $ext2;
         $this->apiParas["ext2"] = $ext2;
	}

	public function getExt2(){
	  return $this->ext2;
	}

                        	                   			private $ext1;
    	                        
	public function setExt1($ext1){
		$this->ext1 = $ext1;
         $this->apiParas["ext1"] = $ext1;
	}

	public function getExt1(){
	  return $this->ext1;
	}

                        	                   			private $ver;
    	                        
	public function setVer($ver){
		$this->ver = $ver;
         $this->apiParas["ver"] = $ver;
	}

	public function getVer(){
	  return $this->ver;
	}

                        	                   			private $appToken;
    	                        
	public function setAppToken($appToken){
		$this->appToken = $appToken;
         $this->apiParas["appToken"] = $appToken;
	}

	public function getAppToken(){
	  return $this->appToken;
	}

                        	                   			private $dataType;
    	                        
	public function setDataType($dataType){
		$this->dataType = $dataType;
         $this->apiParas["dataType"] = $dataType;
	}

	public function getDataType(){
	  return $this->dataType;
	}

                        	                   			private $noteInner;
    	                        
	public function setNoteInner($noteInner){
		$this->noteInner = $noteInner;
         $this->apiParas["noteInner"] = $noteInner;
	}

	public function getNoteInner(){
	  return $this->noteInner;
	}

                        	                   			private $updateTime;
    	                        
	public function setUpdateTime($updateTime){
		$this->updateTime = $updateTime;
         $this->apiParas["updateTime"] = $updateTime;
	}

	public function getUpdateTime(){
	  return $this->updateTime;
	}

                        	                   			private $eventType;
    	                        
	public function setEventType($eventType){
		$this->eventType = $eventType;
         $this->apiParas["eventType"] = $eventType;
	}

	public function getEventType(){
	  return $this->eventType;
	}

                        	                   			private $payTypeName;
    	                        
	public function setPayTypeName($payTypeName){
		$this->payTypeName = $payTypeName;
         $this->apiParas["payTypeName"] = $payTypeName;
	}

	public function getPayTypeName(){
	  return $this->payTypeName;
	}

                        	                   			private $currencyPrice;
    	                        
	public function setCurrencyPrice($currencyPrice){
		$this->currencyPrice = $currencyPrice;
         $this->apiParas["currencyPrice"] = $currencyPrice;
	}

	public function getCurrencyPrice(){
	  return $this->currencyPrice;
	}

                        	                   			private $createTime;
    	                        
	public function setCreateTime($createTime){
		$this->createTime = $createTime;
         $this->apiParas["createTime"] = $createTime;
	}

	public function getCreateTime(){
	  return $this->createTime;
	}

                        	                   			private $rfIdType;
    	                        
	public function setRfIdType($rfIdType){
		$this->rfIdType = $rfIdType;
         $this->apiParas["rfIdType"] = $rfIdType;
	}

	public function getRfIdType(){
	  return $this->rfIdType;
	}

                        	                   			private $payId;
    	                        
	public function setPayId($payId){
		$this->payId = $payId;
         $this->apiParas["payId"] = $payId;
	}

	public function getPayId(){
	  return $this->payId;
	}

                        	                   			private $businessType;
    	                        
	public function setBusinessType($businessType){
		$this->businessType = $businessType;
         $this->apiParas["businessType"] = $businessType;
	}

	public function getBusinessType(){
	  return $this->businessType;
	}

                            }





        
 

