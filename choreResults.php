<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <!--Insert Page Name-->
    <title>Chore Results</title>
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

<br></br>
<body>
    
    <!--Insert Page Heading-->
    <div class="heading">
        <h1>Previous Chore Results </h1>
     </div>
    <br></br>
    <!--Insert Body of Page-->
    <div class="body" >
    <?php
      $servername = "localhost";
      $username = "ics325sp2203";
      $password = "7846";
      $database = "ics325sp2203";
      // connection
      $db = new mysqli($servername, $username, $password, $database);
      
      if ($db->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        //echo "Successfully connected to database";
       //MySQL Query to read data
       $query = "SELECT ChoreName, ChoreDate, ChoreNotes FROM chore ORDER BY ChoreDate DESC";
       $result = mysqli_query($db, $query);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br> Date: ". $row["ChoreDate"]. " Name: ". $row["ChoreName"]. " Notes: " . $row["ChoreNotes"] . "<br>";
    }
} else {
    echo "0 results";
}


    mysqli_close($db); // Closing Connection with Server
  ?>
    </div>

</body>

<br></br>
<!--script for footer-->
<script language="javascript" type="text/javascript" src="footer.txt"></script>
<!--End Page-->
</html>