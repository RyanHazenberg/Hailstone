<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="profile.css" rel="stylesheet">
</head>

<body>
    <?php
    include_once("Template_Header.php");
    ?>
    <div class="container">
        <div class="row" id="inner">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12" id="placeholder">
                        <img src="https://via.placeholder.com/150" class="rounded-circle" alt="Cinque Terre" width="250"
                            height="250">
                    </div>
                    <div class="col-md-12" id="placeholder2">

                        <div id="profileButtonDiv">
                        <h2>Profile Name</h2>
                        <p>Profession</p>
                        <p>Links</p>
                        <p>Skills</p>
                            <button class="profileButton">Edit Profile</button>
                            <button class="profileButton">Contact</button>
                            <button class="profileButton">Download Resume</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                Basic card
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                Basic card
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                Basic card
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>