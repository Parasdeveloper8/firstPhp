<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button click</title>
</head>
<body>
    <form method="post">
        <button name="btn" value="btn1">Submit</button>
    </form>
</body>
</html>
<?php
   if(isset($_POST['btn'])){
      clickPost();
   }
   function clickPost(){
    echo "Hello";
   }
?>