<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container">
		<header class="title">
			<p>Personal Information</p>
		</header>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
	<?php

	include 'config.php';
	$pic=mysqli_query($conn,"SELECT * FROM `users`");
	while($row=mysqli_fetch_array($pic)){
		echo "
		<tr>
		
		<td>$row[id]</td>
		<td>$row[name]</td>
		<td><img src='$row[image]' alt='' width='80' height='80'></td>
		<td>
		<a href='edit.php?id=$row[id]' class='btn btn-info'>Edit</a>
		 <a href='delete.php?id=$row[id]' class='btn btn-danger'>Delete</a
		 
		</td>
	  </tr>
	  ";
	}
	?>
	

    
   
  </tbody>
</table>

	</div>
	
</body>
</html>