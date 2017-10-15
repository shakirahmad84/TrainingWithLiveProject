<?php include 'header.php'; ?>

<?php

// Indexed Array();
// $x = array(5, 3, 9, 10, 15);

// echo $x[0] = 5;
// echo $x[1] = 3;
// echo $x[2] = 9;
// echo $x[3] = 10;
// echo $x[4] = 15;

// echo $x[0];

// echo count($x);

// $length = count($x);
// for($i=0; $i<$length; $i++ ){
// 	echo $x[$i];
// 	echo "<br>";
// }

// $ages = array("korim"=>"25", "Rahim"=>"20", "Mamun"=>"28");

// $ages["korim"] = "25";
// $ages["Rahim"] = "20";
// $ages["Mamun"] = "28";

// foreach($ages as $x => $age){
// 	echo "key = " . $x . ", Value = " . $age;
// 	echo "<br>";
// }

$cars = array(
	array("BMW", 15, "Nice"),
	array("Volvo", 20, 5),
	array("Saab", 25, 30),
	array("Audi", 21, 35)
);

// echo $cars[0][2];

for($row=0; $row<4; $row++){
	echo "<p>Row Number $row</p>";
	echo "<ul>";
	for($col=0; $col<3; $col++){
		echo "<li>". $cars[$row][$col] ."</li>";
	}
	echo "</ul>";
}

?>



<?php include 'footer.php'; ?>