<?php
//It is a mechanism to perform multiple inheritance
//php is single inheritance language
trait company1{
    function getOffice(){
        echo 10;
        echo "<br/>";
    }
}
trait company2{
   function getEmp(){
    echo 100;
    echo "<br/>";
   }
}
class ChildCompany {
    use company1;
    use company2;
}

$cmp = new ChildCompany();
$cmp->getOffice();
$cmp->getEmp();
?>