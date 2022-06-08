<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registreer</title>
    <link rel="stylesheet" href="style/regStyle.css">

</head>

<body>
<div id="inlogblok">
    <form method="post" autocomplete="off" action="includes/registreer.inc.php">

    <label class="labels" for="username">gebruikersnaam :</label>
            <input type="text" name="username" placeholder="username"><br>

            <label class="labels" for="name">volledige naam :</label>
            <input type="text" name="name" placeholder="name"><br>

            <label class="labels" for="pwd">Wachtwoord:</label>
            <input type="password" name="pwd" placeholder="Wachtwoord"><br>

            <label class="labels" for="pwdrepeat">Herhaal wachtwoord:</label>
            <input type="password" name="pwdrepeat" placeholder="Herhaal wachtwoord"><br>


            <button id="inlogKnop" name="submit" type="submit"><b>signup</b></button><br>
            <a href="login.php">Al een account? log hier in.</a>


    </form>
    <?php 
     if(isset($_GET["error"])){
         if($_GET["error"] == "GeenInput"){
             echo "<p>Fill in all fiels!</p>";
         }
         else if($_GET["error"] == "verkeerdeEmail"){
             echo "<p> Incorrect username! </p>";
         }
         else if($_GET["error"] == "nietZelfdeWW"){
            echo "<p> Passwords are not the same! please check for capitals </p>";
        }
        else if($_GET["error"] == "emailInGebruik"){
            echo "<p> This E-mail is already in use! </p>";
        }
        else if($_GET["error"] == "none"){
            echo "<p> Registered succesfully! </p>";
        }
     }
    ?>
    </div>

</body>

</html>