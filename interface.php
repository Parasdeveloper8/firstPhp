<?php
interface Car {
     function startEngine();
     function applyBrake();
     function openDoor();
}

class Tesla implements Car{
    function startEngine(){
        echo "Starting engine";
        echo "<br/>";
    }
    function applyBrake(){
        echo "Applying Brakes";
        echo "<br/>";
    }
    function openDoor(){
        echo "opening doors";
        echo "<br/>";
    }
}
$tesla = new Tesla();
$tesla->startEngine();
$tesla->applyBrake();
$tesla->openDoor();
?>