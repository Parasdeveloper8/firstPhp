<?php
   
   //array types in php :-
   //indexed,associative,multidimensional array

   //indexed array
   $even = [1,2,3,4,5];
   $fruits = array("apple","mango","pineapple");
   //print array
   echo "<pre>";
   print_r($even);
   echo "</pre>";
   //length of array = last index + 1


   //associative array

   $student = [
    "name" => "paras",
    "class" => 10,
    "Age"  => 15
   ];
   echo "<pre>";
   print_r($student);
   echo "</pre>";
   
   //loop
   foreach($student as $key => $value):
      echo "<b>$key</b>:<i>$value</i><br>";
   endforeach;

   //multidimensional array
   $multi = [
      [1,2,3],
      [4,5,6],
      [7,8,9]
   ];
   //$val = $multi[3][1];
   //echo $val;

   //loop through multidimensional array
   echo "<table border=1>";
   echo "<tbody>";
   for($i=0;$i < count($multi);$i++){
      echo "<tr>";
      for($j=0;$j < count($multi[$i]);$j++){
         echo "<td>";
         echo $multi[$i][$j];
         echo "</td>";
      }
      echo "</tr>";
   }
   echo "</tbody>";
   echo "</table>";

   //Multidimensional associative array
   $users = [
      ["name"=>"pras","age"=>15],
      ["name"=>"prash","age"=>16],
      ["name"=>"prask","age"=>17]
   ];
   foreach($users as $user):
      foreach($user as $key => $value):
        echo "$key : $value";
        echo "<br/>";
      endforeach;
   endforeach;
?>