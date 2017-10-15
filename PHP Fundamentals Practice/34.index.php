<?php include 'header.php'; ?>

<?php
	// echo readfile("text.txt");
	// $ourfile = fopen("text.txt", "r");
	// $ourfile = fopen("text.txt", "w");
	// $ourfile = fopen("text.txt", "a");
	$ourfile = fopen("text.txt", "r") or die("File not found !!");
	// echo fread($ourfile, filesize("text.txt"));
	// echo fgets($ourfile, filesize("text.txt"));
	// echo fgetc($ourfile);
	// echo feof($ourfile);
	
	// while ( !feof($ourfile) ) {
	//  	echo fgets($ourfile)."<br>";
	//  };
	// fclose($ourfile);

	while ( !feof($ourfile) ) {
	 	echo fgetc($ourfile)."<br>";
	 };
	fclose($ourfile);
?>

<?php include 'footer.php'; ?>