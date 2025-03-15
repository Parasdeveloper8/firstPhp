<?php
#magic methods are those methods which  are in-built in php and invoked automatically
#when any event is triggered
class Other{
    function __invoke(){
        echo "invoked";
    }
}
$c = new Other;
$c();
?>