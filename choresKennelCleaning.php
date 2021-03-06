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
    <title>How to Clean Kennels</title>
</head>

<body>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="header.txt"></script>
    <!--Insert Page Heading-->
    <div class="heading">
        <br></br>
        <h1> How to Clean Kennels</h1>
    </div>
    <br></br>
    <!--Insert Body of Page-->
    <div class="body" > 
        <p>Here at MetroState Animal Shelter, cleaning kennels is a never ending task. Due to the potential of disease transfer among animals, we must make sure kennels are properly sanitized in all wards so we are not unnecessarily exposing the animal to disease.</p>
        <br></br>
        <h3>Steps to Kennel Cleaning </h3>
        <br><ul>
        <li>Remove bedding and place in appropriate laundry receptacle.</li>
        <li>Remove all large debris using gloves in order to prepare for vacuuming.</li>
        <li>Use the vaccum in order to get all remaining small debris and dust in the kennel.</li>
        <li>Use the appropriately labeled cleaning supplies and clothes to wipe down all surfaces including sides and top of the kennel.</li>
        <li>Allow at least 1 hour before replacing bedding to allow proper drying.</li>
        <br></br></ul>
    </div>
    <div class="banner">
		<h1>Thank you for Cleaning the Kennels! <h1>
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