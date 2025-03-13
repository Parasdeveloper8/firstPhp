<?php
include("./config.php");
echo "<br/>";
$getData = $conn->prepare("select * from students");
$getData->execute();
$students = $getData->fetchAll();
//print_r($students);
foreach($students as $student):
    $name = $student['name'];
    echo "<p>$name</p>";
endforeach;
?>