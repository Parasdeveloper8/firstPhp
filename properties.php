<?php

class Properties{
    public $name = "paras";
    function getName(){
        echo $this->name;
    }
}
$p1 = new Properties();
$p1->getName();