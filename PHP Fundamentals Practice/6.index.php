<?php include 'header.php'; ?>

1. String <br>
2. Integer <br>
3. Float <br>
4. Boolean <br>
5. Array <br>
6. Object <br>
7. NULL <br>
8. Resource <hr>

<?php

$x = "PHP Data Types";
var_dump($x);
echo "<br>";

$x = 5;
var_dump($x);
echo "<br>";

$x = 0.5;
var_dump($x);
echo "<br>";

$x = TRUE;
var_dump($x);
echo "<br>";

$x = array("Shakir", "Sabbir", "Akbar");
var_dump($x);
echo "<br>";

Class Student{
   function department(){
      return "Physics";
   }
   function details(){
      echo $this->department();
   }
}

$st = new Student;
$st->details();
echo "<br>";

$x = NULL;
var_dump($x);
   
?>

<?php include 'footer.php'; ?>