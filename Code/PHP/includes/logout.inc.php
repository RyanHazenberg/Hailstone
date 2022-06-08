<?php 
function logout(){
    include_once 'session.php';

    if(isset($_SESSION["username"])) {
        session_start();
        unset($_SESSION["id"]);
        unset($_SESSION["username"]);
        unset($_SESSION["name"]);

        header("location: ../login.php?stat=uitgelogd");
        exit();
    }
}
logout();