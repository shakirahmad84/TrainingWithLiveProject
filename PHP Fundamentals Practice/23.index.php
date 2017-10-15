<?php include 'header.php'; ?>

<?php

// $names = array("Rakib", "Mamun", "Akbor", "Badol");
// $names = array(25, 5, 15, 30, 20);

// sort($names);
// rsort($names);
// rsort($names);

// $length = count($names);

// for($i=0; $i<$length; $i++){
// 	echo $names[$i];
// 	echo "<br>";
// }


$age = array("Jamal"=>"20", "Kamal"=>"5", "Aslam"=>"15");
// asort($age);
ksort($age);

foreach ($age as $key => $value) {
	echo "Key = ". $key . ", Value = " . $value . "<br>";
}
?>

<?php include 'footer.php'; ?>