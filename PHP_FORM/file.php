<?php  
//$_FILES is used to do operations related to file
if($_FILES["uplFile"]){
    //path of file
  $path = $_FILES["uplFile"]["name"]; //get name of file
  //echo $path;
  //create path where file will be saved
  $upload = "./uploads/". $path;
  if(move_uploaded_file($_FILES["uplFile"]["tmp_name"],$upload)){
    echo "File uploaded successfully";
  }else{
    die("Failed to upload file"); //die() terminate current script
  }
}

?>