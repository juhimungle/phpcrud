<?php

require("dbconn.php");
// $sql = "SELECT * FROM usersdetails";
// $record = mysqli_query($conn, $sql);           

 
            if(isset($_REQUEST["search"])){
                $search  =  $_REQUEST["search"];
                $sql = "SELECT * FROM usersdetails WHERE 'name' LIKE '%$search%' OR 'mobile' LIKE '%$search%' OR email LIKE '%$search%' OR city LIKE '%$search%' OR dob LIKE '%$search%' OR gender LIKE '%$search%' ORDER BY id ASC ;";
            }
            else{
                $sql = "SELECT * FROM usersdetails";
            }


// $conn = mysqli_connect('localhost', 'root', '', 'user');
$conn = mysqli_connect('biyvofeel1najecy4xve-mysql.services.clever-cloud.com', 'uq4ghb55dv1dmrrt', 'uq4ghb55dv1dmrrt', 'biyvofeel1najecy4xve');

$record = mysqli_query($conn, $sql);   


session_start();

// print_r($_SESSION);


if(!isset($_SESSION['username'])){
    header("Location: login_form.php?msg=Unauthorized User");
}


?>

<html>

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
 



</head>

<body style="background-color: darkcyan;">

    <span>
        <?php
        include("header.php");
        ?>
    </span>
    <br>
    <br>

    


    <div class="container " id="mainPage" >


        <!-- <table class="table table-striped  text-center "> -->
        <table class="table text-center ">
            <thead>
                <th>Id</th>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
                <th>Action</th>
            </thead>
            <tbody class="text-capitalize">
                <?php foreach ($record as $row) { ?>

                    <tr class="text-center">
                        
                        <td>
                            <?php echo  $row['id']; ?>
                        </td>
                        <td >
                           <img src="<?php echo $row['image']; ?>" height="200px";  width='170px'; style="border-radius:20px";>
                        </td>
                        <td>
                            <?php echo $row['name']; ?>
                        </td>
                        <td class="text-lowercase">
                            <?php echo $row['email']; ?>
                        </td>                                                   
                        <td>
                            <?php echo $row['city']; ?>
                        </td>
                        <td>
                            <a href="single_record.php?id=<?php echo $row['id']; ?>"  title="More Details" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg></a> &nbsp; &nbsp;

                            <a href="edit_form.php?id=<?php echo $row['id']; ?>" title="Edit Record"
                                class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg></a>
                            &nbsp; &nbsp;
                            <a href="delete.php?id=<?php echo $row["id"]; ?>"
                                onclick="return confirm('Are you sure you want to delete this record <?php echo $row['name']; ?>?');"
                                class="btn btn-danger" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg></a>

                        </td>

                    </tr>

                <?php } ?>

            </tbody>
        </table>
    </div>

    
        

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>