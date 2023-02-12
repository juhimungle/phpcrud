<?php

require('dbconn.php');

$id = $_GET['id'];
$sql = "SELECT * FROM usersdetails WHERE id = $id";
// error_log($sql);
$record = mysqli_query($conn, $sql);
$num_record = mysqli_num_rows($record);


?>
<html>

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="details.css">

    

</head> 

<body style="background-color: darkcyan;">

    <div class="container ">

        <h2 class="text-center p-2"> USER DETAILS</h2>

        <table class="table text-center text-capitalize" >

            <?php while ($row = mysqli_fetch_array($record)) { ?>


                <div>
                    <th>Id</th>
                    <td>
                        <?php echo $row['id']; ?>
                    </td>
                </div>

                <span >
                    <td>
                        <img src="<?php echo $row['image']; ?>" height="200px" width='170px'>
                    </td>
                </span>


                <div >
                    <tr >
                        <th>Name</th>
                        <td>
                            <?php echo $row['name']; ?>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>DOB</th>
                        <td>
                            <?php echo $row['dob']; ?>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>Email</th>
                        <td class="text-lowercase">
                            <?php echo $row['email']; ?>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>City</th>
                        <td>
                            <?php echo $row['city']; ?>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>gender</th>
                        <td>
                            <?php echo $row['gender']; ?>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>mobile</th>
                        <td>
                            <?php echo $row['mobile']; ?>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>Added Date</th>
                        <td>
                            <?php echo $row['added_date']; ?>
                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <th>Updated Date</th>
                        <td>
                            <?php echo $row['updated_date']; ?>
                        </td>
                    </tr>
                </div>



            </table>
            <center><a href="index.php" class="btn btn-success" style="width: 140px;
            height: 55px;
            font-size: 2rem;">CLOSE</a> </center>

        </div>
    <?php } ?>