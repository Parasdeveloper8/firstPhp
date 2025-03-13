<?php
include("./config.php");
$getStudents = $conn->prepare("select id,name from students");
$getStudents->execute();
$studentData = $getStudents->fetchAll();
//print_r($studentData);
echo "<select>";
echo "<option>Select name</option>";
foreach($studentData as $stud):
    $id = $stud["id"];
    $name = $stud["name"];
echo "<option value=$id>". $name . "</option>";
endforeach;
echo "</select>";
?>