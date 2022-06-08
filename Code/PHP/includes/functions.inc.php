<?php

function emptyInputSignup($email,$pwd,$pwdRepeat) {
    $result;
    if(empty($email)|| empty($pwd) || empty($pwdRepeat)){
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
function emailExists($conn,$email){
    $sql = "SELECT * FROM docenten WHERE docentUid	= ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../registreerDocent.php?error=stmtKAPUT");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
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
function createUser($conn, $email, $achterN, $pwd, $docentOrganisatie, $docentEmail) {
    $sql = "INSERT INTO docenten (docentUid, achternaam, docentPwd, docentOrganisatie, docentEmail) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../registreerDocent.php?error=stmtKAPUT");
            exit();
        }

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $email, $achterN, $hashedPwd, $docentOrganisatie, $docentEmail);
    mysqli_stmt_execute($stmt);
    
    mysqli_stmt_close($stmt);
    header("location: ../registreerDocent.php?error=none");
    exit();

    }

    function emptyInputLogin($email,$pwd) {
        $result;
        if(empty($email)|| empty($pwd)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    function loginUser($conn,$email,$pwd) {
        $emailExists = emailExists($conn,$email);

        if($emailExists === false) {
            header("location: ../login.php?error=wronglogin");
            exit();

        }
        $pwdHashed = $emailExists["docentPwd"];
        $checkPwd = password_verify($pwd, $pwdHashed);

        if($checkPwd === false) {
            header("location: ../login.php?error=wronglogin");
            exit();
        }
        else if ($checkPwd === true) {

            session_start();
            $_SESSION["docentId"] = $emailExists["docentId"];
            $_SESSION["docentUid"] = $emailExists["docentUid"];
            $_SESSION["docentOrganisatie"] = $emailExists["docentOrganisatie"];
            $_SESSION["docentEmail"] = $emailExists["docentEmail"];


            header("location: ../index.php");
            exit();

        }
    }