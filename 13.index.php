<?php include 'header.php'; ?>

01. Arithmetic operatiors
02. Assignment operators
03. Comparison operators
04. Increment/Decrement operators
05. Logical operators
06. String operators
07. Array operators
<hr>
05. Logical operators
<hr>

<?php 

   $a = 40;
   $b = 20;
   
   // and | && operator
   if($a == 40 and $b == 20){
      echo "Training with live project<br>";
   }else {
      echo "Condition is false<br>";
   }
   
   // or | || operator
   if($a == 40 or $b == 20){
      echo "Training with live project<br>";
   }else {
      echo "Condition is false<br>";
   }
   
   // xor operator
   if($a == 40 xor $b == 20){
      echo "Training with live project<br>";
   }else {
      echo "Condition is false<br>";
   }
   
   // !== operator
   if($a !== 40){
      echo "Training with live project<br>";
   }else {
      echo "Condition is false<br>";
   }

?>

<?php include 'footer.php'; ?>