<?php
class PopInvoiceSelfQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.invoice.self.query";
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

                        	                   			private $invoiceType;
    	                        
	public function setInvoiceType($invoiceType){
		$this->invoiceType = $invoiceType;
         $this->apiParas["invoiceType"] = $invoiceType;
	}

	public function getInvoiceType(){
	  return $this->invoiceType;
	}

                        	                   			private $invoiceTimeStart;
    	                        
	public function setInvoiceTimeStart($invoiceTimeStart){
		$this->invoiceTimeStart = $invoiceTimeStart;
         $this->apiParas["invoiceTimeStart"] = $invoiceTimeStart;
	}

	public function getInvoiceTimeStart(){
	  return $this->invoiceTimeStart;
	}

                        	                   			private $invoiceTimeEnd;
    	                        
	public function setInvoiceTimeEnd($invoiceTimeEnd){
		$this->invoiceTimeEnd = $invoiceTimeEnd;
         $this->apiParas["invoiceTimeEnd"] = $invoiceTimeEnd;
	}

	public function getInvoiceTimeEnd(){
	  return $this->invoiceTimeEnd;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $pageCurrent;
    	                        
	public function setPageCurrent($pageCurrent){
		$this->pageCurrent = $pageCurrent;
         $this->apiParas["pageCurrent"] = $pageCurrent;
	}

	public function getPageCurrent(){
	  return $this->pageCurrent;
	}

                            }





        
 

