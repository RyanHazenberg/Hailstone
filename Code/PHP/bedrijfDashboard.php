<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bedrijfs dashboard</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <?php
        require_once '../../dbh.inc.php';
        require_once 'session.php';
    ?>
</head>
<body>
    
    <h1>maak een vacature</h1>
    <form id="makeVacature">
        <input placeholder="Titel" name="title" id="title" type="text">
        <input placeholder="beschrijving" id="beschrijving" name="beschrijving" type="text">
        <input placeholder="requirements" id="" name="req" type="text">
        <button id="createVacButt">Create</button>
    </form>

    <table class="table">
    <thead>
        <tr>
        
        <th scope="col">Titel</th>
        <th scope="col">beschrijving</th>

        </tr>
    </thead>
    <tbody>

<?php

    // header('Content-Type: text/html; charset=utf-8');
    $stu = $_GET['id'];




    
    $sql = "SELECT * FROM vacature";

    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
 ?>

        <tr>
        <td><?=$row['vacatureTitel']?></td>
        <td><?=$row['vacatureOmschrijving']?></td>
    </tr>

<?php
    }

?>
    </tbody>
</table>
</body>
<script src="api_frontend/makeVac.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>