<?php
class InvoiceApplicationAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.invoice.application.add";
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
                                    	                   			private $invoiceApplication;
    	                        
	public function setInvoiceApplication($invoiceApplication){
		$this->invoiceApplication = $invoiceApplication;
         $this->apiParas["invoiceApplication"] = $invoiceApplication;
	}

	public function getInvoiceApplication(){
	  return $this->invoiceApplication;
	}

}





        
 

