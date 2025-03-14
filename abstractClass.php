<?php
//Abstract class tells us that how many methods and which methods must be defined in child class
//Can not create objects from abstract class
abstract class Car {
    abstract static function startEngine();
    abstract static function applyBrake();
    abstract static function openDoor();
}

class Tesla extends Car{
    static function startEngine(){
        echo "Starting engine";
        echo "<br/>";
    }
    static function applyBrake(){
        echo "Applying Brakes";
        echo "<br/>";
    }
    static function openDoor(){
        echo "opening doors";
        echo "<br/>";
    }
}

     Tesla::startEngine();
     Tesla::applyBrake();
     Tesla::openDoor();

?>