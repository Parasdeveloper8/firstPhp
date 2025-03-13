<?php
$host = "localhost";
$user = "root";
$database = "learn_php";
$password = null;
$conn = new mysqli($host,$user,$password,$database);
if($conn->connect_error){
    die ("some error" . $conn->connect_error);
}
echo "Connection success";
echo "<br/>";
$result = $conn->query("select * from learn_php.students")->fetch_all();
print_r($result);
?>