<?php
function autoLoader($class){
    include($class.'.php');
}
spl_autoload_register('autoLoader');

$t = new Teacher();
$s = new Student();
?>