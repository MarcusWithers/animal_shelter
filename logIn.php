<?php

if (isset($_POST["submit"])) {

    $userName = $_POST["username"];
    $userPassword = $_POST["pwd"];

    require_once 'dBconnect.php';
    require_once 'functions.php';

    if (emptyInputLogIn($userName, $userPassword) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $userName, $userPassword);
}
else{
    header("location: ../login.php");
    exit();
}