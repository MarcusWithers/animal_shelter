<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <!--Insert Page Name-->
    <title>Change Password</title>
    </head>


<br></br>
<body>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="header.txt"></script>
    <!--Insert Page Heading-->
    <div class="heading">
        <h1>Change Password</h1>
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
       $userfield =  $_REQUEST["username"];
       $oldPassword = $_REQUEST["password"];
       $newPassword = $_REQUEST["newPassword"];
       $query = "SELECT userName, Password FROM volunteer WHERE userName='$userfield'";
       $result = mysqli_query($db, $query);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br> Name: ". $row["userName"]. " Password: ". $row["Password"]."<br>";
        if($row["userName"] == $userfield && $row["Password"] == $oldPassword){
            echo "Match: ";
            $sqlUpdate = "UPDATE volunteer SET Password='$newPassword' WHERE userName='$userfield'";
            if ($db->query($sqlUpdate) === TRUE) {
                echo "Password Changed Successfully";
              } else {
                echo "Error updating record: " . $db->error;
              }
        }
        else {
            echo "Incorrect Password";
        }
    }
} else {
    echo "No User Found";
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