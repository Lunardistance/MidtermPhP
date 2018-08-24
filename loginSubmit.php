<?php
    //values entered in form
    $email2 = $_POST['email2'];
    $password2 = md5($_POST['password2']);
    // $data = file('db.db');
    // print_r($data);
    // exit;

    //Get Array to compare with form entry
    $users = unserialize(file_get_contents('db.db'));
    //validate email format entry
    if( ! filter_var($email2, FILTER_VALIDATE_EMAIL)) die('You must enter an email address!');
   

    if($users[$email2] == $password2) {

        session_start();
        $_SESSION = $session2;
        header("location: a.php");

    }else {
       header("location:login.php");
    }



    
 
        
    


  ?>