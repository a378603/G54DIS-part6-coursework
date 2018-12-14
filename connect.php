<?php 
    $servername = "mysql.cs.nott.ac.uk";
    $username = "psxcl3_G54DIS";
    $password = "123456";
    $dbasename = "psxcl3_G54DIS";

    $conn = new mysqli($servername, $username, $password, $dbasename);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
?>