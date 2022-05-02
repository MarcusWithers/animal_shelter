<?php
session_start();
if(isset($_SESSION['loggedin'])){
	echo '<form method="POST" action="signout.php"><input class="headerSignOut" type="submit" Value="Sign Out" />';
}
if(!isset($_SESSION['loggedin'])){
	header('Location: signin.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <!--Insert Page Name-->
    <title>Level Three Sign-Up</title>
</head>


<br></br>
<body>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="header.txt"></script>
    <!--Insert Page Heading-->
    <br></br>
    <div class="heading">
        <h1>Level Three Sign-Up</h1>
    </div>
    <br></br>
    <!--Insert Body of Page-->
    <div class="body" >
        <h2>Select Your Chore(s) Below:</h2><br/>
        
    </div>
    <form action="choreConfirmation.php" method="GET">

        <input type="checkbox" name="choreName[]" value="Caring for the Sick"> Caring for the Sick <br/>
        <input type="checkbox" name="choreName[]" value="Medications"> Medications <br/>
        <input type="checkbox" name="choreName[]" value="Treatments"> Treatments <br/>
        <br><br>
       
        <label for="notes"> Comments about the job:</label>
        <input type="text" id="comments" name="comments"><br><br>
        
        <input type="submit" value="Submit">
        <a href="chorehomepage.html">Go back to level select:</a>
</body>
<br></br>
<!--script for footer-->
<script language="javascript" type="text/javascript" src="footer.txt"></script>
<!--End Page-->

</html>