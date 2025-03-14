<?php
//Whenever we don't need to class's code and we don't need to define any object
//We can directly use that method or property by declaring them as Static
//Code will become faster than before
class Honda{
    static public $country = "India";
    static function company(){
        echo "Honda";
        echo "<br/>";
    }
}
//to use company don't declare any object
Honda::company();
echo Honda::$country;
?>