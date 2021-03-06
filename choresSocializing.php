<?php
session_start();
if(isset($_SESSION['loggedin'])){
	echo '<form method="POST" action="signout.php"><input class="headerSignOut" type="submit" Value="Sign Out" />';
}
if(!isset($_SESSION['loggedin'])){
  echo '<form method="POST" action="signout.php"><input class="headerSignOut" type="submit" Value="Sign In" />';
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
    <title>How to Socialize</title>
</head>

<body>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="header.txt"></script>
    <!--Insert Page Heading-->
    <div class="heading">
        <br></br>
        <h1> How to Socialize with the Animals</h1>
    </div>
    <br></br>
    <!--Insert Body of Page-->
    <div class="body" > 
        <p>Here at MetroState Animal Shelter, Socializing is a never ending task. Our Animals need interaction just as much as any person in the world.</p>
        <br></br>
        <h3>Steps to Socializing with Animals</h3>
        <br><ul>
        <li>Verify the level of friendliness and any restrictions on interactions on the charts for each animal.</li>
        <li>Socialize accordingly.</li>
        <br></br></ul>
    </div>
    <div class="banner">
		<h1>Thank you for Socializing with the Animals! <h1>
	  </div>
      <br/><br/>
      <div>
      <a href="chorehomepage.php"><button>Back to Chore List:</button></a>
        </div>
</body>
<br></br>
<!--script for footer-->
<script language="javascript" type="text/javascript" src="footer.txt"></script>
<!--End Page-->

</html>