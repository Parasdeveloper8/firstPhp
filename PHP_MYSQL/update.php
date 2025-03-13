<?php
//populate data in input fields
include("./config.php");
echo "<br/>";
if(isset($_GET['id'])){
      $id = $_GET['id'];
      $getStudent = $conn->prepare("select * from students where id = '$id'");
      $getStudent->execute();
      $student = $getStudent->fetchAll();
      $name = $student[0]['name'];
      $id = $student[0]['id'];
      $age = $student[0]['age'];
      $course = $student[0]['course'];
      
}
?>
<form method="post">
    <input type="text" value="<?php echo $name ?>" name="name"/>
    <br/>
    <input type="number" value="<?php echo $id ?>" name="id"/>
    <br/>
    <input type="text" value="<?php echo $course ?>" name="course"/>
    <br/>
    <input type="number" value="<?php echo $age ?>" name="age"/>
    <br/>
    <button type="submit" value="<?php echo $id ?>" name="btn">Update</button>
</form>

<?php
if(isset($_POST["btn"])){
     $id =  $_POST["btn"];
     $name = $_POST["name"];
     $age = $_POST["age"];
     $course = $_POST["course"];
    $student = $conn->prepare("update students set id='$id',name='$name',age='$age',course='$course' where id = '$id'");
    if($student->execute()){
        header("location:delete_edit.php");
    }else{
        echo "Failed to update";
    }
}
?>