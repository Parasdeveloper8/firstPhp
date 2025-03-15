<?php
//when we wanna set private or inaccessible property this will return an error according to us
class User{
    private $name = "paras";
    function __set($property,$value){
        if(property_exists($this,$property)){
            $this->$property = $value;
        }
    }
    function getName(){
        echo $this->name;
    }
}
$us = new User;
$us->getName();
echo "<br/>";
$us->name = "grana";
$us->getName();
?>