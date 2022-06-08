<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST["submit"])) {
  
  
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    echo $pwd;
    echo $username;

    require_once '../../../dbh.inc.php';
    require_once 'functions.inc.php';
    echo $username;

    if (emptyInputLogin($username,$pwd) !== false) {

        header("location: ../login.php?error=GeenInput");
        exit();
    }
    echo $username;

     loginUser($conn,$username,$pwd);


}
else {
    
    header("location: ../login.php");
    exit();
}