<?php include 'header.php'; ?>

<?php
	function numCheck($num){
		if ($num > 1) {
			throw new Exception("Valus must be 1 or below");
		}
		return true;
	}
	
	try{
		numCheck(2);
		echo "If you see this, the number is 1 or below.";
	}
	catch(Exception $e){
		echo "Message: ".$e->getMessage();
	}

?>

<?php include 'footer.php'; ?>