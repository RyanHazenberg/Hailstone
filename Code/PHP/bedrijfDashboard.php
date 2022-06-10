<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Hailstone</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <?php
        require_once '../../dbh.inc.php';
        require_once 'session.php';
    ?>
</head>
<body style="padding:10px">
    
    <h1>maak een vacature</h1>
    <form id="makeVacature" method="post" action="api_backend/maakVac_Be.php">
        <input placeholder="Titel" name="title" id="title" type="text">
        <textarea placeholder="beschrijving" id="beschrijving" name="beschrijving" type="textarea"></textarea>

        <!-- <h2>eisen</h2> -->

        <div id="eisen">
        </div>
        <!-- <button id="eisToevoeg">Eis toevoegen</button> -->
        
        
        <button id="createVacButt">Create</button>
    </form>

    <h2>Jouw openstaande vacatures : </h2>
    <table class="table">
    <thead>
        <tr>
        
        <th scope="col">Titel</th>
        <th scope="col">beschrijving</th>
        <th scope="col">aantal solicitanten</th>

        </tr>
    </thead>
    <tbody>

<?php

    // header('Content-Type: text/html; charset=utf-8');


    $bedrijf = $_SESSION["name"];
    echo $bedrijf;
    $sql = "SELECT * FROM vacature WHERE bedrijf = '$bedrijf' ";

    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $selector = $row['vacUUID'];
        $queryTijden = "SELECT COUNT(vacUUID) as poep FROM solicitaties WHERE vacUUID = '$selector' ";
        $result2 = mysqli_query($conn, $queryTijden);
        $row2 = mysqli_fetch_assoc($result2);
        $aantalStu = $row2['poep'];
        echo $aantalStu;
 ?>

        <tr>

        <td><?=$row['vacatureTitel']?></td>
        <td><?=$row['vacatureOmschrijving']?></td>
        <td><a href="solicitanten.php?id=<?=$row['vacUUID']?>"><?=$aantalStu?></a></td>

    </tr>

<?php
    }

?>
    </tbody>
</table>
</body>
<!-- <script src="api_frontend/makeVac.js"></script> -->
<script src="js/eisen.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>