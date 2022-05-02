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


<br></br>
<body>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="header.txt"></script>
    <!--Insert Page Heading-->
    <div class="heading">
        <br/><br/>
        <h1>Previous Chore Results </h1>
     </div>
    </br>
    <!--Insert Body of Page-->
    <div class="body" >
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
    </div>

</body>

<br></br>
<!--script for footer-->
<script language="javascript" type="text/javascript" src="footer.txt"></script>
<!--End Page-->
</html>