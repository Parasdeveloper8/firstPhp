<?php
//__call is used to show custom error when any method is private or doesn't exist
class User{
    private function getName(){
         echo "Hello dev";
    }
     function __call($method,$args){
        //echo "$method doesn't exist";
      // echo "<br/>";
      // print_r($args);
      if(method_exists($this,$method)){
        //echo "$method exist but private";
        call_user_func_array([$this,$method],$args);
      }
     }
}
$us = new User;
$us->getName();
?>