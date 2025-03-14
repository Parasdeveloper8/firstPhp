<?php
 //We can say that we use namespace when we have same class but different working at same place
 include("./teacher.php");
 include("./student.php");

 $t = new teacher\Joining();
 $t->joiningDateTeach();

 $s = new student\Joining();
 $s->joiningDateStud();
?>