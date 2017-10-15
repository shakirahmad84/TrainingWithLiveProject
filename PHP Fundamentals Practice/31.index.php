<?php include 'header.php'; ?>

<?php

	echo "Today is " . date("d/m/Y") . "<br>";
	echo "Today is " . date("d.m.Y") . "<br>";
	echo "Today is " . date("d-m-Y") . "<br>";
	echo "Today is " . date("d/m/y") . "<br>";

	echo "Today is " . date("l") . "<br>";
	echo "Time is " . date("h:i:sa") . "<br>";

	echo "Default time is " . date("h:i:sa") . "<br>";
	echo date_default_timezone_get() . "<br>";

	date_default_timezone_set('Asia/Dhaka');
	echo "Bangladesh time is " . date("h:i:sa") . "<br>";
	echo date_default_timezone_get() . "<br>";

	

?>

<p>&copy; <?php echo date("Y"); ?> Training with live project</p>

<?php include 'footer.php'; ?>