<?php
$user = [
    "name"=>"paras",
    "class" => "10th",
    "status" => "bhagwan jaane"
];
//print_r($user);
$userJson = json_encode($user);
print_r($userJson);
echo "<br/>";
echo "<br/>";
$data = '{"name":"paras","class":"10th","status":"bhagwan jaane"}';
echo $data;
echo "<br/>";

$dataArray = json_decode($data,true);
//if true in arg then array 
//if nothing in arg then object
print_r($dataArray);
?>