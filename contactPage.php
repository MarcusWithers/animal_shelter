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
    <title>Contact List</title>
    </head>


<br></br>
<body>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="header.txt"></script>
    <!--Insert Page Heading-->
    <div class="heading">
        <br/>
        <h1>Volunteer Contact List</h1>
     </div>
    <br></br>
    <!--Insert Body of Page-->
    <div class="body" >
    <?php
    session_start();
    $servername = "localhost";
    $username = "ics325sp2203";
    $password = "7846";
    $database = "ics325sp2203";
      // connection

      if ($_SESSION['isAdmin'] == '0') {
        header('Location: errorpage.html');
        exit;
    }

      $db = new mysqli($servername, $username, $password, $database);
      
      if ($db->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        //echo "Successfully connected to database";
       //MySQL Query to read data
       $query = "SELECT name, email, phonenumber FROM accounts ORDER BY name ASC";
       $result = mysqli_query($db, $query);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo " Name: ". $row["name"]. "   Phone: " . $row["phonenumber"] . "   Email: " . $row["email"] . "<br>";
        echo "<br/> ";
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