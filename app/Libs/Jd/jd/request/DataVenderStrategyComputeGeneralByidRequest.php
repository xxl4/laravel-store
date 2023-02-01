<?php
class DataVenderStrategyComputeGeneralByidRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.strategy.compute.general.byid";
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
                                                        		                                    	                        	                        	                   			private $strategyId;
    	                                                            
	public function setStrategyId($strategyId){
		$this->strategyId = $strategyId;
         $this->apiParas["strategy_id"] = $strategyId;
	}

	public function getStrategyId(){
	  return $this->strategyId;
	}

                                                    	}





        
 

