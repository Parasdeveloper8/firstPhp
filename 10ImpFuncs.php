<?php
   $user = ["a","b"];
   echo is_array($user); //check if given variable is an array

   echo "<br/>";

   echo count($user); //length of array

   echo "<br/>";

   unset($user[1]); //remove element at given index
   print_r($user);

   echo "<br/>";

   array_push($user,"b"); //add an element to end of array
   print_r($user);

   echo "<br/>";

   array_pop($user); //remove last element
   print_r($user);

   echo "<br/>";

   $User = ["name"=>"paras","class"=>"10th"];
   
   print_r(array_keys($User)); //print keys

   echo "<br/>";

   echo implode($user); //Join array elements with a string

   echo "<br/>";

   $text = "My name is paras";
   print_r(explode(" ",$text)); //split a string into array by given first argument

   echo "<br/>";

   $mergeArray = array_merge($user,$User);//merge one or more array into one
   print_r($mergeArray);

   echo "<br/>";

   $data = ["a","b","a","d"];
   print_r(array_unique($data)); //removes duplicate elements
?>