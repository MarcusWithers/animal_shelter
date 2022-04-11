<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Create Account</title>
  </head>
   
<!--script for header-->
<script language="javascript" type="text/javascript" 
src="header.txt"></script>
<br></br>
<body>
  
    <!--Insert Page Heading-->
      <div class = "heading">
    <h1>Create Account</h1><br><br>
    <h2>Create a Volunteer Account</h2>
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
        <form action="insert.php" method="POST">
          <h2>New Volunteers</h2>
          <br />
          <h4>Once approved you can begin to volunteer</h4>
          <br /><br /><br />
          <label for="full_name">Your Full Name:</label>
          <br />
          <input type="text" id="full_name" name="full_name" placeholder ="Full Name" />
          <br />
          <label for="email">Email Address:</label>
          <br />
          <input type="text" id="email" name="email" placeholder = "Email"/>
          <br />
          <label for="userName">User Name:</label>
          <br />
          <input type="text" id="userName" name="userName" placeholder ="User Name" />
          <br />
          <label for="phone_number">Phone Number:</label>
          <br />
          <input type="text" id="phone_number" name="phone_number" placeholder="123-45-6789" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" />
          <br />
          <label for="address">Address:</label>
          <br />
          <input type="text" id="address" name="address" placeholder ="Address" />
          <br />
          <label for="interests">What are you interested in?</label>
          <br />
          <select id="interests" name="interests">
            <option value="brushing">Brushing</option>
            <option value="washing">Washing</option>
            <option value="walking">Walking</option>
            <option value="playing">Playing</option>
          </select>
          <br />
          <input type="submit" value="Create Account" />
        </form>
        <h3>
          "Add a volunteer testimonial to increase conversions to your landing
          page."
        </h3>
        <br />
        <div class="user">
          <img src="user.jpg" alt="user" width="75px" height="75px" />
          <h4>
            Florence Hughes <br />
            <em>Volunteer Dog Walker</em>
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
      <form action = "#">
          <input type = "submit" value = "CALL TO ACTION "/>
      </form>
  </footer>
  <!--script for footer-->
  <script language="javascript" type="text/javascript" 
  src="footer.txt"></script>
</html>
