<?php include 'header.php'; ?>

01. Arithmetic operatiors
02. Assignment operators
03. Comparison operators
04. Increment/Decrement operators
05. Logical operators
06. String operators
07. Array operators
<hr>
07. Array operators
<hr>

<pre>
<?php

$x = array(
   "a"   => "Dhaka",
   "b"   => "Sylhet",
);

$y = array(
   "c"   => "Comilla",
   "d"   => "Rajshahi",
);

var_dump($x + $y);
var_dump($x == $y);
var_dump($x === $y);
var_dump($x <> $y);
var_dump($x !== $y);

?>
</pre>

<?php include 'footer.php'; ?>