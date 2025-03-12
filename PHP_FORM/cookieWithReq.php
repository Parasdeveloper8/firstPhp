<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <form method="post">
        <input type="text" name="user">
        <br>
        <button type="submit" value="set" name="btn">Set</button>
        <br>
        <button type="submit" value="dis" name="btn">Display</button>
        <br>
        <button type="submit" value="del" name="btn">Delete</button>
    </form>
</body>
</html>
<?php
 if(isset($_POST["btn"])){
    if($_POST["btn"]=="set"){
        $var = $_POST["user"];
        setcookie("username",$var,time()+(86400));
        echo "Cookie successfully set";
    }
    if($_POST["btn"]=="dis"){
        if(isset($_COOKIE["username"])){
            $cookie = $_COOKIE["username"];
            echo $cookie;
        }else{
       echo "No cookie to display";
        }
    }
    if($_POST["btn"]=="del"){
       if(isset($_COOKIE["username"])){
           setcookie("username",null,-1);
       }
    }
 }
?>