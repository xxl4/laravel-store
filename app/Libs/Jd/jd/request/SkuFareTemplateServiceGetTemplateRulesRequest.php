<?php
class SkuFareTemplateServiceGetTemplateRulesRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.SkuFareTemplateService.getTemplateRules";
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
                                    	                   			private $templateId;
    	                                                            
	public function setTemplateId($templateId){
		$this->templateId = $templateId;
         $this->apiParas["template_id"] = $templateId;
	}

	public function getTemplateId(){
	  return $this->templateId;
	}

}





        
 

