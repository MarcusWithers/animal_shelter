<!-- ICS 325-50 Spring 2022
Project Part 2 due 3/28/2022
Group 6 Authors: Crystal Backlund, 
Josiah Walter, and Marcus Withers -->
<?php
session_start();
if(isset($_SESSION['loggedin'])){
	echo "<li class = 'nav'><a href = 'account.php'>Account</a></li>";
}
if(!isset($_SESSION['loggedin'])){
	header('Location: signin.html');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>MetroState Animal Shelter Volunteer Home Page</title>
  </head>
  <!--No header script due to differences with sign on vs sign off-->
  <header>
	<?php
	if(isset($_SESSION['loggedin'])){
		echo "<form method='POST' action='signout.php'>";
		echo "<input class='headerSignOn' type='submit' Value='Sign-out' />";
	echo "</form>";
	}
	?>
	<!--[if lte IE 8]>
	<form method="POST" action="signin.html">
		<input class="headerSignOn" type="submit" Value="Sign-in" />
	</form>
-->
	<img src="logo.png" alt="pawprintlogo" />
		<div class = "navbar">
			<nav class = "navbar">
			<ol>
				<li class = "nav"><a href = "home.php">Home</a></li>
				<li class = "nav"><a href = "account.php">Profile</a></li>
				<li class = "nav"><a href = "chorehomepage.html">Chores</a></li>
				<li class = "nav"><a href = "aboutUs.html">About Us</a></li>
				<li class = "nav"><a href = "contactform.html">Contact Page</a></li>
			</ol>
			</nav>
		</div>
  </header>
  <br></br>
  <body>
    
    <!--Insert Page Heading-->
    <div class="heading">
        <h1>Welcome Volunteers </h1>
		<h1>Welcome back, <?=$_SESSION['name']?>!</h1>
    </div>
    <br></br>
    <!--Insert Body of Page-->
      <div class = "container">
		<div class= "leftContainer">
			<h2>Sign in or Create Account</h2>
			<br></br>
			<p> MetroState Animal Shelter is always in need of Volunteers. Volunteers can do many things that will directly benefit the animals in MAS' Care. Returning Volunteers are valued members of the MAS's Family. </p>
			<p> Volunteering is an immeasurably rewarding experience and integral to the success of MetroState Animal Shelter's mission. We want each volunteer to feel that he or she is a part of our team, each important to our overall success. The shelter could not exist without the support of volunteers who bring a diversity of interests, knowledge, expertise, and caring to our organization.</p>
			<br></br>
			<h4>Our Shelter is fortunate to have so many dedicated volunteers that serve in a variety of volunteer positions.</h4>
			<p>Whether you are walking dogs, socializing cats or performing yard clean-up, you help make lives better for pets and people. We value not only the time you are able to give us, but also your support of our important mission.</p>
			<br></br>
			<br></br>
			<form method="POST" action="signin.html">
				<input type="submit" Value="Sign-in" />
			</form>
			<form method="POST" action="createaccount.php">
				<input type="submit" value="Create Account" />
			</form>
		</div>
	
	
		<div class= "rightContainer">
			 <img src="puppy.jpg" alt="puppy" width="500px" />
		</div>
	</div>
	<br></br>

	
	<h2 class="heading" > Training Calendar </h2>
	<div class = "container">
		<div class= "leftContainer">
			<img src="april.png" alt="april"  /></div> 
		<div class= "rightContainer">
			<img src="may.png" alt="may"   /></div>
		</div>
		<br></br>
		<div class = "training_container">
			<div class= "left_tc">
				<h4> Level 1 Training Days </h4>
					<h5> April 9th </h5>
					<h5> May 13th </h5>
			</div>
			<div class= "middle_tc">
				<h4> Level 2 Training Days </h4>
					<h5> April 18th </h5>
					<h5> May 18th </h5>
			</div>
			<div class= "right_tc">
				<h4> Level 3 Training Days </h4>
					<h5> April 26th </h5>
					<h5> May 23rd </h5>
			</div>
			</div>
	<br></br>
	<br></br>

	<h2 class="heading"> Chores </h2>
	<h3 class="heading"> Chores are never ending at MAS. Chores are divided by skill-level </h3>
	<div class = "container">
			<div class= "left_tc">
				<ol> Level 1 Chores </ol>
					<li> Laundry </li>
					<li> Dishes </li>
					<li> Shelter Beautification </li>
					<br></br>

			</div>
			<div class= "middle_tc">
				<ol> Level 2 Chores </ol>
					<li> Kennel Cleaning </li>
					<li> Feeding/Watering </li>
					<li> Walking/Socializing </li>
					<br></br>
			</div>
			<div class= "right_tc">
				<ol> Level 3 Chores </ol>
					<li> Medications </li>
					<li> Treatments </li>
					<li> TLC for sick </li>
					<br></br>
			</div>
			</div>

	<div class="banner">
		<h1>MetroState Shelter Loves Their Volunteers! <h1>
	  </div>
	  <br></br>
	  <div class = "mission">
	  <div class = "mission1">
		  <h1> Saves Money</h1> 
		  <h4>More volunteers means we can spend less money on paying employees to scoop-poop</h4>
		
	  </div>
	  <div class = "mission2">
		  <h1>Saves Time</h1>
		  <h4>When our volunteers add their sweat-equity to the mix our employees can do more to help the animals in the shelter.</h4>
		
		</div>
	  <div class = "mission3">
		  <h1>Saves Animals</h1>
		  <h4>With our employees free they can focus on providing the best care for all pets that enter the building.</h4>
		  
		</div>
  </div>
	</body>
	<footer class = "signin_footer">
		<h1>We Can't Do it Without You</h1> <br>
		<h4>Questions or any last reservations? Reach out to our Volunteer Coordinator.</h4><br><br>
		<form method="POST" action="contactform.html">
			<input type = "submit" value = "Contact Us"/>
		</form>
	<!--script for footer-->
	<script language="javascript" type="text/javascript" 
  src="footer.txt"></script>
	</body>
	</html>