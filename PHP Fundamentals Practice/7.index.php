<?php include 'header.php'; ?>

<?php 

$x = "PHP Strings";

echo strlen($x);
echo "<br>";

echo str_word_count($x);
echo "<br>";

echo strrev($x);
echo "<br>";

echo strpos($x, "nice");
echo "<br>";

echo str_replace("PHP", "JAVA", $x);
echo "<br>";   

?>

<?php include 'footer.php'; ?>