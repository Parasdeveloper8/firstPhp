<?php
  class Auth {
      function Signup($type,$name){
        echo "$type : $name registered";
        echo "<br/>";
      }
  }
  class Student extends Auth{}
  class Teacher extends Auth{}

  $s1 = new Student();
  $t1 = new Teacher();
  
  $s1 -> Signup("student","paras");
  $t1 -> Signup("teacher","blank");
?>