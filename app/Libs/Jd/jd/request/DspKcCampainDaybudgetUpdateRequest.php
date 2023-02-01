<?php
class DspKcCampainDaybudgetUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.kc.campain.daybudget.update";
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
                                                        		                                    	                   			private $campaignId;
    	                        
	public function setCampaignId($campaignId){
		$this->campaignId = $campaignId;
         $this->apiParas["campaignId"] = $campaignId;
	}

	public function getCampaignId(){
	  return $this->campaignId;
	}

                        	                   			private $dayBudget;
    	                        
	public function setDayBudget($dayBudget){
		$this->dayBudget = $dayBudget;
         $this->apiParas["dayBudget"] = $dayBudget;
	}

	public function getDayBudget(){
	  return $this->dayBudget;
	}

                        	                        	                        	                            }





        
 

