<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Hailstone</title>

    <?php
        require_once '../../dbh.inc.php';
            require_once 'session.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <?php
    include_once("header.php");
    ?>

    <h1>ingelogd</h1>

    <?php
    
    ?>
    <p>gebruikersnaam : <?=$_SESSION["username"]?></p>
    <p>naam : <?=$_SESSION["name"]?></p>
    <p>accounttype : <?=$_SESSION["type"]?></p>


<table class="table">
    <thead>
        <tr>
        
        <th scope="col">Titel</th>
        <th scope="col">beschrijving</th>
        <th scope="col">bedrijf</th>
        <th scope="col">Soliciteer</th>

        </tr>
    </thead>
    <tbody>

<?php

    // header('Content-Type: text/html; charset=utf-8');


    echo $bedrijf;
    $sql = "SELECT * FROM vacature";

    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {


 ?>

        <tr>
        <td><?=$row['vacatureTitel']?></td>
        <td><?=$row['vacatureOmschrijving']?></td>
        <td><?=$row['bedrijf']?></td>
        <td><form method="post" action="includes/soliciteer.inc.php">
            <input type="text" hidden name="solicitatie" value="<?=$row['vacUUID']?>">

            <input type="text" hidden name="naamSol" value="<?=$_SESSION['UUID']?>">

            <button name="send">Soliciteer</button>

        </form></td>
    </tr>

<?php
    }

?>
    </tbody>
</table>

</body>
</html>