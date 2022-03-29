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

<body>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="header.txt"></script>
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