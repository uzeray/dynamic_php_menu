<?php
  // simple database connection you can get try and cache method or
  // you can use as like below...

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbName = "database_name";

  $conn = mysqli_connect($servername, $username, $password, $dbName);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
?>