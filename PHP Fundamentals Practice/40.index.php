<?php include 'header.php'; ?>

<?php
	// $intnum = 300;
	// $min = 1;
	// $max = 200;
	// if (filter_var($intnum, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max)))) {
	// 	echo "It is valid";
	// } else {
	// 	echo "It is not valid";
	// }

	// echo "<br>";

	$url = "http://shakirahmad.com";
	if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) {
		echo "This url is valid.";
	}else{
		echo "It has not query string.";
	}

?>

<?php include 'footer.php'; ?>