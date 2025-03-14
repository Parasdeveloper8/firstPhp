<?php
//Sometimes when parent and child class have same property or same method name
//Child method will be executed first 
//Parent methods will be overwritten by child
//This is called Property overRiding and method overRiding
class Teacher {
    protected $age =  30;
    function age(){
        echo "<b>Teacher:</b>";
        echo "$this->age";
        echo "\n";
    }
}
class Student extends Teacher{
    protected $age = 15; //property overriding
    function age(){ //method overriding
        echo "<b>Student:</b>";
         echo $this->age;
         echo "\n";
    }
}

#$t1 = new Teacher();
$s1 = new Student();
//$t1->age();
$s1->age();
?>