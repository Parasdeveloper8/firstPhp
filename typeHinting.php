<?php
#Type Hinting is also called type declaration
#this tells function or method that which type of data should be given in args
//we can use multiple data type in a variable at a time
function sayHello(string | array $name){
    if(gettype($name)=== "array"){
        print_r($name);
    }else{
     echo $name;
    }
}
sayHello(["paras"]);
?>