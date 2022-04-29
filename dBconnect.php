<?php

$servername = "localhost";
$username = "ics325sp2203";
$password = "7846";
$database = "ics325sp2203";
 // connection

$conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
      }
     