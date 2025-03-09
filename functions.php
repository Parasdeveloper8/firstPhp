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
   //Nested function will only work if parent function is called first
   echo $greetings;
?>