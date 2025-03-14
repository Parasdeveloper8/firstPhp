<?php
class School {
     public function examination(){
        echo "students are giving exams";
        echo "<br/>";
     }
     private function checkCopies(){
        echo "copies are being checked";
        echo "<br/>";
     }
     protected function questionPaper(){
        $quesPaper = ["hindi","english"];
        print_r($quesPaper) ;
        echo "<br/>";
     }
     public function checkCP(){
        return $this->checkCopies();
     }
     
}

$s1 = new School();
$s1->examination();
$s1->checkCP();

class Teacher extends School{
    function qps(){
       return $this->questionPaper();
    }
}
$t1 = new Teacher();
$t1->qps();
?>