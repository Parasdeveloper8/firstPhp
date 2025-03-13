<?php
print_r($_POST);
echo "<br/>";
if(isset($_POST["name"])){
    echo "<p>Name is " . $_POST["name"] . "</p><br/>";
    echo "<p>Email is " . $_POST["email"] . "</p><br/>";
    echo "<p>Password is " . $_POST["password"] . "</p><br/>";
    echo "<p>Skills are " . implode(",",$_POST["skills"]) . "</p><br/>";
    echo "<p>Gender is " . $_POST["gender"] . "</p><br/>";
    echo "<p>City is " . $_POST["city"] . "</p><br/>";
}
?>