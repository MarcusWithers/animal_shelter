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
    <title>Contact Us</title>
  </head>

  <!--script for header-->
  <script
    language="javascript"
    type="text/javascript"
    src="header.txt"
  ></script>



<br></br>
<body>
    <!--Insert Page Heading-->
    <div class="heading">
      <h1>Contact Us</h1>
  </div>
    <div class="contact_container">
      <form action= "contactSubmit.php" method="POST">
        <label for="fullname">Full Name:</label><br />
        <input type="text" name="fullname" placeholder="Full Name" /><br />
        <label for="email">Email:</label><br />
        <input type="text" name="email" placeholder="Email" /> <br />
        <label for="question">Ask Your Question:</label><br />
        <textarea name="question" rows="5" cols="25"> </textarea><br /><br />
        <input type="submit" value="Submit" />
      </form>
    </div>
  </body>
  <!--script for footer-->
  <script
    language="javascript"
    type="text/javascript"
    src="footer.txt"
  ></script>
</html>
