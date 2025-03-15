<?php
if(isset($_POST['name'])){
    class User{
        static function getUserName(string $name){
            echo "Name is $name ";
        }
    }
    User::getUserName($_POST['name']);
}

?>
<form method="post">
<input type="text" placeholder="your name" name="name"/>
<br/>
<button type="submit">Click</button>
</form>