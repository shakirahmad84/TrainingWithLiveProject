<?php include 'header.php'; ?>

<?php

if (isset($_POST['text'])) {
	$txt = $_POST['text'];
	// echo strtoupper($txt);
	// echo strtolower($txt);
	// echo ucfirst($txt);
	echo ucwords($txt);
}

?>


<form action="" method="POST">
	<input type="text" name="text" value="<?php global $txt; echo $txt; ?>">
	<input type="submit" value="Submit">
</form>

<?php include 'footer.php'; ?>