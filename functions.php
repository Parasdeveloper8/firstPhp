<?php
   //pre-defined functions and user-defined functions
   $a = 5.75;
   $a = round($a);
   echo $a ;

   function greet($name){
      $output = "<p><b>Hello</b> <i>$name</i></p>";
      return $output;
   }

   $greetings = greet("paras");
   echo $greetings;
?>