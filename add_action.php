<?php


require("dbconn.php");


$image = $_FILES['file'];

$imagename = $image['name'];
$imageerror = $image['error'];
$imagetmp = $image['tmp_name'];

$imageext = explode('.', $imagename);
$imagecheck = strtolower(end($imageext));
$imageextstored = array('png', 'jpg', 'jpeg');

if(in_array($imagecheck, $imageextstored)){
	$destinationimage = 'image/' . $imagename;
	move_uploaded_file($imagetmp,$destinationimage);
}

$name = $_REQUEST["full_name"];
$dob = $_REQUEST["dob"];
$city = $_REQUEST["city"];
$email = $_REQUEST["email"];
$gender = $_REQUEST["gender"];
$mobile = $_REQUEST["mobile"];



$sql = "INSERT INTO `usersdetails` (`id`, `name`, `dob`, `city`, `email`, `gender`, `mobile`, `image`, `added_date`, `updated_date` ) VALUES (NULL, '$name', '$dob', '$city', '$email', '$gender', '$mobile','$destinationimage', NOW(), NOW());";



$row = mysqli_query($conn, $sql);
  

if($row) {
	
	header("Location: index.php?msg=Record added successfully");
	
} else {
	
	header("Location: index.php?msg=Something went wrong. Please try again later");
	
}
?>