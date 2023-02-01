<?php
class FinishServiceRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.finishService";
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
                                                        		                                    	                   			private $venderCode;
    	                        
	public function setVenderCode($venderCode){
		$this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
	}

	public function getVenderCode(){
	  return $this->venderCode;
	}

                        	                   			private $serviceId;
    	                        
	public function setServiceId($serviceId){
		$this->serviceId = $serviceId;
         $this->apiParas["serviceId"] = $serviceId;
	}

	public function getServiceId(){
	  return $this->serviceId;
	}

                        	                   			private $engineerPin;
    	                        
	public function setEngineerPin($engineerPin){
		$this->engineerPin = $engineerPin;
         $this->apiParas["engineerPin"] = $engineerPin;
	}

	public function getEngineerPin(){
	  return $this->engineerPin;
	}

                        	                   			private $engineerName;
    	                        
	public function setEngineerName($engineerName){
		$this->engineerName = $engineerName;
         $this->apiParas["engineerName"] = $engineerName;
	}

	public function getEngineerName(){
	  return $this->engineerName;
	}

                        	                   			private $finshNum;
    	                        
	public function setFinshNum($finshNum){
		$this->finshNum = $finshNum;
         $this->apiParas["finshNum"] = $finshNum;
	}

	public function getFinshNum(){
	  return $this->finshNum;
	}

                        	                   			private $remart;
    	                        
	public function setRemart($remart){
		$this->remart = $remart;
         $this->apiParas["remart"] = $remart;
	}

	public function getRemart(){
	  return $this->remart;
	}

                            }





        
 

