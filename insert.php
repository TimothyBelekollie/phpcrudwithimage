<?php
//nclude db connection 

include 'config.php';
if(isset($_POST['save'])){
    $name=$_POST['name'];
  //  $address=$_POST['address'];
    $image=$_FILES['image'];
    print_r($_FILES['image']);
    $img_loc=$_FILES['image']['tmp_name'];
    $img_name=$_FILES['image']['name'];
    $img_des="upload/".$img_name;
    move_uploaded_file($img_loc,'upload/'.$img_name);

   // insert data
   mysqli_query($conn,"INSERT INTO `users`(`name`,`image`) VALUES ('$name','$img_des')");
   header("location:index.php");
}

?>