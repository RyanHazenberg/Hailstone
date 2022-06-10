<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=0;" />
    <title>Login | Hailstone</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>

    <div class="container">
        <div class="Sign-up">
            <div id="inlogblok">
                <form method="post" autocomplete="off" action="includes/login.inc.php">
                    <div id="Container">
                        <h1>Login</h1>
                        <input type="text" name="username" placeholder="Username..." required id="Username">
                        <input type="password" name="pwd" placeholder="Password..." required id="Password"><br>
                        <div style="height:10px; width: 10rem; background-color: black; margin-top: .5em;"></div>
                        <img src="../../Media/Logo/Hailstone-Logo.png" alt="Hailstone-Logo" id="Form-logo">
                        <div id="kInlogDiv" style="margin-top: 10rem;">
                            <button id="Confirm" name="submit">Confirm</button>
                            <button id="Sign-up" name="submit">Sign-up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>