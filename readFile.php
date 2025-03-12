<?php
if(isset($_FILES["file"])){
   // print_r[$_FILES["file"]];
    $file = $_FILES["file"]["tmp_name"];
    $myFile = fopen($file,"r") or die("Unable to read file");
    echo fread($myFile,filesize($file));
    fclose($myFile);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read File</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file"/>
        <button type="submit">Read File</button>
</form>
</body>
</html>