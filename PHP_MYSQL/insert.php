<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
     <form method="post">
         <input type="text" name="name" placeholder="name"/>
         <input type="text" name="course" placeholder="course"/>
         <input type="number" name="age"/>
         <input type="number" name="id"/>
         <button type="submit"/>Submit</button>
     </form>
</body>
</html>
<?php
if(isset($_POST['id'])){
    $name = $_POST["name"];
    $course = $_POST["course"];
    $age = $_POST["age"];
    $id = $_POST["id"];
include("./config.php");
echo "<br/>";
$stud = $conn->prepare("insert into 
`students`(`name`,`course`,`age`,`id`) values('$name','$course',$age,$id)");
$result = $stud->execute();
if($result){
    echo "data inserted successfully";
}else{
    echo "failed to insert data";
}
}
?>