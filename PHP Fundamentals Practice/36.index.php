<?php include 'header.php'; ?>

<?php

if (isset($_FILES['image'])) {
	$filename = $_FILES['image']['name'];
	$filetmp  = $_FILES['image']['tmp_name'];
	move_uploaded_file($filetmp, "images/".$filename);
	echo "Image uploaded successfully";
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
	<input type="file" name="image">
	<input type="submit" value="Submit">
</form>

<?php include 'footer.php'; ?>