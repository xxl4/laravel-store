<?php
class EdiStatementQueryInvoiceRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.statement.queryInvoice";
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
                                                        		                                    	                        	                   			private $invoiceNo;
    	                        
	public function setInvoiceNo($invoiceNo){
		$this->invoiceNo = $invoiceNo;
         $this->apiParas["invoiceNo"] = $invoiceNo;
	}

	public function getInvoiceNo(){
	  return $this->invoiceNo;
	}

                            }





        
 

