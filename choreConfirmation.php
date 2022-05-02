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
    <title>Chore Sign-Up Confirmation</title>
</head>

  <br></br>
  <body>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="header.txt"></script>
    <!--Insert Page Heading-->
    
    <div class="heading">
        <br/><br/>
        <h1>Chore Sign-Up Confirmation</h1>
    </div>
    <br></br>
    <!--Insert Body of Page-->
    <div class="body" >
    <?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: signin.php');
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

    

    $choreName = $_GET['choreName'];
    $id = $_SESSION['id'];

    if (count($choreName) == 0){
        echo "No chore selected.", '<br/><br/>';
    } 
    else{   
         echo "Chores selected:";
         for($i=0; $i < count($choreName); $i++){

            $sql = "INSERT INTO chores (choreName, userID) VALUES ('$choreName[$i]','$id')";

            if (mysqli_query($db, $sql)) {
                // echo "<h3>Please contact us if the selection is inaccurate";
                echo nl2br("\n$choreName[$i]\n");
            }
            else {
                echo "ERROR: $sql. " . mysqli_error($db);
            }
        }
    }
    echo '<p>Return to the Chore page here:</p>';
            echo '<a href = "chorehomepage.php"> Take me Back  </a>';
    mysqli_close($db);
    ?>
        <!-- <h2>Your Information:</h2>
       
    </div>
    <?php

      //  $choreName = $_POST['choreName'];
      //  $notes = $_POST['notes'];
        
      //  if (empty($choreName)) {
     //       echo "No chore selected."; 
     //   }   
     //       else {
     //       echo "Chore selected: ", $choreName;
     //       }
     //   echo "Comments: ", $notes;    
    ?>     -->
</body>
<br></br>
<!--script for footer-->
<script language="javascript" type="text/javascript" src="footer.txt"></script>
<!--End Page-->

</html>