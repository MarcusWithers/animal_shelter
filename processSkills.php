<?php

// User input Variables
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Address = preg_replace('/\t|\R/', ' ', $_POST['Address']);
@$Yes = $_POST['Yes'];
@$No = $_POST['No'];
$question = $_POST['question'];
$document_root = $_SERVER['DOCUMENT_ROOT'];
$date = date('H:i, jS F Y');
?>
  
  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <!--Insert Page Name-->
    <title>Skill Review</title>
</head>

<body>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="header.txt"></script>
    <!--Insert Page Heading-->
    
	<div class="heading">
        <h1>MetroState Animal Shelter</h1>
    </div>
    <br></br>
    <!--Insert Body of Page-->
    <div class="body" >
        
       <?php

echo $_POST['FirstName'] . " " . $_POST['LastName'] . '<br />';
echo '" has submitted a Level up Request."<br />';

?> 
	
	<?php

$trained = " ";
if ($Yes == true) {
    $trained = "Yes";

}
else {
    $trained = "No";
    echo "You must complete all training before you can Level up <br />";
    exit;
}

echo "<p></p>";

?>
	
	<?php

$outputstring = $date . "\t" . $FirstName . " \t" . $LastName . " \t $"
    . $trained . "\t" . $question . "\n";

// open file for appending
$myfile = fopen("levelUpRequests.txt", 'ab') or die("Your request could not be processed at this time.");


flock($myfile, LOCK_EX);
fwrite($myfile, $outputstring, strlen($outputstring));
flock($myfile, LOCK_UN);
fclose($myfile);

echo "<p>Request processed at ";
echo date('H:i, jS F Y');
echo "</p>";
?>
	
	
    </div>
</body>
<br></br>
<!--script for footer-->
<script language="javascript" type="text/javascript" src="footer.txt"></script>
<!--End Page-->

</html>