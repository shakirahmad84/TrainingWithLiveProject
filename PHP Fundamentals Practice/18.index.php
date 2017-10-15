<?php include 'header.php'; ?>

While Loop
<hr>

<?php

$x = 1;

while($x <= 5 ){
   echo "While The Number Is: " . $x . "<br>";
   $x++;
}

do{
   echo "Do The Number Is: " . $x . "<br>";
   $x++;
}while($x <=5);

?>

<?php include 'footer.php'; ?>