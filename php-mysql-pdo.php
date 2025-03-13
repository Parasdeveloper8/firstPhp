<?php
//PDO = PHP data objects 
//It is a framework for accessing database
//mostly used
$host = "localhost";
$user = "root";
$password = null;
 try{
    $conn = new PDO("mysql:host=$host;dbname=learn_php",$user,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connection created";
 }catch(PDOException $err){
    echo "Connection failed". $err ->getMessage();
 }
 echo "<br/>";
 $result = $conn->query("select * from learn_php.students");
 while($row=$result->fetch(PDO::FETCH_NUM)){
    print_r($row);
 }
?>