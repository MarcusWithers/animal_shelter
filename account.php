<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: signin.html');
	exit;
}
$servername = "localhost";
$username = "ics325sp2203";
$password = "7846";
$database = "ics325sp2203";
$con = mysqli_connect($servername, $username, $password, $database);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email, mailingaddress, phonenumber FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <!--Insert Page Name-->
    <title>Account Page</title>
</head>
  <!--script for header-->
<script language="javascript" type="text/javascript" 
  src="header.txt"></script>
 
  <br></br>
  <body>
  <div class="heading">
  <h1>Welcome back, <?=$_SESSION['name']?>!</h1> <br>
      <!--User will be dynamically created-->
    </div>
    <br></br>
    <!--Insert Body of Page-->
    
  <div class = "container">
  <div class = "left_container">
  <img src="user.jpg" alt="user" width = "500"/>  
  
  </div>
  <div class = "right_container">
  
  <h2> Your Chores are: </h2><br>
  <table>
					<tr>
          <?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: signin.html');
        exit;
    }
    $servername = "localhost";
    $username = "ics325sp2203";
    $password = "7846";
    $database = "ics325sp2203";
    // connection
    $db = new mysqli($servername, $username, $password, $database);

    if ($db->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_SESSION['id'];

    $sql = "SELECT choreName FROM chores WHERE userID = '$id'" ;
    $chores = mysqli_query($db, $sql);

    if (mysqli_num_rows($chores) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($chores)) {
          echo $row["choreName"]. "<br/>";
      }
  } else {
      echo "0 results";
  }
  
    mysqli_close($db);
    ?>
	</table>
</div>


</div><h2> <element class="photo">Change Your Password: </h2>
<div class="contact_container">
  
      <form action="changePassword.php" method="GET">
        <label for="username">Username:</label><br />
        <input type="text" name="username" placeholder="Username" /><br />
        <label for="password">Password:</label><br />
        <input type="password" name="password" placeholder="Password" /> <br />
        <label for="newPassword">New Password:</label><br />
        <input type="password" name="newPassword" placeholder="New Password" /> <br />
        <input type="submit" value="Submit" />
      </form>
    </div>
  </body>

<br><br>

<!-- <h2> To view previous chores select below </h2>
<div>
<br/><br/>
  <form action="choreResults.php" method="GET">
  <input type="submit" value="Go to Chores" />
</form>
</div> -->
<h2>View our Volunteer Contact Info (Admin Only)</h2>
<br/>
<div>
    <form action="contactPage.php" method="GET">
    <input type="submit" value="Go to Contacts" />
  </form>
  </div>

  <br><br>

  <!-- Apply for higher skill -->
  <!-- <h2> To apply for higher skill jobs, fill out the form below </h2>
  <div class="contact_container">
      <form action="processSkills.php" method="POST" >
      
   
   <legend>Personal Information</legend>
   <div class="form-example">
   <br></br>
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
          <input type="text" id="phone_number" name="phone_number" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" />
          <br />
          <label for="address">Address:</label>
          <br />
          <input type="text" id="address" name="address" placeholder ="Address" />
          <br />   <br></br>	
   </div>

          <label for ="levels">What skill level would you like to apply for?</label><br>
        <select name = "levels">
            <option value = "level1"> Level 1</option>
            <option value = "level2"> Level 2</option>
            <option value = "level3"> Level 3</option>
        </select>
        <br>
        <p>
Did you take the required course?
	<input type= "radio" name="choice" id= "Yes" value="Yes"/>
		<label for="Yes" > Yes </label>
	<input type= "radio" name ="choice" id ="No" value="No"/>
		<label for="No" > No  </label>
</p>
        <label for="question">Why should we increase your level?</label><br />
        <textarea name="question" rows="5" cols="25" spellcheck="true" > </textarea><br /><br />
        <input type="submit" value="Submit" />
      </form>
  
  
</div> -->

</body>
<!--script for footer-->
<script language="javascript" type="text/javascript" 
  src="footer.txt"></script>
</html>