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
   

   //multidimensional array
   $multi = [1,2,3,["hello","paras"],6,7];
   $val = $multi[3][1];
   echo $val;
?>