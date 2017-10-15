<?php include 'header.php'; ?>

01. Arithmetic operatiors
02. Assignment operators
03. Comparison operators
04. Increment/Decrement operators
05. Logical operators
06. String operators
07. Array operators
<hr>
03. Comparison operators
<hr>

<?php 

$x = 100;
$y = 100;

var_dump($x == $y);
echo "<br>";

$x = 100;
$y = "100";
var_dump($x === $y);
echo "<br>";

$x = 100;
$y = "100";
var_dump($x != $y);
echo "<br>";

$x = 100;
$y = "100";
var_dump($x <> $y);
echo "<br>";

$x = 100;
$y = "100";
var_dump($x !== $y);
echo "<br>";

$x = 100;
$y = 10;
var_dump($x > $y);
echo "<br>";

$x = 100;
$y = 10;
var_dump($x < $y);
echo "<br>";

$x = 100;
$y = 10;
var_dump($x >= $y);
echo "<br>";

$x = 100;
$y = 10;
var_dump($x <= $y);
echo "<br>";


?>

<?php include 'footer.php'; ?>