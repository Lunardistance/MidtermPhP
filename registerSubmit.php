<?php

//get values from registration form
$email2 = $_POST['email2'];
$password2 = md5($_POST['password2']);

//do not allow invalid emails


// // change to submitted entry
// session_start();
// $_SESSION['email2'] = $email2;
// $_SESSION['password2'] = $password2

// // saving the new users array
// file_put_contents('db.db', serialize([$email2, $password2]) . PHP_EOL, FILE_APPEND);

// //Redirect to profile page
// header("Location: a.php");


// -----------------------



//Validate Email
if( ! filter_var($email2, FILTER_VALIDATE_EMAIL)) die('Please enter a valid email address');

//Check if it's already in database
if(file_exists('db.db')){
// get the list of previous users
$users = unserialize(file_get_contents('db.db'));

// add new user/pass combination to the array
$users[$email2] = $password2;

//prepare user info for db file
$users = serialize($users);

// save the new users array (Update the username and password)
file_put_contents('db.db', $users);
}else{
    //Add the new credentials to the array (register)
    $users = [$email2 => $password2];
    $users =serialize($users);
    file_put_contents('db.db', $users);
}

// print_r($users);
// exit;
//Redirect to profile page
session_start();
$_SESSION['email2'] = $email2;
header("Location: a.php");


?>