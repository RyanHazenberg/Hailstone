<?php
include_once '../../../dbh.inc.php';
include_once '../session.php';
echo 'c';
if(isset($_POST['send'])){

    $solicitatie = $_POST['solicitatie'];
    $naamSol = $_SESSION["UUID"];
    $aangenomen = "nee";
    echo $_SESSION["UUID"];
    echo $_POST['solicitatie'];


    $query = "INSERT INTO solicitaties (userUUID, vacUUID, aangenomen)  VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $query)){

        $data[] = array('msg' => 'error','err' => 'error6');
        echo json_encode($data);
        exit();

    }
    mysqli_stmt_bind_param($stmt, "sss",$naamSol, $solicitatie, $aangenomen);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);


    header("location: ../userHome.php");
    exit();

}