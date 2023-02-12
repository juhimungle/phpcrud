<?php
include("dbconn.php");
$id1 = $_GET["id"];
$sql = "SELECT * FROM usersdetails WHERE id = {$id1}";
$record = mysqli_query($conn, $sql) or die("Query Unsuccessful");

if (mysqli_num_rows($record) > 0) {
    while ($row = mysqli_fetch_assoc($record)) {
        ?>


<html>
<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- <h2 class="text-center p-3">CREATE NEW USER DETAILS</h2> -->
        <link rel="stylesheet" href="style.css">

    
</head>
<body class="formback">
  


<div class="container" style="height:650px; " >
<h2 class="text-center p-2">UPDATE USER DETAILS</h2>

		<form action ="edit_action.php" class ="post-form" method="POST">

        <div class="col-3" style="display:flex;">
				 <label for="id" class="form-label" >Id </label>
				 <input type = "text" name = "id" readonly class = "w-100 p-1 text-center"  style="margin-left:60px;  background-color: white;"  value="<?php echo $row["id"]; ?>" >
        </div>
        
        <div class="row my-3">
            <div class=" col-6 ">
				<label for="name" class="form-label">Full Name </label>
				<input type = "text" name = "name" class = "w-100 p-1" value="<?php echo $row["name"]; ?>" required  >
            </div>
			<div class="col-6 ">
                <label for="dob" class="form-label">Date Of Birth</label>
				<input type = "date" name = "dob" class = "w-100 p-1" value="<?php echo $row["dob"]; ?>"  required  >
            </div>
        </div>
        <div class="row my-3" >
            <div class=" col-6">
				<label for="city" class="form-label">City</label>
				<input type = "text" name = "city" class = "w-100 p-1" value="<?php echo $row["city"]; ?>" required  >
            </div>
			<div class="col-6">
                <label for="mobile" class="form-label">Mobile Number</label>
				<input type = "number" name = "mobile" class = "w-100 p-1"  value="<?php echo $row["mobile"]; ?>" required  >
            </div>
        </div>
        <div class="row my-3" >
            <div class=" col-6">
				<label for="email" class="form-label">Email</label>
				<input type = "email" name = "email" class = "w-100 p-1" value="<?php echo $row["email"]; ?>"  required  >
            </div>
			<div class="col-6"> 
                <label  for="gender" class="form-label">Gender</label>
				<input type = "gender" name = "gender" class = "w-100 p-1" value="<?php echo $row["gender"]; ?>"  required  >
            </div>
        </div>
			
        <center>
        <div class="d-flex justify-content-around   pt-4 " id="button">
			<input type="submit"  class="btn btn-success" value="UPDATE"/>&nbsp;&nbsp;
            <input type="reset" class="btn btn-dark" value="CLEAR"/>&nbsp;&nbsp;
            <a href="index.php" class="btn btn-warning" >CLOSE</a>
        </div>
        </center>
<br>

</form>
<?php }
} 
?>
</div>

</body>
</html> 
