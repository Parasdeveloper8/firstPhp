<?php
//when you want to print error message in a beautiful manner when property doesn't exist or is private
class User{
    public $name = "paras";
    function __get($property){
        echo "$property doesn't exist";
    }
}
$us = new User;
echo $us-> namA;

?>