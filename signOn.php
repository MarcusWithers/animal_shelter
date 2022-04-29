<?php

if (isset($_POST["submit"])){

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $userName = $_POST['userName'];
    $userPassword = $_POST['password'];
    $pwdrepeat = $_POST["pwdrepeat"];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    
    require_once 'dBconnect.php';
    require_once 'functions.php';

    //catch empty inputs
    if (emptyInputSignUp($full_name, $email, $userName, $userPassword, $pwdrepeat, $phone_number, $address) !== false){
        header("location: ../createaccount.php?error=emptyinput");
        exit();
    }
    if (invalidUserName($userName) !== false){
        header("location: ../createaccount.php?error=invalidusername");
        exit();
    }
    if (invalidemail($email) !== false){
        header("location: ../createaccount.php?error=invalidemail");
        exit();
    }
    //password matching
    if (pwdMatch($userPassword, $pwdrepeat) !== false){
        header("location: ../createaccount.php?error=passwordmatcherror");
        exit();
   }
   //check for existing usernames
    if (userNameExists($conn, $userName, $email) !== false){
        header("location: ../createaccount.php?error=usernametaken");
        exit();
    }

    createUser($conn, $full_name, $email, $userName, $userPassword, $phone_number, $address) ;
        
    
}
else{
    header("location: ../createaccount.php");
    exit();
}