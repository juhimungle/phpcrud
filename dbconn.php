<?php

// $conn = mysqli_connect('localhost', 'root', '', 'user');
$conn = mysqli_connect('biyvofeel1najecy4xve-mysql.services.clever-cloud.com', 'uq4ghb55dv1dmrrt', 'uq4ghb55dv1dmrrt', 'biyvofeel1najecy4xve');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// else{
//     echo("Connected successfully");
// }