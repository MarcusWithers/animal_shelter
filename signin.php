<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Sign-in</title>
  </head>
  <header>
	<img src="logo.png" alt="pawprintlogo" />
		<div class = "navbar">
			<nav class = "navbar">
			<ol>
      <li class = "nav"><a href = "home.php">Home</a></li>
                <?php
                    if (isset($_SESSION["volunteerId"])){
                        echo "<li class = 'nav'><a href = 'account.php'> Profile</a></li>";
                        echo "<li class = 'nav'><a href = 'chorehomepage.html'>Chores</a></li>";
                        echo "<li class = 'nav'><a href = 'logout.php.html'> Log out</a></li>";
                    }
                    else{
                        echo "<li class= 'nav'><a href = 'createaccount.php'> Create An Account </a></li>";
                        echo "<li class= 'nav'><a href = 'login.php'> Log In </a></li>";

                    }
                ?>
				
				<li class = "nav"><a href = "aboutUs.html">About Us</a></li>
				<li class = "nav"><a href = "contactform.html">Contact Page</a></li>
			</ol>
			</nav>
		</div>
  </header> 
     <body>
    
      <!--Insert Page Heading-->
    <div class = "heading">
      <h1>Sign-in</h1><br><br>
      <h2>Sign Into Your Volunteer Account</h2>
    </div>
    <div class="container">
      <div class="left_container">
        <img src="dog.jpg" alt="dog" width="500px" />
        <h3>
          "I just love walking the dogs and feeding the cats at MetroState Animal Shelter."
        </h3>
        <br />
        <div class="user">
          <img src="user.jpg" alt="user" width="75px" height="75px" />
          <h4>
            Florence Hughes <br />
            <em>Volunteer Dog Walker</em>
          </h4>
        </div>
        <h2><strong>Volunteers are organized by their skill level</strong></h2>
        <br />
        <ol>
          <li>
            Level 1: Laundry, Dishes and Shelter Beautification. (all never
            ending tasks here)
          </li>
          <li>
            Level 2: Kennel cleaning, feeding/watering, walking, socializing.
          </li>
          <li>Level 3: Caring for the sick, medications and treatments.</li>
        </ol>
      </div>
      <div class="right_container">
        <form method="POST" action="logIn.php">
          <h2>Existing Volunteers</h2>
          <br />
          <h4>Sign-in Below</h4>
          <br /><br /><br />
          
          <label for="email">email or username:</label>
          <br />
          <input type="text"  name="userName" placeholder = "UserName or Email"/>
          <br />
          <label for="password">Password:</label>
          <br />
          <input type="password" id="password" name="userPassword" placeholder = "Password"/>
          <br />
          <input type="submit" value="submit" />
        </form>

          <?php
          
          if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput") {
              echo "<p>Fill in all fields </p>";
            }
              else if($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect Login </p>";
              }
            }
          ?>

        <h3>
          "The kittens are my favorite part at MetroState Animal Shelter."
        </h3>
        <br />
        <div class="user">
          <img src="user.jpg" alt="user" width="75px" height="75px" />
          <h4>
            Debra Hutchinson <br />
            <em>Volunteer kitten Snuggler</em>
          </h4>
        </div>
      </div>
    </div>
    <br>
    <div class="banner">
      <h1>MetroState Shelter Loves Their Volunteers! <h1>
    </div>
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
            </footer>
            <div>
<!--script for footer-->
<script language="javascript" type="text/javascript" src="footer.txt"></script>
            </div>
</html>