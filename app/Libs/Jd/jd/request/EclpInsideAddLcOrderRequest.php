<?php
class EclpInsideAddLcOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.inside.addLcOrder";
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
                                                        		                                    	                   			private $sellerLcNo;
    	                        
	public function setSellerLcNo($sellerLcNo){
		$this->sellerLcNo = $sellerLcNo;
         $this->apiParas["sellerLcNo"] = $sellerLcNo;
	}

	public function getSellerLcNo(){
	  return $this->sellerLcNo;
	}

                        	                   			private $sellerNo;
    	                        
	public function setSellerNo($sellerNo){
		$this->sellerNo = $sellerNo;
         $this->apiParas["sellerNo"] = $sellerNo;
	}

	public function getSellerNo(){
	  return $this->sellerNo;
	}

                        	                   			private $wareHouseNo;
    	                        
	public function setWareHouseNo($wareHouseNo){
		$this->wareHouseNo = $wareHouseNo;
         $this->apiParas["wareHouseNo"] = $wareHouseNo;
	}

	public function getWareHouseNo(){
	  return $this->wareHouseNo;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $outsideLogicStock;
    	                        
	public function setOutsideLogicStock($outsideLogicStock){
		$this->outsideLogicStock = $outsideLogicStock;
         $this->apiParas["outsideLogicStock"] = $outsideLogicStock;
	}

	public function getOutsideLogicStock(){
	  return $this->outsideLogicStock;
	}

                        	                   			private $insideLogicStock;
    	                        
	public function setInsideLogicStock($insideLogicStock){
		$this->insideLogicStock = $insideLogicStock;
         $this->apiParas["insideLogicStock"] = $insideLogicStock;
	}

	public function getInsideLogicStock(){
	  return $this->insideLogicStock;
	}

                        	                   			private $lack;
    	                        
	public function setLack($lack){
		$this->lack = $lack;
         $this->apiParas["lack"] = $lack;
	}

	public function getLack(){
	  return $this->lack;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $orderLine;
                              public function setOrderLine($orderLine ){
                 $this->orderLine=$orderLine;
                 $this->apiParas["orderLine"] = $orderLine;
              }

              public function getOrderLine(){
              	return $this->orderLine;
              }
                                                                                                                                                                                                                                                                                                                                              private $isvGoodsNo;
                              public function setIsvGoodsNo($isvGoodsNo ){
                 $this->isvGoodsNo=$isvGoodsNo;
                 $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
              }

              public function getIsvGoodsNo(){
              	return $this->isvGoodsNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $outGoodsLevel;
                              public function setOutGoodsLevel($outGoodsLevel ){
                 $this->outGoodsLevel=$outGoodsLevel;
                 $this->apiParas["outGoodsLevel"] = $outGoodsLevel;
              }

              public function getOutGoodsLevel(){
              	return $this->outGoodsLevel;
              }
                                                                                                                                                                                                                                                                                                                                              private $inGoodsLevel;
                              public function setInGoodsLevel($inGoodsLevel ){
                 $this->inGoodsLevel=$inGoodsLevel;
                 $this->apiParas["inGoodsLevel"] = $inGoodsLevel;
              }

              public function getInGoodsLevel(){
              	return $this->inGoodsLevel;
              }
                                                                                                                                                                                                                                                                                                                                              private $planQty;
                              public function setPlanQty($planQty ){
                 $this->planQty=$planQty;
                 $this->apiParas["planQty"] = $planQty;
              }

              public function getPlanQty(){
              	return $this->planQty;
              }
                                                                                                                                        	}





        
 

