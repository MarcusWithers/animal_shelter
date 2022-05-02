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
    <title>How To Wash and Sanitize Dishes</title>
</head>

<body>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="header.txt"></script>
    <!--Insert Page Heading-->
    <div class="heading">
        <br></br>    
        <h1>How To Wash and Sanitize Dishes </h1>
    </div>
    <br></br>
    <!--Insert Body of Page-->
    <div class="body" >
        
        <p>Here at MetroState Animal Shelter, Dishes are a never ending task. Do the potential of disease transfer among animals, we only use stainless steel bowls that can be sanitized. Handwashing with soap and hot water is not enough. You will need to follow these steps to ensure the animals health at MAS.</p>
        <br/>
        <br/>
        <h3>Steps to Sanitize Dishes</h3>
        <br/>
        <p>1. You will start by scraping left over food into the garbage. Just like at home the more food gunk not going down the drain the better. </p>
        <p>2. Use hot water and dish detergent. Use your sink and fill it with hot soapy water, then wash the dishes. </p>
        <p>3. Rinse the Dishes with clean water. Drop the soapy dishes into the rinse water. They can stay there while you mix up the bleach and water solution.</p>
        <p>4. Clean out the wash tub and fill with clean water. Fill roughly halfway then add 2tablespoons of Bleach. If the bleach bottle has a pump top: use 1 pump. </p>
        <p>5. Sanitize the Dishes. Add Clean rinsed dishes to the bleach solution. Allow to soak completely submerged for 2 minutes. </p>
        <p>6. Dishes can be placed on the drying rack, there is no need to rinse. </p>

        
    </div>
    <br/>
    <br/>
    <div class="banner">
		<h1>Thank you for doing the Dishes! <h1>
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