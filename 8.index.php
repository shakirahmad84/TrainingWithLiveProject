<?php include 'header.php'; ?>

<?php 

define("VALUE", "I am learning PHP", true); 
echo value;
echo "<br>";

function fearnPHP(){
   return value;
}

echo fearnPHP();

?>

<?php include 'footer.php'; ?>