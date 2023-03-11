
<!DOCTYPE html>
<html>
<head>
	<title>CRUD: Create, Update, Delete PHP MySQL</title>
</head>
<body>
    <div class="main">
	<form method="post" action="insert.php" enctype="multipart/form-data">
        
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="">
		</div>
        <div class="input-group">
			<label>Profile Image</label>
			<input type="file" name="image" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>

        
	</form>

    </div>
</body>
</html>