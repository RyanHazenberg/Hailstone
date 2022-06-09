<?php 

if(isset($_POST["submit"])){
    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $username = $_POST["username"];
    $name = $_POST["name"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    echo $username;
    require_once '../../../dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($username,$pwd,$pwdRepeat) !== false) {

        header("location: ../registreer.php?error=GeenInput");
        exit();
    }
    if (pwdMatch($pwd,$pwdRepeat) !== false) {

        header("location: ../registreer.php?error=nietZelfdeWW");
        exit();
    }
    if (usernameExists($conn,$username) !== false) {

        header("location: ../registreer.php?error=usernameInGebruik");
        exit();
    }
    createUser($conn, $username, $name, $pwd);
}
else {
    header("location: ../registreer.php");
    exit();
}