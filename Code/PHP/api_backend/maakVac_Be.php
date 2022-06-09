<?php
include_once '../session.php';
include_once '../../../dbh.inc.php';

if(isset($_POST['title'])){
    $titel = $_POST['title'];
    $beschrijving = $_POST['beschrijving'];
    $req = $_POST['req'];
    function guidv4($data)
    {
        assert(strlen($data) == 16);
    
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
    
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
    
    $UUID = guidv4(openssl_random_pseudo_bytes(16));



    $query = "INSERT INTO vacature (vacUUID, vacatureTitel, vacatureOmschrijving)  VALUES (?, ?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $query)){

        $data[] = array('msg' => 'error','err' => 'error6');
        echo json_encode($data);
        exit();

    }
    mysqli_stmt_bind_param($stmt, "sss",$UUID, $titel, $beschrijving);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    
    $query = "INSERT INTO vacatureRequirements (vacatureUUID, reqText)  VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $query)){

        $data[] = array('msg' => 'error','err' => 'error7');
        echo json_encode($data);
        exit();

    }
    mysqli_stmt_bind_param($stmt, "ss", $UUID, $req);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);



    $data[] = array('msg' => 'succes','err' => 'geenErr', 'll' => "$titel");
    echo json_encode($data);
    exit();
}
