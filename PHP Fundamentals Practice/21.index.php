<?php include 'header.php'; ?>

<?php

	// function school(){
	// 	echo "I am a student.<br>";
	// }
	// school();

	// function school($name){
	// 	echo "$name is good School.<br>";
	// }
	// school("Jatrabari High School");
	// school("ML High School");
	// school("AL High School");

	// function school($name, $year){
	// 	echo "$name is started $year.<br>";
	// }
	// school("Jatrabari High School", "1975");
	// school("ML High School", "1990");
	// school("AL High School", "1980");

	// function school($name="My School"){
	// 	echo "$name is good.<br>";
	// }
	// school("ML High School", "1975");
	// school("BL High School", "1990");
	// school("AL High School", "1980");
	// school();

function sum($x, $y){
	$z = $x + $y;
	return $z;
}

echo "5+10 = " . sum(5, 10);
?>

<?php include 'footer.php'; ?>