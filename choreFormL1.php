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
    <title>Level One Sign-Up</title>
</head>


<br></br>
<body>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="header.txt"></script>
    <!--Insert Page Heading-->
    <br></br>
    <div class="heading">
        <h1>Level One Sign-Up</h1>
    </div>
    <br></br>
    <!--Insert Body of Page-->
    <div class="body" >
        <h2>Select Your Chore(s) Below:</h2><br/>
        
    </div>
    <form action="choreConfirmation.php" method="GET">

        <input type="checkbox" name="choreName[]" value="Laundry"> Laundry <br/> 
        <input type="checkbox" name="choreName[]" value="Dishes"> Dishes <br/>
        <input type="checkbox" name="choreName[]" value="Shelter Beautification"> Shelter Beautification <br/>
        <br><br>
  
        <input type="submit" value="Submit">
        <a href="chorehomepage.php">Go back to level select:</a>
</body>
<br></br>
<!--script for footer-->
<script language="javascript" type="text/javascript" src="footer.txt"></script>
<!--End Page-->

</html>