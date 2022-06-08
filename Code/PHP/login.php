<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=0;"/>
    <title>Inloggen - Docent</title>
    <link rel="stylesheet" href="../style/logStyle.css">
</head>

<body>

    <div id="container">
        <form id="loginForm" autocomplete="off" action="includes/login.inc.php" method="post">
            <div id="iContainer">
                <div id="loginBlok">
                    <div id="inputFields">
                        <input id="nameInput" type="text" name="username" placeholder="Gebruikersnaam" required>
                        <input id="passInput" type="password" name="pwd" placeholder="Wachtwoord" required>
                    </div>
                    <div id="kInlogDiv">
                        <button id="inlogKnop" name="submit">Inloggen</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</body>

</html>