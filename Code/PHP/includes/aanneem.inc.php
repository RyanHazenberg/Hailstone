<?php
include_once '../../../dbh.inc.php';
include_once '../session.php';
echo 'c';
if(isset($_POST['sendAan'])){

    $naamSol = $POST["naamSol"];

    echo $_SESSION["UUID"];
    echo $_POST['solicitatie'];


    $query = "UPDATE solicitaties SET aangenomen = 'ja' WHERE userUUID = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $query)){

        $data[] = array('msg' => 'error','err' => 'error6');
        echo json_encode($data);
        exit();

    }
    mysqli_stmt_bind_param($stmt, "s", $naamSol);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);


    header("location: ../bedrijfDashboard.php");
    exit();

}