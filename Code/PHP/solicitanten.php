<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>solicitanten | Hailstone</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <?php
        require_once '../../dbh.inc.php';
        require_once 'session.php';
    ?>
</head>
<body style="padding:10px">
<?php
    include_once("header.php");
    ?>

    <h2>solicitanten : </h2>
    <table class="table">
    <thead>
        <tr>
        
        <th scope="col">name</th>
        <th scope="col">phone</th>
        <th scope="col">email</th>

        </tr>
    </thead>
    <tbody>

<?php

    // header('Content-Type: text/html; charset=utf-8');

    $id = $_GET['id'];
    $bedrijf = $_SESSION["name"];
    echo $id;
    $sql = "SELECT * FROM solicitaties WHERE vacUUID = '$id' ";

    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $userID = $row['userUUID'];
        $sql = "SELECT * FROM users WHERE userUUID = '$userID' ";

        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
 ?>

        <tr>

        <td><?=$row['name']?></td>
        <td><?=$row['phone']?></td>
        <td><?=$row['email']?></td>
        <td>
            <form method="post" action="includes/aanneem.inc.php">

            <input type="text" hidden name="naamSol" value="<?=$userID?>">

            <button name="sendAan">Aannemen</button>

        </form>
    
    </td>

    </tr>

<?php
        }

    }

?>
    </tbody>
</table>
</body>
<!-- <script src="api_frontend/makeVac.js"></script> -->
<script src="js/eisen.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>