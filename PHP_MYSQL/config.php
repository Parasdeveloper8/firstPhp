<?php
$host = "localhost";
$user = "root";
$password = null;
$conn = new PDO("mysql:host=$host;dbname=learn_php",$user,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "Connection done";
?>