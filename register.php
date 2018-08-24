<?php
    session_start();
    // if(count($_SESSION)) header("Location: a.php");
    $error2 = isset($_GET['error']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <style>
        h1 {
            font-family: Helvetica;
        }
        
    </style>
</head>
<body>
    <h1>Create a New Account or Update Your Existing One<h1>

    <form action="registerSubmit.php" method="post">
        <input type="text" name="email2" placeholder="Type your email" required /><br />
        <input type="password" name="password2" placeholder="Type your password" required/><br />
        <input type="submit" value="submit"/>
    </form>

      
     <a href="logoutSubmit.php">Logout</a>
     <a href="login.php">Login</a><br />
     <a href="a.php">page 1</a>
     <a href="b.php">page 2</a>

</body>
</html>