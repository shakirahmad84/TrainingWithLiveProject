<?php include 'header.php'; ?>

if
if else
if elseif
<hr>

<?php

$x = 10;

if($x > 5){
   echo "Training with live project <br>";
}

if($x > 15){
   echo "Training with live project <br>";
} else {
   echo "Wrong<br>";
}

if($x > 15){
   echo "$x is greater then 15<br>";
} elseif($x > 12) {
   echo "$x is greater then 12<br>";
} elseif($x > 5) {
   echo "$x is greater then 5<br>";
} else{
   echo "Please give a value smaller then 15";
}

?>

<?php include 'footer.php'; ?>