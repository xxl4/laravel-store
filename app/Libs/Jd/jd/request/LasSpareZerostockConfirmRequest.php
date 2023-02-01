<?php
class LasSpareZerostockConfirmRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.las.spare.zerostock.confirm";
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
                                                        		                                    	                   			private $afsNo;
    	                                                            
	public function setAfsNo($afsNo){
		$this->afsNo = $afsNo;
         $this->apiParas["afs_no"] = $afsNo;
	}

	public function getAfsNo(){
	  return $this->afsNo;
	}

                        	                   			private $venCod;
    	                                                            
	public function setVenCod($venCod){
		$this->venCod = $venCod;
         $this->apiParas["ven_cod"] = $venCod;
	}

	public function getVenCod(){
	  return $this->venCod;
	}

                        	                   			private $warDet;
    	                                                            
	public function setWarDet($warDet){
		$this->warDet = $warDet;
         $this->apiParas["war_det"] = $warDet;
	}

	public function getWarDet(){
	  return $this->warDet;
	}

                            }





        
 

