<?php
$fonts = "verdana";
$bgcolor = "#444";
$fontcolor = "#FFF";
?>
   <!DOCTYPE html>
   <html lang="en">

   <head>
      <meta charset="UTF-8">
      <title>PHP Syntax</title>
      <style>
         body {
            font-family: <?php echo $fonts; ?>;
         }
         .phpcoding {
            width: 900px;
            margin: 0 auto;
            background: <?php echo "#ddd";
            ?>;
         }

         .headeroption,
         .footeroption {
            background: <?php echo $bgcolor; ?>;
            color: <?php echo $fontcolor; ?>;
            text-align: center;
            padding: 20px;
         }

         .headeroption h2,
         .footeroption h2 {
            margin: 0;
         }

         .maincontent {
            padding: 20px;
            min-height: 400px;
         }

      </style>
   </head>

   <body>

      <section class="phpcoding">

         <div class="headeroption">
            <h2>
               <?php echo "PHP Fundamentals Training"; ?>
            </h2>
         </div>


         <div class="maincontent">
