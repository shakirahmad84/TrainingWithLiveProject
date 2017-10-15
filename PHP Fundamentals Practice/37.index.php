<?php
	session_start();
 	include 'header.php'; 
 ?>

<?php
	$_SESSION['user'] = "delowar";
	$_SESSION['pass'] = "123";

	echo "Username is ".$_SESSION['user']."<br>";
	echo "Password is ".$_SESSION['pass']."<br>";
	session_unset();
	session_destroy();
?>

<?php include 'footer.php'; ?>