<?php
class PopIllegalApiServiceVenderJingcreditApiServiceWriteBackPrivilegeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.illegal.api.service.VenderJingcreditApiService.writeBackPrivilege";
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
                                    	                                            		                                    	                   			private $gainInfoId;
    	                        
	public function setGainInfoId($gainInfoId){
		$this->gainInfoId = $gainInfoId;
         $this->apiParas["gainInfoId"] = $gainInfoId;
	}

	public function getGainInfoId(){
	  return $this->gainInfoId;
	}

                        	                   			private $privilegeType;
    	                        
	public function setPrivilegeType($privilegeType){
		$this->privilegeType = $privilegeType;
         $this->apiParas["privilegeType"] = $privilegeType;
	}

	public function getPrivilegeType(){
	  return $this->privilegeType;
	}

                        	                   			private $summaryYearMonth;
    	                        
	public function setSummaryYearMonth($summaryYearMonth){
		$this->summaryYearMonth = $summaryYearMonth;
         $this->apiParas["summaryYearMonth"] = $summaryYearMonth;
	}

	public function getSummaryYearMonth(){
	  return $this->summaryYearMonth;
	}

                        	                   			private $info;
    	                        
	public function setInfo($info){
		$this->info = $info;
         $this->apiParas["info"] = $info;
	}

	public function getInfo(){
	  return $this->info;
	}

                            }





        
 

