<?php
class ClubPopCommentreplySaveRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.club.pop.commentreply.save";
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
                                                        		                                    	                   			private $commentId;
    	                        
	public function setCommentId($commentId){
		$this->commentId = $commentId;
         $this->apiParas["commentId"] = $commentId;
	}

	public function getCommentId(){
	  return $this->commentId;
	}

                        	                   			private $content;
    	                        
	public function setContent($content){
		$this->content = $content;
         $this->apiParas["content"] = $content;
	}

	public function getContent(){
	  return $this->content;
	}

                        	                        	                   			private $replyId;
    	                        
	public function setReplyId($replyId){
		$this->replyId = $replyId;
         $this->apiParas["replyId"] = $replyId;
	}

	public function getReplyId(){
	  return $this->replyId;
	}

                        	                            }





        
 

