<?php
class PopInvoiceSelfApplyRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.invoice.self.apply";
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
                                                             	                        	                                                                                                                                                                                                                                                                                                               private $productId;
                              public function setProductId($productId ){
                 $this->productId=$productId;
                 $this->apiParas["productId"] = $productId;
              }

              public function getProductId(){
              	return $this->productId;
              }
                                                                                                                                                                                                                                                                                                                                              private $productName;
                              public function setProductName($productName ){
                 $this->productName=$productName;
                 $this->apiParas["productName"] = $productName;
              }

              public function getProductName(){
              	return $this->productName;
              }
                                                                                                                                                                                                                                                                                                                                              private $num;
                              public function setNum($num ){
                 $this->num=$num;
                 $this->apiParas["num"] = $num;
              }

              public function getNum(){
              	return $this->num;
              }
                                                                                                                                                                                                                                                                                                                                              private $price;
                              public function setPrice($price ){
                 $this->price=$price;
                 $this->apiParas["price"] = $price;
              }

              public function getPrice(){
              	return $this->price;
              }
                                                                                                                                                                                                                                                                                                                                              private $spec;
                              public function setSpec($spec ){
                 $this->spec=$spec;
                 $this->apiParas["spec"] = $spec;
              }

              public function getSpec(){
              	return $this->spec;
              }
                                                                                                                                                                                                                                                                                                                                              private $unit;
                              public function setUnit($unit ){
                 $this->unit=$unit;
                 $this->apiParas["unit"] = $unit;
              }

              public function getUnit(){
              	return $this->unit;
              }
                                                                                                                                                                                                                                                                                                                                              private $taxRate;
                              public function setTaxRate($taxRate ){
                 $this->taxRate=$taxRate;
                 $this->apiParas["taxRate"] = $taxRate;
              }

              public function getTaxRate(){
              	return $this->taxRate;
              }
                                                                                                                                                                                                                                                                                                                                              private $taxCategroyCode;
                              public function setTaxCategroyCode($taxCategroyCode ){
                 $this->taxCategroyCode=$taxCategroyCode;
                 $this->apiParas["taxCategroyCode"] = $taxCategroyCode;
              }

              public function getTaxCategroyCode(){
              	return $this->taxCategroyCode;
              }
                                                                                                                                                                                                                                                                                                                                              private $isTaxDiscount;
                              public function setIsTaxDiscount($isTaxDiscount ){
                 $this->isTaxDiscount=$isTaxDiscount;
                 $this->apiParas["isTaxDiscount"] = $isTaxDiscount;
              }

              public function getIsTaxDiscount(){
              	return $this->isTaxDiscount;
              }
                                                                                                                                                                                                                                                                                                                                              private $taxDiscountContent;
                              public function setTaxDiscountContent($taxDiscountContent ){
                 $this->taxDiscountContent=$taxDiscountContent;
                 $this->apiParas["taxDiscountContent"] = $taxDiscountContent;
              }

              public function getTaxDiscountContent(){
              	return $this->taxDiscountContent;
              }
                                                                                                                                                                                                                                                                                                                                              private $zeroTax;
                              public function setZeroTax($zeroTax ){
                 $this->zeroTax=$zeroTax;
                 $this->apiParas["zeroTax"] = $zeroTax;
              }

              public function getZeroTax(){
              	return $this->zeroTax;
              }
                                                                                                                                                                                                                                                                                                                                              private $deductions;
                              public function setDeductions($deductions ){
                 $this->deductions=$deductions;
                 $this->apiParas["deductions"] = $deductions;
              }

              public function getDeductions(){
              	return $this->deductions;
              }
                                                                                                                                                                                                                                                                                                                                              private $imei;
                              public function setImei($imei ){
                 $this->imei=$imei;
                 $this->apiParas["imei"] = $imei;
              }

              public function getImei(){
              	return $this->imei;
              }
                                                                                                                                                                                                                                                                                                                                              private $discount;
                              public function setDiscount($discount ){
                 $this->discount=$discount;
                 $this->apiParas["discount"] = $discount;
              }

              public function getDiscount(){
              	return $this->discount;
              }
                                                                                                                                                                                                                                                                                                                                              private $freight;
                              public function setFreight($freight ){
                 $this->freight=$freight;
                 $this->apiParas["freight"] = $freight;
              }

              public function getFreight(){
              	return $this->freight;
              }
                                                                                                                                                            		                                    	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                        	                   			private $receiverTaxNo;
    	                        
	public function setReceiverTaxNo($receiverTaxNo){
		$this->receiverTaxNo = $receiverTaxNo;
         $this->apiParas["receiverTaxNo"] = $receiverTaxNo;
	}

	public function getReceiverTaxNo(){
	  return $this->receiverTaxNo;
	}

                        	                   			private $receiverName;
    	                        
	public function setReceiverName($receiverName){
		$this->receiverName = $receiverName;
         $this->apiParas["receiverName"] = $receiverName;
	}

	public function getReceiverName(){
	  return $this->receiverName;
	}

                        	                   			private $invoiceCode;
    	                        
	public function setInvoiceCode($invoiceCode){
		$this->invoiceCode = $invoiceCode;
         $this->apiParas["invoiceCode"] = $invoiceCode;
	}

	public function getInvoiceCode(){
	  return $this->invoiceCode;
	}

                        	                   			private $invoiceNo;
    	                        
	public function setInvoiceNo($invoiceNo){
		$this->invoiceNo = $invoiceNo;
         $this->apiParas["invoiceNo"] = $invoiceNo;
	}

	public function getInvoiceNo(){
	  return $this->invoiceNo;
	}

                        	                   			private $ivcTitle;
    	                        
	public function setIvcTitle($ivcTitle){
		$this->ivcTitle = $ivcTitle;
         $this->apiParas["ivcTitle"] = $ivcTitle;
	}

	public function getIvcTitle(){
	  return $this->ivcTitle;
	}

                        	                   			private $totalPrice;
    	                        
	public function setTotalPrice($totalPrice){
		$this->totalPrice = $totalPrice;
         $this->apiParas["totalPrice"] = $totalPrice;
	}

	public function getTotalPrice(){
	  return $this->totalPrice;
	}

                        	                   			private $invoiceTime;
    	                        
	public function setInvoiceTime($invoiceTime){
		$this->invoiceTime = $invoiceTime;
         $this->apiParas["invoiceTime"] = $invoiceTime;
	}

	public function getInvoiceTime(){
	  return $this->invoiceTime;
	}

                        	                   			private $pdfInfo;
    	                        
	public function setPdfInfo($pdfInfo){
		$this->pdfInfo = $pdfInfo;
         $this->apiParas["pdfInfo"] = $pdfInfo;
	}

	public function getPdfInfo(){
	  return $this->pdfInfo;
	}

                        	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                        	                   			private $ivcContentType;
    	                        
	public function setIvcContentType($ivcContentType){
		$this->ivcContentType = $ivcContentType;
         $this->apiParas["ivcContentType"] = $ivcContentType;
	}

	public function getIvcContentType(){
	  return $this->ivcContentType;
	}

                        	                   			private $ivcContentName;
    	                        
	public function setIvcContentName($ivcContentName){
		$this->ivcContentName = $ivcContentName;
         $this->apiParas["ivcContentName"] = $ivcContentName;
	}

	public function getIvcContentName(){
	  return $this->ivcContentName;
	}

                        	                   			private $eiRemark;
    	                        
	public function setEiRemark($eiRemark){
		$this->eiRemark = $eiRemark;
         $this->apiParas["eiRemark"] = $eiRemark;
	}

	public function getEiRemark(){
	  return $this->eiRemark;
	}

                        	                   			private $receiverAddress;
    	                        
	public function setReceiverAddress($receiverAddress){
		$this->receiverAddress = $receiverAddress;
         $this->apiParas["receiverAddress"] = $receiverAddress;
	}

	public function getReceiverAddress(){
	  return $this->receiverAddress;
	}

                        	                   			private $receiverPhone;
    	                        
	public function setReceiverPhone($receiverPhone){
		$this->receiverPhone = $receiverPhone;
         $this->apiParas["receiverPhone"] = $receiverPhone;
	}

	public function getReceiverPhone(){
	  return $this->receiverPhone;
	}

                        	                   			private $receiverBankName;
    	                        
	public function setReceiverBankName($receiverBankName){
		$this->receiverBankName = $receiverBankName;
         $this->apiParas["receiverBankName"] = $receiverBankName;
	}

	public function getReceiverBankName(){
	  return $this->receiverBankName;
	}

                        	                   			private $receiverBankAccount;
    	                        
	public function setReceiverBankAccount($receiverBankAccount){
		$this->receiverBankAccount = $receiverBankAccount;
         $this->apiParas["receiverBankAccount"] = $receiverBankAccount;
	}

	public function getReceiverBankAccount(){
	  return $this->receiverBankAccount;
	}

                        	                   			private $drawer;
    	                        
	public function setDrawer($drawer){
		$this->drawer = $drawer;
         $this->apiParas["drawer"] = $drawer;
	}

	public function getDrawer(){
	  return $this->drawer;
	}

                        	                   			private $payee;
    	                        
	public function setPayee($payee){
		$this->payee = $payee;
         $this->apiParas["payee"] = $payee;
	}

	public function getPayee(){
	  return $this->payee;
	}

                            }





        
 

