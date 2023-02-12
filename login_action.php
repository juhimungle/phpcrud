<?php

// print_r($_REQUEST);

$unm = $_REQUEST['username'];
$pwd = $_REQUEST['password'];


if($unm == 'admin' && $pwd == 'admin@123') {
    // echo "Authorized User";
    session_start();
    $_SESSION['username'] = $unm;
    
    header("Location: index.php");

} else {
    echo "UNAuthorized User";
    header("Location: login_form.php?msg=Username or password is incorrect");
}

?>