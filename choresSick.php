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
    <title>How to Care for the Sick</title>
</head>

<body>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="header.txt"></script>
    <!--Insert Page Heading-->
    <div class="heading">
    <br/><br/>
        <h1> How to Care for the Sick and Injured</h1>
    </div>
    <br></br>
    <!--Insert Body of Page-->
    <div class="body" >
        <p>Not every animal that comes to MetroState Animal Shelter is Healthy. Many require time in the Sick wards to make sure they are perfectly healthy prior to adoption. Working along side our Veterinary Services Team you can make a huge difference. </p>       
        <br></br>
        <h3>How to help </h3>
        <br>
        
        <p>Washing your hands between each animal, give each one a little 'out of kennel time' as well as any attention they may want.
            This may mean no physical connect or lap snuggling on the chair. Allow each animal to perform whatever activity they feel like it during their TLC time </p>
        <br></br>
    </div>
    <div class="banner">
		<h1>Thank you for TLC! <h1>
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