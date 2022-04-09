<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <!--Insert Page Name-->
    <title>New User</title>
</head
<body>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="header.txt"></script>
    <!--Insert Page Heading-->
    <div class="heading">
        <h1> Thank you for applying! </h1>
		<h2> Our Volunteer Coordinator will be in touch shortly </h2>
    </div>
    <br></br>
    <!--Insert Body of Page-->
    <div class="body" >
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "metrostate animal shelter";
// connection
$db = new mysqli("localhost", $username, $password, $database);

if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "New Account under Review";

$full_name = $_REQUEST['full_name'];
$email = $_REQUEST['email'];
$userName = $_REQUEST['userName'];
$phone_number = $_REQUEST['phone_number'];
$address = $_REQUEST['address'];

$sql = "INSERT INTO volunteer (VolunteerName, userName, Email, PhoneNumber, MailingAddress) VALUES ('$full_name', '$userName', '$email','$phone_number', '$address')";

if (mysqli_query($db, $sql)) {
    echo "<h3>Please contact us if the information below is inaccurate";
    echo nl2br("\n$full_name\n $userName\n $email\n" . "$phone_number\n$address");

}
else {
    echo "ERROR: $sql. " . mysqli_error($db);
}
mysqli_close($db);
?>
</div>
<form method="POST" action="contactform.html">
			<input type = "submit" value = "Contact Us"/>
		</form>
<?php
//create file for volunteer coordinator
$outputstring = $full_name . " \t" . $userName . " \t "
    . $email . "\t" . $phone_number . "\t" . $address . "\n";

// open file for appending
$myfile = fopen("volunteerRequests.txt", 'ab') or die("Your request could not be processed at this time.");


flock($myfile, LOCK_EX);
fwrite($myfile, $outputstring, strlen($outputstring));
flock($myfile, LOCK_UN);
fclose($myfile);

echo "<p>Request processed at ";
echo date('H:i, jS F Y');
echo "</p>";
?>

</body>
<br></br>
<!--script for footer-->
<script language="javascript" type="text/javascript" src="footer.txt"></script>
<!--End Page-->

</html>