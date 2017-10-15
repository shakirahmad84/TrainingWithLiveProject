<?php include 'header.php'; ?>

<?php

	$createfile = fopen("new.txt", "w") or die("File not found !!");
	$one = "Delowar J Imran";	
	fwrite($createfile, $one);

	$two = "Akbar Hossain";	
	fwrite($createfile, $two);

	fclose($createfile)

?>

<?php include 'footer.php'; ?>