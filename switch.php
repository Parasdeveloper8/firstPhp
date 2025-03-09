<?php
 //Switch case statement
  $choice = "&";
  $a = 5;
  $b = 7;
  switch($choice){
    case "x":{
        echo $a * $b;
        break;
    }
    case "+":{
        echo $a + $b;
        break;
    }
    case "-":{
        echo $a - $b;
        break;
    }
    default:{
        echo "enter valid symbol";
    }
  }
?>