<?php
    include("includes/classes/Account.php");
    $account = new Account();
    

    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Slopify</title>
</head>
<body>
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">

            <h2>Login to your account</h2>
            <p>
                <label for="loginUserName">Username</label>
                <input type="text" id="loginUserName" name="loginUserName" placeholder="enter username" required>
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input type="password" id="loginPassword" name="loginPassword" placeholder="enter password" required>
            </p>

            <button type="submit" name="loginButton">LOGIN</button>

        </form>


        <form id="registerForm" action="register.php" method="POST">

            <h2>Create your free account</h2>
            <p>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="enter username" required>
            </p>

            <p>
                <label for="firstName">First name</label>
                <input type="text" id="firstName" name="firstName" placeholder="enter first name" required>
            </p>

            <p>
                <label for="lastName">Last name</label>
                <input type="text" id="lastName" name="lastName" placeholder="enter last name" required>
            </p>

            <p>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="enter email" required>
            </p>

            <p>
                <label for="email2">Confirm email</label>
                <input type="email" id="email2" name="email2" placeholder="confirm email" required>
            </p>


            <p>
                <label for="pasword">Password</label>
                <input type="password" id="password" name="password" placeholder="enter password" required>
            </p>

            <p>
                <label for="password2">Confirm password</label>
                <input type="password" id="password2" name="password2" placeholder="confirm password" required>
            </p>

            <button type="submit" name="registerButton">SIGN UP</button>
            
        </form>
    </div>
</body>
</html>