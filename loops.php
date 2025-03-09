<?php
   //loops := for,while,do-while

   //for loop
   for($i = 0;$i < 5;$i++){
    echo $i;
   }
   //while loop
   $i = 0;
   while($i < 5){
    echo $i;
    $i++;
   }

   //do-while
   $v = 0;
   do{
      echo $v;
      $v++;
   }while($v < 5);

   $users = ["abc","def","ghi"];
   foreach($users as $x){
      echo $x;
      echo "<br/>";
   }
   //you can use continue and break in loop
   //second way to use foreach loop
   foreach($users as $v):
      echo "<h1>$v</h1>";
      endforeach
?>