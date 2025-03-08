<?php
  //Assignment operator (=)

  $a = 2;
  $b = 2;
  $output = $a ** $b;
  echo $output;

  //&& // || // !

  $con = (($a == 2) and ($b == 2));
  $con_2 = (($a == 2) && ($b == 2));
  echo $con,$con_2;

  $con3 = (($a == 3) or ($b == 2));
  echo $con3; 
  //reverse condition using ! logical not

  //Ternary operator
  //(condition)?true:false;
  $x = 3;
   $out = ($x%2 == 0)?"$x is even":"$x is odd";
   echo $out;
?>