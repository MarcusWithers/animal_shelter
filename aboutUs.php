<<<<<<< HEAD
=======
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
    <title>About Us</title>
</head>
<br></br>
<body>

    <!--script for header-->
    <script language="javascript" type="text/javascript" src="header.txt"></script>
    <!--Insert Page Heading-->
    <br></br>
    <div class="heading">
        <h1>Who Are We?</h1>
    </div>
    <br></br>
    <div class = "container">
    <div class= "leftContainer">
        <img src="kitten.jpg" alt="kitten" width="400px" /> 
        </div>
   
        <!-- <div class= "rightContainer">
        <h2>
        MetroState Animal Shelter 
    </h2>
    </br> -->
    
    <div class="aboutbody"  >
       
        <p>
            We are your friends in your backyard, here to help with all of local animal needs!<br><br>
            Founded in March of 2022, our many volunteers aim to make a positive impact on the lives of many dogs and cats in our community.<br>
            Our organization provides safe shelter, proper veterinary care and daily necessities for animals at risk.<br>
           <br>
            MetroState Animal Shelter provides shelter for homeless & at risk animals, adoptions, hospital and TNVR services for the general public around the Metropolitan area and from owners who can no longer provide care for their dogs.<br>
            We rescue cats from local shelters and owners who can no longer provide care for their cats.
       
        
        <br></br>
        <img src="shep.jpg" alt="shep" width="100px" class="centerPic"/>
    </p>
    </div>
    </div>
    </div>
</body>
<br/>
<h2 id="founderTitle">
        Our Founders
    </h2>
<div class="photo">
    <div class="column">
        <img src="profilePic.png" alt="Crystal Backlund" width="300px" height="300px"><figcaption>Crystal Backlund</figcaption>
      </div>
      <div class="column">
        <img src="profilePic.png" alt="Josiah Walter" width="300px" height="300px"><figcaption>Josiah Walter</figcaption>
      </div>
      <div class="column">
        <img src="profilePic.png" alt="Marcus Withers" width="300px" height="300px"><figcaption>Marcus Withers</figcaption>
      </div>
</div>
<br><br>
<br/>
<form method="POST" action="contactform.php">
			<input type = "submit" value = "Contact Us"/>
		</form>
</html>

<br></br>
<!--script for footer-->
<script language="javascript" type="text/javascript" src="footer.txt"></script>
<!--End Page-->

</html>
>>>>>>> 4596c039734582979bae98f85e8a4f1487d821eb
