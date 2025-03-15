<?php
   class Company{
    function getEmp(){
        echo "1000";
        echo "<br/>";
        return $this;
    }
    function getCars(){
        echo "2000";
        echo "<br/>";
        return $this;
    }
    function getBikes(){
        echo "3000";
        echo "<br/>";
    }
   }

   $c1 = new Company;
   //method chaining
   $c1->getEmp() ->getCars() ->getBikes();
?>