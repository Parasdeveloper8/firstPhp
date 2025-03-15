<?php
   trait ParentComp1{
       function getEmp(){
        echo "100 : PC1";
        echo "<br/>";
       }
   }
   trait ParentComp2{
    function getEmp(){
        echo "200 :PC2";
        echo "<br/>";
       }
   }
class Company{
    //let's try to use ParentComp1::getEmp
    use ParentComp1;
    use ParentComp2{
        ParentComp1::getEmp insteadOf ParentComp2; //use ParentComp1::getEmp
        ParentComp2::getEmp as getEmpL; //rename getEmp as getEmpL
    }
}
$c1 = new Company();
$c1->getEmp();
$c1 -> getEmpL();
?>