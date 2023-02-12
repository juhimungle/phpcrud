<?php
require("dbconn.php");


$id = $_REQUEST["id"];
$name = $_POST["name"];
$dob = $_POST["dob"];
$city = $_POST["city"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$mobile = $_POST["mobile"];

// $conn = mysqli_connect('localhost', 'root', '', 'user');
$conn = mysqli_connect('biyvofeel1najecy4xve-mysql.services.clever-cloud.com', 'uq4ghb55dv1dmrrt', 'uq4ghb55dv1dmrrt', 'biyvofeel1najecy4xve');

$sql = "UPDATE  `usersdetails` SET `name` = '$name', `dob` = '$dob', `city` = '$city', `email` = '$email', `gender` = '$gender', `mobile` = '$mobile', `updated_date` = NOW() WHERE  `usersdetails`.`id` = '$id';";

// $sql = "UPDATE usersdetails SET `name`='{$name}', `dob`='{$dob}', `city`='{$city}', `email`='{$email}', `gender`='{$gender}', `mobile`='{$mobile}', `updated_date`=NOW() WHERE `id` = {$id};";

$record = mysqli_query($conn, $sql) or die("Query Unsuccessful");
  

if($record) {
	
	header("Location: index.php?msg=Record Update successfully");

} else {
	
	header("Location: index.php?msg=Something went wrong. Please try again later");
	
}
// header("Location: index.php?msg=Record Update successfully");


?>