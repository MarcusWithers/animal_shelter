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
        <h1>Chore Sign-Up Confirmation</h1>
    </div>
    <br></br>
    <!--Insert Body of Page-->
    <div class="body" >
        <h2>Your Information:</h2>
       
    </div>
    <?php

        $choreName = $_POST['choreName'];
        $notes = $_POST['notes'];
        
        if (empty($choreName)) {
            echo "No chore selected.";
        }   
            else {
            echo "Chore selected: ", $choreName;
            }
        echo "Comments: ", $notes;    
    ?>    
</body>
<br></br>
<!--script for footer-->
<script language="javascript" type="text/javascript" src="footer.txt"></script>
<!--End Page-->

</html>