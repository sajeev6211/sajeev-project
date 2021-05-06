<?php
$con = mysqli_connect("localhost","root","","sajeev-employees");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

?>