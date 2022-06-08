<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/regStyle.css">

</head>

<body>
<div id="inlogblok">
    <form method="post" autocomplete="off" action="includes/registreer.inc.php">

    <label class="labels" for="name">gebruikersnaam :</label>
            <input type="text" name="username" placeholder="Voornaam"><br>

            <label class="labels" for="achterN">Achternaam:</label>
            <input type="text" name="achterN" placeholder="name"><br>

            <label class="labels" for="pwd">Wachtwoord:</label>
            <input type="password" name="pwd" placeholder="Wachtwoord"><br>

            <label class="labels" for="pwdrepeat">Herhaal wachtwoord:</label>
            <input type="password" name="pwdrepeat" placeholder="Herhaal wachtwoord"><br>


            <button id="inlogKnop" name="submit" type="submit"><b>Registreren</b></button><br>
            <a href="login.php">Al een account? log hier in.</a>


    </form>
    <?php 
     if(isset($_GET["error"])){
         if($_GET["error"] == "GeenInput"){
             echo "<p>Vul alle velden in</p>";
         }
         else if($_GET["error"] == "verkeerdeEmail"){
             echo "<p> onjuist gebruikers naam! </p>";
         }
         else if($_GET["error"] == "nietZelfdeWW"){
            echo "<p> De wachtwoorden zijn niet hetzelfde </p>";
        }
        else if($_GET["error"] == "emailInGebruik"){
            echo "<p> Deze Email is in gebruik! </p>";
        }
        else if($_GET["error"] == "none"){
            echo "<p> succesvol geregistreerd! </p>";
        }
     }
    ?>
    </div>

</body>

</html>