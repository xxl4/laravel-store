<?php
class NbhouseRentModifyHotLineSaasRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.nbhouse.rent.modifyHotLineSaas";
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
                                                        		                                    	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                        	                   			private $phoneName;
    	                        
	public function setPhoneName($phoneName){
		$this->phoneName = $phoneName;
         $this->apiParas["phoneName"] = $phoneName;
	}

	public function getPhoneName(){
	  return $this->phoneName;
	}

                        	                   			private $workHourStart;
    	                        
	public function setWorkHourStart($workHourStart){
		$this->workHourStart = $workHourStart;
         $this->apiParas["workHourStart"] = $workHourStart;
	}

	public function getWorkHourStart(){
	  return $this->workHourStart;
	}

                        	                   			private $workHourEnd;
    	                        
	public function setWorkHourEnd($workHourEnd){
		$this->workHourEnd = $workHourEnd;
         $this->apiParas["workHourEnd"] = $workHourEnd;
	}

	public function getWorkHourEnd(){
	  return $this->workHourEnd;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $phoneLanding;
                              public function setPhoneLanding($phoneLanding ){
                 $this->phoneLanding=$phoneLanding;
                 $this->apiParas["phoneLanding"] = $phoneLanding;
              }

              public function getPhoneLanding(){
              	return $this->phoneLanding;
              }
                                                                                                                                                                                                                                                                                                                                              private $type;
                              public function setType($type ){
                 $this->type=$type;
                 $this->apiParas["type"] = $type;
              }

              public function getType(){
              	return $this->type;
              }
                                                                                                                                            }





        
 

