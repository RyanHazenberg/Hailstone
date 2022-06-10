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

<body style="background-color: #262626">

    <?php
    include_once("header.php");
    ?>
    <div class="container">
        <div class="row mt-3 mb-3">
            <h1 id="h1">Welcome <span id="late"><?=$_SESSION["username"]?></span></h1>
        </div>
        <div class="row mt-5">
            <div class="col-6">
                <div class="card">
                    col1
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    col2
                </div>
            </div>
        </div>
    </div>


</body>

</html>