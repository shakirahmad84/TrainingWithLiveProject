<?php include 'header.php'; ?>

<?php

if (isset($_POST['text'])) {
	$txt = $_POST['text'];
	// echo trim($txt);
	// echo trim($txt, " .");
	// echo ltrim($txt, " .");
	echo rtrim($txt, " .");
}

?>

<form action="" method="POST">
	<input type="text" name="text" value="<?php global $txt; echo $txt; ?>">
	<input type="submit" value="Submit">
</form>

<?php include 'footer.php'; ?>