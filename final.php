<?php
//final = if you wanna create a class which can't be extended further you can use final keyword
//final = if you wanna create a method which can't be created in its child
#final class Car {}
#class Maruti extends Car{}

class Honda {
    final function companyName(){
        echo "Honda";
    }
}
class Maruti extends Honda{
    //function companyName(){
    //    echo "Vitara";
   // }
}

$c1 = new Maruti();
//$c1->companyName();
?>