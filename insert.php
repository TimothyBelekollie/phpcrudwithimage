<?php
//nclude db connection 

include 'config.php';
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $image=$_FILES['image'];
    print_r($_FILES['image']);

}

?>