<?php
// :: = scope resolution operator
class ConstDemo{
    const school = "Achievers Academy";
    function getSchool(){
        //echo self::school;
        echo ConstDemo::school;
    }
}
echo ConstDemo::school;
echo "<br/>";

$c1 = new ConstDemo();
$c1->getSchool();
?>