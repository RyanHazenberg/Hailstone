<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function emptyInputSignup($username,$pwd,$pwdRepeat) {
    $result;
    if(empty($username)|| empty($pwd) || empty($pwdRepeat)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd,$pwdRepeat){
    $result;
    if($pwd !== $pwdRepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;

}
function usernameExists($conn,$username){
    $sql = "SELECT * FROM users WHERE username = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../registreerDocent.php?error=stmtKAPUT1");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function emptyInputLogin($username,$pwd) {
    $result;
    if(empty($username)|| empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function createUser($conn, $username, $name,$pwd) {
    $sql = "INSERT INTO users (username, name, pwd) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../registreer.php?error=stmtKAPUT2");
            exit();
        }

    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT);

    mysqli_stmt_bind_param($stmt, "sss", $username, $name, $hashedPwd);
    mysqli_stmt_execute($stmt);
    
    mysqli_stmt_close($stmt);
    header("location: ../registreer.php?error=$hashedPwd");
    exit();

    }


    function loginUser($conn,$username,$pwd) {
        $usernameExists = usernameExists($conn,$username);
        if($usernameExists === false) {
            header("location: ../login.php?error=wronglogin1");
            exit();

        }
        $pwdHashed = $usernameExists["pwd"];
        $checkPwd = password_verify($pwd, $pwdHashed);

        if($checkPwd === false) {
            header("location: ../login.php?error=wronglogin2");
            exit();
        }
        else if ($checkPwd === true) {

            session_start();
            $_SESSION["id"] = $usernameExists["id"];
            $_SESSION["username"] = $usernameExists["username"];
            $_SESSION["name"] = $usernameExists["name"];


            header("location: ../userHome.php");
            exit();

        }
    }