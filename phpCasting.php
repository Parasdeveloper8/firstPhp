<?php

//Type casting means converting data type

//converting int to string
$a = 5;
$a = (string) $a;
var_dump($a);

//converting string to int
$b = "20";
$b = (int) $b;
var_dump($b);

//int to float
$c = 1;
$c = (float) $c;
var_dump($c);

//string to boolean
$d = "1";
$d = (boolean) $d;
var_dump($d);

//int to array
$e = 10;
$e = (array) $e;
var_dump($e);

//int to object
$f = 10;
$f = (object) $f;
var_dump($f);
?>