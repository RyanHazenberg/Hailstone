<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=0;" />
    <title>Inloggen - Docent</title>
    <link rel="stylesheet" href="../CSS/login.css">
</head>

<body>
    <div class="container">
        <div class="Header"></div>
        <div class="Footer"></div>
        <div class="Sign-up">
            <div id="inlogblok">
                <form method="post" autocomplete="off" action="includes/login.inc.php">
                    <div id="Container">
                        <h1>Login</h1>
                        <input type="text" name="username" placeholder="Username..." required id="Username"><br>
                        <input type="password" name="pwd" placeholder="Password..." required id="Password">

                        <p>Don't have a account? Don't worry click <a href="registreer.php">here!</a></p>
                        <img src="../../Media/Logo/Hailstone-Logo.png" alt="Hailstone-Logo" id="Form-logo">
                    </div>

                    <div id="kInlogDiv">
                        <button id="inlogKnop" name="submit">Inloggen</button>
                    </div>
                </form>
            </div>
        </div>


</body>

</html>