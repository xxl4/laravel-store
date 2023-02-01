<?php
class PopInvoiceSelfRedRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.invoice.self.red";
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
                                                        		                                    	                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
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

                        	                   			private $invoiceTime;
    	                        
	public function setInvoiceTime($invoiceTime){
		$this->invoiceTime = $invoiceTime;
         $this->apiParas["invoiceTime"] = $invoiceTime;
	}

	public function getInvoiceTime(){
	  return $this->invoiceTime;
	}

                        	                   			private $blueInvoiceCode;
    	                        
	public function setBlueInvoiceCode($blueInvoiceCode){
		$this->blueInvoiceCode = $blueInvoiceCode;
         $this->apiParas["blueInvoiceCode"] = $blueInvoiceCode;
	}

	public function getBlueInvoiceCode(){
	  return $this->blueInvoiceCode;
	}

                        	                   			private $blueInvoiceNo;
    	                        
	public function setBlueInvoiceNo($blueInvoiceNo){
		$this->blueInvoiceNo = $blueInvoiceNo;
         $this->apiParas["blueInvoiceNo"] = $blueInvoiceNo;
	}

	public function getBlueInvoiceNo(){
	  return $this->blueInvoiceNo;
	}

                        	                   			private $pdfInfo;
    	                        
	public function setPdfInfo($pdfInfo){
		$this->pdfInfo = $pdfInfo;
         $this->apiParas["pdfInfo"] = $pdfInfo;
	}

	public function getPdfInfo(){
	  return $this->pdfInfo;
	}

                            }





        
 

