<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user.css">
    <title>Home | Hailstone</title>
    <?php
        require_once '../../dbh.inc.php';
            require_once 'session.php';
    ?>
</head>

<body>

    <?php
    include_once("header.php");
    ?>
    <div class="container">
        <div class="row">
            <h1 id="h1">Welcome <?=$_SESSION["username"]?>!</h1>
        </div>
        <div class="row">
            <div class="col-6">
                col1
            </div>
            <div class="col-6">
                col2
            </div>
        </div>
    </div>


</body>

</html>