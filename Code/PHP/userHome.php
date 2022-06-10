<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Hailstone</title>

    <?php
        require_once '../../dbh.inc.php';
            // require_once 'session.php';
    ?>
</head>
<body>
    <h1>ingelogd</h1>

    <?php
    
    ?>
    <p>gebruikersnaam : <?=$_SESSION["username"]?></p>
    <p>naam : <?=$_SESSION["name"]?></p>


    <form action="includes/logout.inc.php">

        <button type="submit">logout</button>
    </form>

        <a href="bedrijfDashboard.php">
            <button>bedrijfDashboard</button>
        </a>

</body>
</html>