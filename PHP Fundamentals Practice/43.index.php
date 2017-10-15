<?php include 'header.php'; ?>

<?php

	// $mystr = "We are learning php";
	// print_r(explode(" ", $mystr));
	// $str = explode(" ", $mystr);
	// echo $str['2'] . "<br>";

	$mystr = array( "We", "are", "learning", "PHP" );
	echo implode(" ", $mystr);

?>

<?php include 'footer.php'; ?>