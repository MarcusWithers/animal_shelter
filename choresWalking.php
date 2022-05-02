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
    <title>How to Walk the Animals</title>
</head>

<body>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="header.txt"></script>
    <!--Insert Page Heading-->
    <div class="heading">
        <br></br>
        <h1> How to Walk the Animals</h1>
    </div>
    <br></br>
    <!--Insert Body of Page-->
    <div class="body" > 
        <p>Here at MetroState Animal Shelter, Walking is a never ending task. Due to the potential of disease transfer among animals, we must make sure the appropriate precautions are taken when it comes to choosing which animals to take out at the same time.</p>
        <br></br>
        <h3>Steps to Walking</h3>
        <br><ul>
        <li>Verify the correct order for walking the Animal.</li>
        <li>Verify specifications with each animal (i.e. friendliness / compatibility with other animals).</li>
        <li>Verify correct leash is being used for each animal.</li>
        <li>Mark down time and distance travelled for each animal in chart.</li>
        <br></br></ul>
    </div>
    <div class="banner">
		<h1>Thank you for Walking the Animals! <h1>
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