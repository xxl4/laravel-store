<?php
class EclpMasterInsertLogicalStockConfigRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.master.insertLogicalStockConfig";
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

                        	                   			private $sellerName;
    	                        
	public function setSellerName($sellerName){
		$this->sellerName = $sellerName;
         $this->apiParas["sellerName"] = $sellerName;
	}

	public function getSellerName(){
	  return $this->sellerName;
	}

                        	                   			private $deptName;
    	                        
	public function setDeptName($deptName){
		$this->deptName = $deptName;
         $this->apiParas["deptName"] = $deptName;
	}

	public function getDeptName(){
	  return $this->deptName;
	}

                        	                   			private $factor1No;
    	                        
	public function setFactor1No($factor1No){
		$this->factor1No = $factor1No;
         $this->apiParas["factor1No"] = $factor1No;
	}

	public function getFactor1No(){
	  return $this->factor1No;
	}

                        	                   			private $factor1Name;
    	                        
	public function setFactor1Name($factor1Name){
		$this->factor1Name = $factor1Name;
         $this->apiParas["factor1Name"] = $factor1Name;
	}

	public function getFactor1Name(){
	  return $this->factor1Name;
	}

                        	                   			private $factor2No;
    	                        
	public function setFactor2No($factor2No){
		$this->factor2No = $factor2No;
         $this->apiParas["factor2No"] = $factor2No;
	}

	public function getFactor2No(){
	  return $this->factor2No;
	}

                        	                   			private $factor2Name;
    	                        
	public function setFactor2Name($factor2Name){
		$this->factor2Name = $factor2Name;
         $this->apiParas["factor2Name"] = $factor2Name;
	}

	public function getFactor2Name(){
	  return $this->factor2Name;
	}

                        	                   			private $factor3No;
    	                        
	public function setFactor3No($factor3No){
		$this->factor3No = $factor3No;
         $this->apiParas["factor3No"] = $factor3No;
	}

	public function getFactor3No(){
	  return $this->factor3No;
	}

                        	                   			private $factor3Name;
    	                        
	public function setFactor3Name($factor3Name){
		$this->factor3Name = $factor3Name;
         $this->apiParas["factor3Name"] = $factor3Name;
	}

	public function getFactor3Name(){
	  return $this->factor3Name;
	}

                        	                   			private $factor4No;
    	                        
	public function setFactor4No($factor4No){
		$this->factor4No = $factor4No;
         $this->apiParas["factor4No"] = $factor4No;
	}

	public function getFactor4No(){
	  return $this->factor4No;
	}

                        	                   			private $factor4Name;
    	                        
	public function setFactor4Name($factor4Name){
		$this->factor4Name = $factor4Name;
         $this->apiParas["factor4Name"] = $factor4Name;
	}

	public function getFactor4Name(){
	  return $this->factor4Name;
	}

                                                    	}





        
 

