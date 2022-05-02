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
    <title>Chore Sign-Up</title>
  </head>
  <!--script for header-->
  <script language="javascript" type="text/javascript" 
  src="header.txt"></script>
  <header>
      <div class = "navbar">
</div>
  </header>
  <br></br>
  <body>
      <div class = "heading">
    <h1>Chores</h1><br><br>

    <h2>Find A Job That Suits You</h2>
</div>
<div class="w3-container"> 
<!--Generic Logo / picture-->
        <!-- <h2>
          Level One Chores
        </h2> -->
        <br />
        <div class="level_one">
          <img src="level1chores.png" alt="levelOne" width="600px" height="200px" />
          <br />
          <br />
<!--Generic Picture--> <img src="level1pic.jpg" alt="level1pic" width="600px"  />         
                 <ul>
                <li>Laundry - Washing and sorting beds and animal clothing.
                  <a href="choresLaundry.php">Click here to learn how!</a>
                </li>
                <li>Dishes - Cleaning and sorting food and water containers.
                  <a href="choresDishes.php">Click here to learn how!</a>
                </li>
                <li>Shelter Beautification - General cleaning and organizing of the shelter.
                  <a href="choresBeatify.php">Click here to learn how!</a>
                </li>
            </ul>
          <br />
        </div>
        <a href="choreFormL1.php"><button>Sign up for Level One Chores here:</button></a>
       </a>
      </div>
      <br /> 
      <br />

      <div class="w3-container"> 
            <!-- <h2>
                Level Two Chores
              </h2> -->
          <br />
          <img src="level2chores.png" alt="levelOne" width="600px" height="200px" />
          <br />
          <br />
          <!--Generic Picture--> <img src="level2pic.jpg" alt="level2pic" width="600px"  />
          <ul>
            <li>Kennel Cleaning - The emptying and sanitization of used kennels for our animals. <a href="choresKennelCleaning.php">Click here to learn how!</a></li>
            <li>Feeding/Watering - Giving the appropriate food to each animal and changing water supplies. <a href="choresFeedingWatering.php">Click here to learn how!</a></li>
            <li>Walking - Taking our animals to get some exercise (weather permitting). <a href="choresWalking.php">Click here to learn how!</a></li>
            <li>Socializing - Giving our animals time to socialize with other animals to get them better acclimated to each other. <a href="choresSocializing.php">Click here to learn how!</a></li>
          <br />
        <a href="choreFormL2.php"><button>Sign up for Level Two Chores here:</button></a>
        <br />
        </div>
        <div class="w3-container"> 
          <br />
          <br />
          <!-- <h2>
            Level Three Chores
          </h2> -->
          <br />
          <img src="level3chores.png" alt="levelOne" width="600px" height="200px" />
          <br />
          <br />
          <!--Generic Picture--> <img src="level3pic.jpg" alt="level3pic" width="600px"  />
          <ul>
            <li>Caring for the Sick - General welfare checking of our animals. Paying special attention to medical needs. <a href="choresSick.php">Click here to learn how!</a></li>
            <li>Medications - Giving medications to our animals. <a href="choresMed.php">Click here to learn how!</a></li>
            <li>Treatments - Providing any medically-specific treatments to our animals. <a href="choresTreat.php">Click here to learn how!</a></li>
          <br />
        <a href="choreFormL3.php"><button>Sign up for Level Three Chores here:</button></a>
        </div>
    <br>
    <div class="banner">
      <h1>MetroState Shelter Loves Their Volunteers! <h1>
    </div>
    

  </body>
  
  <!--script for footer-->
  <script language="javascript" type="text/javascript" 
  src="footer.txt"></script>

</html>
