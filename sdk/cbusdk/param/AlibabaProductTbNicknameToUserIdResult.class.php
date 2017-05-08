<?php




class AlibabaProductTbNicknameToUserIdResult {

        	
    private $userId;
    
        /**
    * @return 用户Id
    */
        public function getUserId() {
        return $this->userId;
    }
    
    /**
     * 设置用户Id     
     * @param Long $userId     
          
     * 此参数必填     */
    public function setUserId( $userId) {
        $this->userId = $userId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "userId", $this->stdResult )) {
    				$this->userId = $this->stdResult->{"userId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "userId", $this->arrayResult )) {
    			$this->userId = $arrayResult['userId'];
    			}
    		    	    		}

}
