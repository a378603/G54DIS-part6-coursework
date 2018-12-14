<!DOCTYPE html>
<html>
<head>
<link href="database.css" rel="stylesheet" type="text/css"/>

<title>Student System</title>

</head>
<body>
<div class="card">
<div class="container1">
</div>
</div>

<div class="logo">
<img src="nottinghamlogo.png" width=18% height=100% onclick="location='http://www.nottingham.ac.uk'">
</div>


<a  href="login.php" onClick="return confirm('Are you sure logout?');">
<button class="button" style="vertical-align:middle">
<span>Log out</span>
</button>
</a>

<div class="user" onclick="window.open('details.php','_self')">
<?php
session_start();
echo "Welcome, ";
echo $_SESSION['user'];
?>

</div>


<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="modules.php">My Modules</a></li>
    <li><a href="marks.php">My Marks</a></li>
    <li><a href="#">Others</a></li>
</ul>

<div class='word'>
<p class='aa'>Your module details</p>
<p>This is your module details, this page lets you know more about your module.</p>
<p>Please read this words.The purpose of this page is to let you know that this management system has the ability to query module details, but all the courses you can look up at present are database, because I only made this page. But this page already shows the upgrade I made for Bluecastle, because Bluecastle does not query for module details.
<br></br>
<?php
header("Content-Type: text/html; charset=utf8");
include('connect.php');
$name='Database';
$sql = "select modulelecturer from modules where modulename = '$name'"; 

$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo "Your lecturer: " .$row["modulelecturer"];
        $lecturer= $row["modulelecturer"];
        echo '<br>';
    }


    $sql = "select officeaddress from lecturer where lecturername = '$lecturer'"; 

    $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            echo "Address: " .$row["officeaddress"];
            echo '<br>';
        }

        $sql = "select lectureremail from lecturer where lecturername = '$lecturer'"; 
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            echo "Email: " .$row["lectureremail"];
            echo '<br>';
        }



    ?>




</div>














</body>
</html>
