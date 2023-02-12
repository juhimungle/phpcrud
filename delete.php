<?php
require("dbconn.php");
// $sql = "DELETE FROM usersdetails WHERE id=10";
$sql = "DELETE FROM usersdetails WHERE id=$_REQUEST[id]";


if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

header("Location: index.php");
?>