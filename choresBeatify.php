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
    <title>How Beautify the Shelter</title>
</head>

<body>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="header.txt"></script>
    <!--Insert Page Heading-->
    <div class="heading">
    <br/><br/>
        <h1> How to Make the Shelter Look Good.</h1>
    </div>
    <br></br>
    <!--Insert Body of Page-->
    <div class="body" >
        <p>There is always something to tidy up around here.</p>
        <br></br>
        <h3>Some Housekeeping Ideas: </h3>
        <br>
        <ol> </ol>
					<li> Empty Trash/Recycling </li>
					<li> Sweeping the sidewalks </li>
					<li> Scooping the yard for pet waste and litter </li>
                    <li> Restocking </li>
                    <li> Filing paperwork </li>
                    <li> Putting away laundry/dishes </li>
                    <li> Mow the Lawn </li>
                    <li> Trim the Hedges </li>
                    <li> Multch  </li>
                    <li> De-weed the Garden  </li>
                    <li> Clean the Bathrooms  </li>
                    <li> Clean the Breakrooms  </li>
                    <li> Sort Through Donations  </li>
					<br></br>
    </div>
    <div class="banner">
		<h1>Thank you for doing this Task! <h1>
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