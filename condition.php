<?php
 //if 
 //if-else
 //if-else-if
 $number = 5;
   if($number % 2 == 0){
        echo "$number is an even number";
   }else{
    echo "$number is odd";
   }

   $age = 5;
   if($age < 14){
    echo "You can't work";
   }elseif($age >= 14){
    echo "You can work";
   }elseif($age > 60){
    echo "You can't work";
   }
?>