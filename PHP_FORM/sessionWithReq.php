<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <form method="post">
        <input type="text" name="user">
        <br>
        <button type="submit" value="set" name="btn">Set</button>
        <br>
        <button type="submit" value="get" name="btn">Get</button>
        <br>
        <button type="submit" value="del" name="btn">Delete</button>
    </form>
</body>
</html>
<?php
  session_start();
 if(isset($_POST["btn"])){
    if($_POST["btn"]=="set"){
        $var = $_POST["user"];
        $_SESSION["user"] = $var;
        echo "session successfully set";
    }
    if($_POST["btn"]=="get"){
        if(isset($_SESSION["user"])){
            $session = $_SESSION["user"];
            echo $session;
        }else{
       echo "No session to display";
        }
    }
    if($_POST["btn"]=="del"){
       session_destroy();
    }
 }
?>