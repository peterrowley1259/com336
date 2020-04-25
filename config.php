<?php
$con = mysqli_connect("localhost:3308","root","","com336");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>