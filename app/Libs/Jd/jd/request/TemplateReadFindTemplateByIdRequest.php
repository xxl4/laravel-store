<?php
class TemplateReadFindTemplateByIdRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.template.read.findTemplateById";
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
         $this->apiParas["templateId"] = $templateId;
	}

	public function getTemplateId(){
	  return $this->templateId;
	}

                        	                   	                    		private $field;
    	                        
	public function setField($field){
		$this->field = $field;
         $this->apiParas["field"] = $field;
	}

	public function getField(){
	  return $this->field;
	}

}





        
 

