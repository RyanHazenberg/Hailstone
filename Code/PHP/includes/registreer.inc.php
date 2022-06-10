<?php 

if(isset($_POST["submit"])){
    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    require_once '../../../dbh.inc.php';
    require_once 'functions.inc.php';


    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];





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

    if(isset($_POST["companyForm"])){






        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $type= "company";
        
        createUser($conn, $username, $name,$pwd, $type, $phone, $email);
        
    }
    if(isset($_POST["personForm"])){


        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $type= "persoon";
        
        createUser($conn, $username, $name,$pwd, $type, $phone, $email);

    }

}
else {
    header("location: ../registreer.php");
    exit();
}