<?php
   if(isset($_POST["file"])){
   $fileName = "file/" . $_POST["file"];
   $content = $_POST["text"];
   $file = fopen($fileName,"w") or die("unable to create file"); //w = write
   fwrite($file,$content);
   fclose($file);
   echo "file created";
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create File</title>
</head>
<body>
    <form method="post">
        <textarea name="text" placeholder="enter text"></textarea>
        <br/>
        <input type="text" name="file" placeholder="enter file name"/>
        <br/>
        <button type="submit">Create File</button>
    </form>
</body>
</html>