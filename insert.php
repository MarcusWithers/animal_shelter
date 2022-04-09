<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "msas";
// connection
$db = new mysqli("localhost", $username, $password, $database);

if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Successfully connected to database";

$full_name = $_REQUEST['full_name'];
$email = $_REQUEST['email'];
$phone_number = $_REQUEST['phone_number'];
$address = $_REQUEST['address'];

$sql = "INSERT INTO volunteer (VolunteerName,email,number,address) VALUES ('$full_name','$email','$phone_number', '$address')";

if(mysqli_query($db, $sql)){
    echo "<h3>Data stored in a database successfully.";
    echo nl2br("\n$full_name\n $email\n"."$phone_number\n$address");  
}else{
    echo "ERROR: $sql. ".mysqli_error($db);
}
mysqli_close($db);
?>
</body>
</html>