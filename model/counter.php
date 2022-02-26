<?php

class counter{
    
    static function startingsession(){
            if(!$_SESSION["flag"]){
                
                $_SESSION["flag"]=true;
                self::write_num_of_visitors("increase");
            }
        
        
    }
   static function write_num_of_visitors($job){
    $num= intval(self::read_num_of_visitors());
    $fp = fopen("log.txt","w");
    if($job=="increase"){
    $num++;}
    elseif($job=="decrease"){$num--;}
    fwrite($fp,$num);
    fclose($fp);

    }
    static function read_num_of_visitors(){
        $importedlines= file("log.txt");
        return $importedlines[0];
    }
  
}
