<?php
//late static binding means when you have same static method and property in Parent and Child class 
//Inheritance
//Late static binding means that if we use static::, the output will be from the calling class, even if the static method is defined in the parent.
class ParentClass{
    static $txt = "I am Parent class";
    static function text(){
        echo static::$txt;
    }
}
class ChildClass extends ParentClass{
    static $txt = "I am Child class";
}

//ChildClass::text();
$cit = new ParentClass();
$cit->text();
?>