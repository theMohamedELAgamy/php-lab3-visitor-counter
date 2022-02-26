<?php
class visitor{
    
    private $username;
   private $password;
  
      function __construct($username,$password) {
       
        $this->username=$username;
        $this->password=$password;
   }

   static function validate($username,$pass){
        
       if ($username == "mohamed" && $pass=="111" ) {
            return true ;
            
        } else return false;
        
    }
    function logout(){
        
    }
}

?>
