<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up | Hailstone</title>
    <link rel="stylesheet" href="../CSS/Register.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="Sign-up">
            <div id="inlogblok">
                <form method="post" autocomplete="off" action="includes/registreer.inc.php">
                    <div id="Container">
                        <h1>Sign-up</h1>
                        <div id="Freelance">
                            <button id="personRadio" name="typeofuser" value="Freelancer">
                                <label for="Freelancer">Freelancer</label>
                        </div>
                        <div id="Company">
                            <button id="companyRadio" name="typeofuser" value="Company">
                                <label for="Company">Company</label>
                        </div>
                        <div class="inputs">


                        </div>


                        <button id="Register" name="submit" type="submit"><b>Register</b></button>
                        <!-- <button id="Log-in" name="submit"><b>Login</b></button> -->

                        <p>already got an account? Log-in <a href="login.php">here!</a></p>
                        <img src="../../Media/Logo/Hailstone-Logo.png" alt="Hailstone-Logo" id="Form-logo">
                    </div>

                </form>
            </div>
        </div>
    </div>

    <?php 
     if(isset($_GET["error"])){
         if($_GET["error"] == "GeenInput"){
             echo "<p>Please fill in all fields!</p>";
         }
         else if($_GET["error"] == "verkeerdeEmail"){
             echo "<p> Incorrect Username! </p>";
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
<script src="js/signupForm.js"></script>

</html>