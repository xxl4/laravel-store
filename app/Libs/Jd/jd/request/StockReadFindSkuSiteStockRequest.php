<?php
class StockReadFindSkuSiteStockRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.stock.read.findSkuSiteStock";
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
                                                        		                                    	                        	                        	                                                    	                                            		                                    	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $siteId;
    	                        
	public function setSiteId($siteId){
		$this->siteId = $siteId;
         $this->apiParas["siteId"] = $siteId;
	}

	public function getSiteId(){
	  return $this->siteId;
	}

                        	                   			private $venderSource;
    	                        
	public function setVenderSource($venderSource){
		$this->venderSource = $venderSource;
         $this->apiParas["venderSource"] = $venderSource;
	}

	public function getVenderSource(){
	  return $this->venderSource;
	}

                        	                   			private $stockNum;
    	                        
	public function setStockNum($stockNum){
		$this->stockNum = $stockNum;
         $this->apiParas["stockNum"] = $stockNum;
	}

	public function getStockNum(){
	  return $this->stockNum;
	}

                        	                   			private $orderBookingNum;
    	                        
	public function setOrderBookingNum($orderBookingNum){
		$this->orderBookingNum = $orderBookingNum;
         $this->apiParas["orderBookingNum"] = $orderBookingNum;
	}

	public function getOrderBookingNum(){
	  return $this->orderBookingNum;
	}

                        	                   			private $appBookingNum;
    	                        
	public function setAppBookingNum($appBookingNum){
		$this->appBookingNum = $appBookingNum;
         $this->apiParas["appBookingNum"] = $appBookingNum;
	}

	public function getAppBookingNum(){
	  return $this->appBookingNum;
	}

                        	                   			private $canUsedNum;
    	                        
	public function setCanUsedNum($canUsedNum){
		$this->canUsedNum = $canUsedNum;
         $this->apiParas["canUsedNum"] = $canUsedNum;
	}

	public function getCanUsedNum(){
	  return $this->canUsedNum;
	}

                            }





        
 

