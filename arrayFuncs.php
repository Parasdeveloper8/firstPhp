<?php

$users = ["a","b","c","d","e"];
print_r($users);

//add elements
array_push($users,"f","g"); //will be added at last
print_r($users)

//remove last element
array_pop($users);
print_r($users);

//remove multiple elements
array_splice($users,-2);
print_r($users);
?>;