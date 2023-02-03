<?php

  // get database connetion by require function
  // you can use also include or require_once function for that.
  
  require("dbConn.php");
   
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      *{box-sizing: border-box;}
    </style>
   
  </head>
  <body class="d-flex flex-column min-vh-100">
    
    <!-- get by require function to include header on index.php -->
    <?php require("header.php"); ?>
   
  </body>
</html>