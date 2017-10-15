<?php include 'header.php'; ?>

Switch Statement
<hr>

<?php

$coding = "java";

switch($coding){
      
   case "html":
      echo "I love html";
      break;
      
   case "css":
      echo "I love css";
      break;
         
   case "php":
      echo "I love php";
      break;
   
   case "java":
      echo "I love java";
      break;
      
   default:
      echo "I love programming";
      
}



?>

<?php include 'footer.php'; ?>