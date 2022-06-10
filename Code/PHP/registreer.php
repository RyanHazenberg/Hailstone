<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up | Hailstone</title>
    <link rel="stylesheet" href="../CSS/Register.css">

</head>

<body>

<div class="container">
    <div class="Header"></div>
    <div class="Footer"></div>
    <div class="Sign-up">
        <div id="inlogblok">
            <form method="post" autocomplete="off" action="includes/registreer.inc.php">
                <div id="Container">
                    <h1>Sign-up</h1>
                    <input type="text" name="name" placeholder="Fullname..." required id="Name">
                    <input type="text" name="username" placeholder="Username..." required id="Username"><br>
                    <input type="password" name="pwd" placeholder="Password..." required id="Password">
                    <input type="password" name="pwdrepeat" placeholder="Repeat password..." required id="Repeat"><br>
                    <input type="email" name="email" placeholder="Johndoe@example.com..." required id="Mail">
                    <input type="number" name="phone" placeholder="+31 1234-56-78..." minlength="11" maxlength="15" required id="Phone">
                    <input type="file" name="Profilepic" required id="Profilepic">
                    <div id="Freelance">
                        <input type="radio" name="typeofuser" value="Freelancer" id="Freelancer">
                        <label for="Freelancer">Freelancer</label>
                    </div>
                    <div id="Company">
                        <input type="radio" name="typeofuser" value="Company">
                        <label for="Company">Company</label>
                    </div>
                    <input type="text" name="Companyname" placeholder="Companyname..." id="CompanyName">
                    <input type="text" name="Zip-code" placeholder="2837AB..." maxlength="6" id="Zip"><br>
                    <input type="text" name="Adress" placeholder="1 Willow lane..." id="Adress">
                    <input type="text" name="Province/state" placeholder="South-holland/Georgia..." id="Location">
                    <input type="file" name="Companylogo"  id="Companylogo">
                    <button id="Register" name="submit" type="submit"><b>Register</b></button>
                    <button id="Log-in" name="submit"><b>Login</b></button>
    
                <p>already got an account? Log-in <a href="login.php">here!</a></p>
                <img src="../../Media/Logo/Hailstone-Logo.png" alt="Hailstone-Logo" id="Form-logo">
            </div>
    
            </form>
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

</html>