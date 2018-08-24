<?php
    session_start();
    if(count($_SESSION)) header("location: a.php");
    $error2 = isset($_GET['error2']);
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <style>
            #error{
                font-family: Helvetica;
            }
            h1{
            font-family:helvetica;
        }
        </style>
    </head>
    <body>
            <h1>Welcome! Please Log In</h1>

            <?php if($error2) { ?>
                <p id="error">Something's not right--please try again</p>
            <?php } ?>

            <form action="loginSubmit.php" method="post">
                <input type="email" name="email2" placeholder="Email Address" required /><br />
                <input type="password" name="password2" placeholder="password" required /><br />
                <input type="submit" value="Login" />
            </form> 
            <a href="register.php">Register</a>
        
    </body>
    </html>