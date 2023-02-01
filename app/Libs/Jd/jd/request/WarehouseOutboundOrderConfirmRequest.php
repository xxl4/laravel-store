<?php
class WarehouseOutboundOrderConfirmRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.warehouse.outbound.order.confirm";
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
                                                        		                                    	                        	                   	                    		private $stockOutNoList;
    	                        
	public function setStockOutNoList($stockOutNoList){
		$this->stockOutNoList = $stockOutNoList;
         $this->apiParas["stockOutNoList"] = $stockOutNoList;
	}

	public function getStockOutNoList(){
	  return $this->stockOutNoList;
	}

                            }





        
 

