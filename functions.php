<?php

function emptyInputSignUp($full_name, $email, $userName, $userPassword, $pwdrepeat, $phone_number, $address) {
    $result;
    if(empty($full_name) || empty($email) || empty($userName) || empty($userPassword) || empty($pwdrepeat) || empty($phone_number) || empty($address)){
        $result = true;

    }else{
        $result = false;
    }
    return $result;
}

function invalidUserName($userName) {
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
        $result = true;

    }else{
        $result = false;
    }
    return $result;
}

function invalidemail($email) {
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;

    }else{
        $result = false;
    }
    return $result;
}

function pwdMatch($userPassword, $pwdrepeat) {
    $result;
    if($userPassword !== $pwdrepeat){
        $result = true;

    }else{
        $result = false;
    }
    return $result;
}

function userNameExists($conn, $userName, $email) {
    $sql = "SELECT * FROM volunteer WHERE userName = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../createaccount.php?stmtfail");
    exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $userName, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;

    }else{
        $result = false;
        return $result;
    }
mysqli_stmt_close($stmt);
}
function createUser($conn, $full_name, $email, $userName, $userPassword, $phone_number, $address) {
    $sql = "INSERT INTO volunteer (VolunteerName, userName, Email, Password, PhoneNumber, MailingAddress) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../createaccount.php?stmtfail");
    exit();
    }

    $hashedPwd = password_hash($userPassword, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $full_name, $email, $userName, $hashedPwd, $phone_number, $address);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../createaccount.php?error=none");
    exit();
}
function emptyInputLogIn($userName, $userPassword) {
    $result;
    if(empty($userName) || empty($userPassword)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $userName, $userPassword) {
    $userExists = userNameExists($conn, $userName, $userName);

    if ($userExists === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $userExists["userPassword"];
    $checkPwd = password_verify($userPassword, $pwdHashed);

    if($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();

    }
    else if($checkPwd === true) {
        session_start();
        $_SESSION["volunteerId"] = $userExists["volunteerId"];
        $_SESSION["userName"] = $userExists["userName"];
        header("location: ../account.php");
        exit();
    }
}

