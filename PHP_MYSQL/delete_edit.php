<?php
include("./config.php");
$students = $conn->prepare("select * from students");
$students -> execute();
$result = $students->fetchAll();
echo "<table border='1'>";
foreach($result as $stud):
    echo "<tr>";
    echo "<td>" . $stud['id'] . "</td>";
    echo "<td>" . $stud['name'] . "</td>";
    echo "<td>" . $stud['age'] . "</td>";
    echo "<td>" . $stud['course'] . "</td>";
    echo "<td><form method='post'><button name=btn value=". $stud['id'] .">Delete</button></form></td>";
    echo "<td><a href='update.php?id=". $stud['id'] ."'>Update</a></td>";
    echo "</tr>";
endforeach;
echo "</table>";
if(isset($_POST["btn"])){
    $id = $_POST['btn'];
    $students = $conn->prepare("delete from students where id = '$id'");
    if($students -> execute()){
        echo "Record deleted successfully";
        header("Refresh:0"); //refresh page
    }else{
        echo "Failed to delete record";
    }
}
?>