<?php include 'header.php'; ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	Username<input type="text" name="username">
	<input type="submit" value="Submit">
</form>

<?php

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		// $name = $_REQUEST['username'];
		$name = $_POST['username'];
		if (empty($name)) {
			echo "Username field must not be empty !!";
		} else {
			echo "You have submitted: " . $name;
		}
	}

?>

<?php include 'footer.php'; ?>