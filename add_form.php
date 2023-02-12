<?php
require ("dbconn.php");
?>



<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- <h2 class="text-center p-3">CREATE NEW USER DETAILS</h2> -->
        <link rel="stylesheet" href="style.css">

    
</head>
<body class="formback">
  


<div class="container"  style="height:650px; ">
<h2 class="text-center p-2">CREATE NEW USER </h2>

		<form action = "add_action.php" method= "POST" enctype="multipart/form-data">

        <div class="row my-3">
            <div class=" col-6 ">
				<label for="image" class="form-label">Uploade Your Image</label>
				<input type = "file" name = "file" class = "w-100 p-1" required autofocus  placeholder = "upload image.."/>
            </div>
        </div>
        
        <div class="row my-3">
            <div class=" col-6 ">
				<label for="name" class="form-label">Full Name </label>
				<input type = "text" name = "full_name" class = "w-100 p-1" required autofocus  placeholder = "Full Name.."/>
            </div>
			<div class="col-6 ">
                <label for="dob" class="form-label">Date Of Birth</label>
				<input type = "date" name = "dob" class = "w-100 p-1" required  placeholder = "Date Of Birth.."/>
            </div>
        </div>
        <div class="row my-3" >
            <div class=" col-6">
				<label for="city" class="form-label">City</label>
				<input type = "text" name = "city" class = "w-100 p-1" required  placeholder = "Your City.."/>
            </div>
			<div class="col-6">
                <label for="mobile" class="form-label">Mobile Number</label>
				<input type = "number" name = "mobile" class = "w-100 p-1" autocomplete="off" required  placeholder = "Mobile Number.."/>
            </div>
        </div>
        <div class="row my-3" >
            <div class=" col-6">
				<label for="email" class="form-label">Email</label>
				<input type = "email" name = "email" class = "w-100 p-1"  required  placeholder = "Your Email.."/>
            </div>
			<div class="col-6">
                <label for="gender" class="form-label">Gender</label>
				<select id="gender" name= "gender" class = "w-100 p-1" required  >
                    <option selected>Choose...</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div>
        </div>
			
        <center>
        <div class="d-flex justify-content-around   pt-5 " id="button">
			<input type="submit" class="btn btn-success" value="ADD"/>&nbsp;&nbsp;
            <input type="reset" class="btn btn-dark" value="CLEAR"/>&nbsp;&nbsp;
            <a href="index.php" class="btn btn-warning" >CLOSE</a>
        </div>
        </center>
<br>

</form>
</div>

</body>
