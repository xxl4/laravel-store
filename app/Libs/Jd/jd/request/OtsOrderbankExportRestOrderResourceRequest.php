<?php
class OtsOrderbankExportRestOrderResourceRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ots.orderbank.export.rest.OrderResource";
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
                                                        		                                    	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                        	                   			private $sendPay;
    	                        
	public function setSendPay($sendPay){
		$this->sendPay = $sendPay;
         $this->apiParas["sendPay"] = $sendPay;
	}

	public function getSendPay(){
	  return $this->sendPay;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $totalPrice;
    	                        
	public function setTotalPrice($totalPrice){
		$this->totalPrice = $totalPrice;
         $this->apiParas["totalPrice"] = $totalPrice;
	}

	public function getTotalPrice(){
	  return $this->totalPrice;
	}

                        	                   			private $discount;
    	                        
	public function setDiscount($discount){
		$this->discount = $discount;
         $this->apiParas["discount"] = $discount;
	}

	public function getDiscount(){
	  return $this->discount;
	}

                        	                   			private $yun;
    	                        
	public function setYun($yun){
		$this->yun = $yun;
         $this->apiParas["yun"] = $yun;
	}

	public function getYun(){
	  return $this->yun;
	}

                        	                   			private $orderTime;
    	                        
	public function setOrderTime($orderTime){
		$this->orderTime = $orderTime;
         $this->apiParas["orderTime"] = $orderTime;
	}

	public function getOrderTime(){
	  return $this->orderTime;
	}

                        	                   			private $payDiscount;
    	                        
	public function setPayDiscount($payDiscount){
		$this->payDiscount = $payDiscount;
         $this->apiParas["payDiscount"] = $payDiscount;
	}

	public function getPayDiscount(){
	  return $this->payDiscount;
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

                        	                   			private $systemNo;
    	                        
	public function setSystemNo($systemNo){
		$this->systemNo = $systemNo;
         $this->apiParas["systemNo"] = $systemNo;
	}

	public function getSystemNo(){
	  return $this->systemNo;
	}

                        	                   			private $orderPrice;
    	                        
	public function setOrderPrice($orderPrice){
		$this->orderPrice = $orderPrice;
         $this->apiParas["orderPrice"] = $orderPrice;
	}

	public function getOrderPrice(){
	  return $this->orderPrice;
	}

                        	                   			private $currency;
    	                        
	public function setCurrency($currency){
		$this->currency = $currency;
         $this->apiParas["currency"] = $currency;
	}

	public function getCurrency(){
	  return $this->currency;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $delivery;
    	                        
	public function setDelivery($delivery){
		$this->delivery = $delivery;
         $this->apiParas["delivery"] = $delivery;
	}

	public function getDelivery(){
	  return $this->delivery;
	}

                        	                   			private $ver;
    	                        
	public function setVer($ver){
		$this->ver = $ver;
         $this->apiParas["ver"] = $ver;
	}

	public function getVer(){
	  return $this->ver;
	}

                        	                   			private $payMode;
    	                        
	public function setPayMode($payMode){
		$this->payMode = $payMode;
         $this->apiParas["payMode"] = $payMode;
	}

	public function getPayMode(){
	  return $this->payMode;
	}

                        	                   			private $appToken;
    	                        
	public function setAppToken($appToken){
		$this->appToken = $appToken;
         $this->apiParas["appToken"] = $appToken;
	}

	public function getAppToken(){
	  return $this->appToken;
	}

                        	                   			private $otherMoney;
    	                        
	public function setOtherMoney($otherMoney){
		$this->otherMoney = $otherMoney;
         $this->apiParas["otherMoney"] = $otherMoney;
	}

	public function getOtherMoney(){
	  return $this->otherMoney;
	}

                        	                   			private $productCode;
    	                        
	public function setProductCode($productCode){
		$this->productCode = $productCode;
         $this->apiParas["productCode"] = $productCode;
	}

	public function getProductCode(){
	  return $this->productCode;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $notePub;
                              public function setNotePub($notePub ){
                 $this->notePub=$notePub;
                 $this->apiParas["notePub"] = $notePub;
              }

              public function getNotePub(){
              	return $this->notePub;
              }
                                                                                                                                                                                                                                                                                                                                              private $payEnum;
                              public function setPayEnum($payEnum ){
                 $this->payEnum=$payEnum;
                 $this->apiParas["payEnum"] = $payEnum;
              }

              public function getPayEnum(){
              	return $this->payEnum;
              }
                                                                                                                                                                                                                                                                                                                                              private $payOrderId;
                              public function setPayOrderId($payOrderId ){
                 $this->payOrderId=$payOrderId;
                 $this->apiParas["payOrderId"] = $payOrderId;
              }

              public function getPayOrderId(){
              	return $this->payOrderId;
              }
                                                                                                                                                                                                                                                                                                                                              private $payTime;
                              public function setPayTime($payTime ){
                 $this->payTime=$payTime;
                 $this->apiParas["payTime"] = $payTime;
              }

              public function getPayTime(){
              	return $this->payTime;
              }
                                                                                                                                                                                                                                                                                                                                              private $businessNo;
                              public function setBusinessNo($businessNo ){
                 $this->businessNo=$businessNo;
                 $this->apiParas["businessNo"] = $businessNo;
              }

              public function getBusinessNo(){
              	return $this->businessNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $payType;
                              public function setPayType($payType ){
                 $this->payType=$payType;
                 $this->apiParas["payType"] = $payType;
              }

              public function getPayType(){
              	return $this->payType;
              }
                                                                                                                                                                                                                                                                                                                                              private $payMoney;
                              public function setPayMoney($payMoney ){
                 $this->payMoney=$payMoney;
                 $this->apiParas["payMoney"] = $payMoney;
              }

              public function getPayMoney(){
              	return $this->payMoney;
              }
                                                                                                                                                                                                                                                                                                                                              private $payCurrencyName;
                              public function setPayCurrencyName($payCurrencyName ){
                 $this->payCurrencyName=$payCurrencyName;
                 $this->apiParas["payCurrencyName"] = $payCurrencyName;
              }

              public function getPayCurrencyName(){
              	return $this->payCurrencyName;
              }
                                                                                                                                                                                                                                                                                                                                              private $payMerchantId;
                              public function setPayMerchantId($payMerchantId ){
                 $this->payMerchantId=$payMerchantId;
                 $this->apiParas["payMerchantId"] = $payMerchantId;
              }

              public function getPayMerchantId(){
              	return $this->payMerchantId;
              }
                                                                                                                                                                                                                                                                                                                                              private $payParentOrderId;
                              public function setPayParentOrderId($payParentOrderId ){
                 $this->payParentOrderId=$payParentOrderId;
                 $this->apiParas["payParentOrderId"] = $payParentOrderId;
              }

              public function getPayParentOrderId(){
              	return $this->payParentOrderId;
              }
                                                                                                                                                                                                                                                                                                                                              private $payAppId;
                              public function setPayAppId($payAppId ){
                 $this->payAppId=$payAppId;
                 $this->apiParas["payAppId"] = $payAppId;
              }

              public function getPayAppId(){
              	return $this->payAppId;
              }
                                                                                                                                                                                                                                                                                                                                              private $paySystemNo;
                              public function setPaySystemNo($paySystemNo ){
                 $this->paySystemNo=$paySystemNo;
                 $this->apiParas["paySystemNo"] = $paySystemNo;
              }

              public function getPaySystemNo(){
              	return $this->paySystemNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $payCurrency;
                              public function setPayCurrency($payCurrency ){
                 $this->payCurrency=$payCurrency;
                 $this->apiParas["payCurrency"] = $payCurrency;
              }

              public function getPayCurrency(){
              	return $this->payCurrency;
              }
                                                                                                                                                                                                                                                                                                                                              private $ext2;
                              public function setExt2($ext2 ){
                 $this->ext2=$ext2;
                 $this->apiParas["ext2"] = $ext2;
              }

              public function getExt2(){
              	return $this->ext2;
              }
                                                                                                                                                                                                                                                                                                                                              private $ext1;
                              public function setExt1($ext1 ){
                 $this->ext1=$ext1;
                 $this->apiParas["ext1"] = $ext1;
              }

              public function getExt1(){
              	return $this->ext1;
              }
                                                                                                                                                                                                                                                                                                                                              private $payVer;
                              public function setPayVer($payVer ){
                 $this->payVer=$payVer;
                 $this->apiParas["payVer"] = $payVer;
              }

              public function getPayVer(){
              	return $this->payVer;
              }
                                                                                                                                                                                                                                                                                                                                              private $payAppToken;
                              public function setPayAppToken($payAppToken ){
                 $this->payAppToken=$payAppToken;
                 $this->apiParas["payAppToken"] = $payAppToken;
              }

              public function getPayAppToken(){
              	return $this->payAppToken;
              }
                                                                                                                                                                                                                                                                                                                                              private $dataType;
                              public function setDataType($dataType ){
                 $this->dataType=$dataType;
                 $this->apiParas["dataType"] = $dataType;
              }

              public function getDataType(){
              	return $this->dataType;
              }
                                                                                                                                                                                                                                                                                                                                              private $noteInner;
                              public function setNoteInner($noteInner ){
                 $this->noteInner=$noteInner;
                 $this->apiParas["noteInner"] = $noteInner;
              }

              public function getNoteInner(){
              	return $this->noteInner;
              }
                                                                                                                                                                                                                                                                                                                                              private $updateTime;
                              public function setUpdateTime($updateTime ){
                 $this->updateTime=$updateTime;
                 $this->apiParas["updateTime"] = $updateTime;
              }

              public function getUpdateTime(){
              	return $this->updateTime;
              }
                                                                                                                                                                                                                                                                                                                                              private $orderBankNo;
                              public function setOrderBankNo($orderBankNo ){
                 $this->orderBankNo=$orderBankNo;
                 $this->apiParas["orderBankNo"] = $orderBankNo;
              }

              public function getOrderBankNo(){
              	return $this->orderBankNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $eventType;
                              public function setEventType($eventType ){
                 $this->eventType=$eventType;
                 $this->apiParas["eventType"] = $eventType;
              }

              public function getEventType(){
              	return $this->eventType;
              }
                                                                                                                                                                                                                                                                                                                                              private $payTypeName;
                              public function setPayTypeName($payTypeName ){
                 $this->payTypeName=$payTypeName;
                 $this->apiParas["payTypeName"] = $payTypeName;
              }

              public function getPayTypeName(){
              	return $this->payTypeName;
              }
                                                                                                                                                                                                                                                                                                                                              private $currencyPrice;
                              public function setCurrencyPrice($currencyPrice ){
                 $this->currencyPrice=$currencyPrice;
                 $this->apiParas["currencyPrice"] = $currencyPrice;
              }

              public function getCurrencyPrice(){
              	return $this->currencyPrice;
              }
                                                                                                                                                                                                                                                                                                                                              private $payCreateTime;
                              public function setPayCreateTime($payCreateTime ){
                 $this->payCreateTime=$payCreateTime;
                 $this->apiParas["payCreateTime"] = $payCreateTime;
              }

              public function getPayCreateTime(){
              	return $this->payCreateTime;
              }
                                                                                                                                                                                                                                                                                                                                              private $rfIdType;
                              public function setRfIdType($rfIdType ){
                 $this->rfIdType=$rfIdType;
                 $this->apiParas["rfIdType"] = $rfIdType;
              }

              public function getRfIdType(){
              	return $this->rfIdType;
              }
                                                                                                                                                                                                                                                                                                                                              private $morePay;
                              public function setMorePay($morePay ){
                 $this->morePay=$morePay;
                 $this->apiParas["morePay"] = $morePay;
              }

              public function getMorePay(){
              	return $this->morePay;
              }
                                                                                                                                                                                                                                                                                                                                              private $payId;
                              public function setPayId($payId ){
                 $this->payId=$payId;
                 $this->apiParas["payId"] = $payId;
              }

              public function getPayId(){
              	return $this->payId;
              }
                                                                                                                                                                                                                                                                                                                                              private $businessType;
                              public function setBusinessType($businessType ){
                 $this->businessType=$businessType;
                 $this->apiParas["businessType"] = $businessType;
              }

              public function getBusinessType(){
              	return $this->businessType;
              }
                                                                                                                                        	                   			private $paidIn;
    	                        
	public function setPaidIn($paidIn){
		$this->paidIn = $paidIn;
         $this->apiParas["paidIn"] = $paidIn;
	}

	public function getPaidIn(){
	  return $this->paidIn;
	}

                        	                   			private $orderCode;
    	                        
	public function setOrderCode($orderCode){
		$this->orderCode = $orderCode;
         $this->apiParas["orderCode"] = $orderCode;
	}

	public function getOrderCode(){
	  return $this->orderCode;
	}

                        	                   			private $tuotouTime;
    	                        
	public function setTuotouTime($tuotouTime){
		$this->tuotouTime = $tuotouTime;
         $this->apiParas["tuotouTime"] = $tuotouTime;
	}

	public function getTuotouTime(){
	  return $this->tuotouTime;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $receivableTypeName;
                              public function setReceivableTypeName($receivableTypeName ){
                 $this->receivableTypeName=$receivableTypeName;
                 $this->apiParas["receivableTypeName"] = $receivableTypeName;
              }

              public function getReceivableTypeName(){
              	return $this->receivableTypeName;
              }
                                                                                                                                                                                                                                                                                                                                              private $receAmount;
                              public function setReceAmount($receAmount ){
                 $this->receAmount=$receAmount;
                 $this->apiParas["receAmount"] = $receAmount;
              }

              public function getReceAmount(){
              	return $this->receAmount;
              }
                                                                                                                                                                                                                                                                                                                                              private $receivableId;
                              public function setReceivableId($receivableId ){
                 $this->receivableId=$receivableId;
                 $this->apiParas["receivableId"] = $receivableId;
              }

              public function getReceivableId(){
              	return $this->receivableId;
              }
                                                                                                                                                                                                                                                                                                                                              private $receivableType;
                              public function setReceivableType($receivableType ){
                 $this->receivableType=$receivableType;
                 $this->apiParas["receivableType"] = $receivableType;
              }

              public function getReceivableType(){
              	return $this->receivableType;
              }
                                                                                                                                                                                                                                                                                                                                              private $receCurrencyName;
                              public function setReceCurrencyName($receCurrencyName ){
                 $this->receCurrencyName=$receCurrencyName;
                 $this->apiParas["receCurrencyName"] = $receCurrencyName;
              }

              public function getReceCurrencyName(){
              	return $this->receCurrencyName;
              }
                                                                                                                                                                                                                                                                                                                                              private $receCreateTime;
                              public function setReceCreateTime($receCreateTime ){
                 $this->receCreateTime=$receCreateTime;
                 $this->apiParas["receCreateTime"] = $receCreateTime;
              }

              public function getReceCreateTime(){
              	return $this->receCreateTime;
              }
                                                                                                                                                                                                                                                                                                                                              private $receAppToken;
                              public function setReceAppToken($receAppToken ){
                 $this->receAppToken=$receAppToken;
                 $this->apiParas["receAppToken"] = $receAppToken;
              }

              public function getReceAppToken(){
              	return $this->receAppToken;
              }
                                                                                                                                                                                                                                                                                                                                              private $receAppId;
                              public function setReceAppId($receAppId ){
                 $this->receAppId=$receAppId;
                 $this->apiParas["receAppId"] = $receAppId;
              }

              public function getReceAppId(){
              	return $this->receAppId;
              }
                                                                                                                                                                                                                                                                                                                                              private $receSystemNo;
                              public function setReceSystemNo($receSystemNo ){
                 $this->receSystemNo=$receSystemNo;
                 $this->apiParas["receSystemNo"] = $receSystemNo;
              }

              public function getReceSystemNo(){
              	return $this->receSystemNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $receCurrency;
                              public function setReceCurrency($receCurrency ){
                 $this->receCurrency=$receCurrency;
                 $this->apiParas["receCurrency"] = $receCurrency;
              }

              public function getReceCurrency(){
              	return $this->receCurrency;
              }
                                                                                                                                            }





        
 

