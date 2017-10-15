<?php 
	include 'header.php'; 
	setcookie('visited', "", time() - 3600);
?>

<?php

	// if(!isset($_COOKIE['visited'])) {
	// 	setcookie("visited", "1", time()+86400, "/" or die("Could not set cookie !"));
	// 	echo "This is your first visit in this website";
	// }else {
	// 	echo "You are our old visitor";
	// }

	echo "Cookies deleted";


?>

<?php include 'footer.php'; ?>