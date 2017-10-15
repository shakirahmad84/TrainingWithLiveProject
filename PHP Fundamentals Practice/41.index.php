<?php include 'header.php'; ?>

<?php
	// phpinfo();
	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	$price = 45;
	if ($price == 45) {
		print "The price is $price";
	} else {
		print "Price is not 45";
	}
	
?>

<?php include 'footer.php'; ?>