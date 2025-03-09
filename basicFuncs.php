<?php 
//length of string
$str = "paras prajapat ";
echo strlen($str); //spaces will be also counted

//type of variable
$name = "paras";
echo var_dump($name);

//date function
$cdate = date("m.d.y");
echo $cdate;

echo phpinfo(); //get info

//check if it is string
$strn = "name";
echo is_string($strn);

//check if it is integer
const numb = 5;
echo is_int(numb);

//generate random 
echo rand();

//function to stop execution further
echo "before";
die();
exit();
echo "after";

//get specific letters or words from string
$strni = "paras prajapat";
echo substr($strni,6); //get remaining string after given number

//count() returns number of elements in array
?>