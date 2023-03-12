<!DOCTYPE html>
<html>
<head>
	<title>CRUD: Create, Update, Delete PHP MySQL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
    <?php
   include 'config.php';
    $id=$_GET['id'];
    $record=mysqli_query($conn,"SELECT * FROM `users` WHERE id=$id");
    $data=mysqli_fetch_array($record);
    ?>
    <div class="main">
	<form method="post" action="update.php" enctype="multipart/form-data">
        
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $data['name']?>">
		</div>
        <br>
		<!-- <div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="">
		</div> -->
        <div class="input-group">
			<label>Profile Image</label>
			<input type="file" name="image" value="<?php echo $data['image']?>"><br>
            <img src="<?php echo $data['image'] ?>" alt="" width=100px; height=100px;>
            <input type="hidden" name="id" value="<?php echo $data['id']?>">
		</div>
		<div class="input-group">
			<button class="btn btn-success" type="submit" name="update">update</button>
		</div>

        
	</form>

    </div>

    </div>
</body>
</html>