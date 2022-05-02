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
    <title>How to do Laundry</title>
</head>

<body>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="header.txt"></script>
    <!--Insert Page Heading-->
    <div class="heading">
        <br></br>
        <h1> How to Sanitize Laundry</h1>
    </div>
    <br></br>
    <!--Insert Body of Page-->
    <div class="body" > 
        <p>Here at MetroState Animal Shelter, Laundry is a never ending task. Due to the potential of disease transfer among animals, heavily soiled items can be thrown away especially if they were used in the puppy or kitten wards. You will need to follow these steps to ensure the animals health at MAS.</p>
        <br></br>
        <h3>Steps to Sanitize Laundry </h3>
        <br><ul>
        <li>Shake out bedding to ensure large organic matter is not getting added to the wash.</li>
        <li>Fill washing machine with soiled laundry. Wear Gloves. These are industrial sized so they can fit more than the standard machines. </li>
        <li>Add your detergent and bleach to the appropriate places on the washer. Run cycle. </li>
        <li>Once clean place clean wet bedding into the dryers. </li>
        <br></br></ul>
    </div>
    <div class="banner">
		<h1>Thank you for doing the Laundry! <h1>
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