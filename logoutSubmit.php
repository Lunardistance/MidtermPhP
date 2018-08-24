<?php
    // delete the session 
    session_start();
    unset($_SESSION['name2']);
    unset($_SESSION['email2']);
    unset($_SESSION['class']);
    session_destroy();
    // redirect to login
    header("Location: login.php");
?>