<?php
//nclude db connection 

include 'config.php';
unlink("upload/".$img_name);
if(isset($_POST['update'])){
    $name=$_POST['name'];
    $id=$_POST['id'];
    $image=$_FILES['image'];
    print_r($_FILES['image']);
    $img_loc=$_FILES['image']['tmp_name'];
    $img_name=$_FILES['image']['name'];
    $img_des="upload/".$img_name;
    
    move_uploaded_file($img_loc,'upload/'.$img_name);

   // insert data
   $qry= mysqli_query($conn,"UPDATE `users` SET `name`='$name',`image`='$img_des' WHERE id=$id");
header("location:index.php");

 header('Location:index.php');
          }


?>