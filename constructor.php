<?php
class ConstructorDemo{
    public $name;
    function __construct($name){
    $this->name = $name;
    } //constructor is called automatically
    //We can create only one constructor for specific class in php
    function displayName(){
        echo $this->name;
    }
}
$s1 = new ConstructorDemo("Paras");
$s1->displayName();
?>