<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RekanSalehWebsite</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/header.css">
</head>

<body>

  <header>
    <img src="../../Media/Logo/Hailstone-Logo.png" class="imgheader" alt="logo">
    <div id="header1">
      <a class="button Hbutton" href="userHome.php" role="button">Home</a>
      <?php 
      if($_SESSION["type"] == "persoon"){
        $url = 'persoonDashboard.php';

      }elseif($_SESSION["type"] == "company"){
        $url = 'bedrijfDashboard.php';

      }

      ?>
      <a class="button Hbutton" href="<?=$url?>" role="button">Dashboard</a>
      <a class="button Hbutton" href="#" role="button">About me</a>
    </div>

    <div id="header2">
      <a class="button Hbutton" href="#" role="button">Profile</a>
      <form class="mememe vorm" action="includes/logout.inc.php">
      <a class="button Hbutton mememe" onclick="this.closest('form').submit(); return false;" href="#" role="button">Log out</a>
    </form>
    </div>

  </header>

  </body>

</html>