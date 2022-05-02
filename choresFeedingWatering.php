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
    <title>How to Feed and Water</title>
</head>

<body>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="header.txt"></script>
    <!--Insert Page Heading-->
    <div class="heading">
        <br></br>
        <h1> How to Feed and Water</h1>
    </div>
    <br></br>
    <!--Insert Body of Page-->
    <div class="body" > 
        <p>Here at MetroState Animal Shelter, Feeding and Watering is a never ending task. Due to the potential of disease transfer among animals, we must make sure the appropriate food is being given individually to the animals to prevent cross-contamination.</p>
        <br></br>
        <h3>Steps to Feeding and Watering </h3>
        <br><ul>
        <li>Verify that it is the appropriate time for the animal's feeding and/or watering.</li>
        <li>Verify the dietary restrictions of the specific animal in their charts.</li>
        <li>Use a new, clean bowl to give the animal food and water.</li>
        <li>Verify that the animal ate and/or drank and mark it in the chart.</li>
        <li>Place the bowl in the appropriate cleaning area.</li>
        <br></br></ul>
    </div>
    <div class="banner">
		<h1>Thank you for Feeding and Watering the Animals! <h1>
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