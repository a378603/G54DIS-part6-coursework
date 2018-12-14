<!DOCTYPE html>
<html>
<head>
<link href="details.css" rel="stylesheet" type="text/css"/>

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

<div class="name">
<?php
header("Content-Type: text/html; charset=utf8");
include('connect.php');
session_start();
echo "Name: ";
echo $_SESSION['user'];
echo '<br>';
$name=$_SESSION['user'];

$sql = "select studentid from student where studentname = '$name'"; 

$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo "StudentID: " .$row["studentid"];
        echo '<br>';
    }
 
$sql = "select degree from student where studentname = '$name'"; 
$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo "Degree: " .$row["degree"];
        echo '<br>';
    }

$sql = "select gender from student where studentname = '$name'"; 
$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo "Gender: " .$row["gender"];
        echo '<br>';
    }

$sql = "select age from student where studentname = '$name'"; 
$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo "Age: " .$row["age"];
        echo '<br>';
    }

$sql = "select tutor from student where studentname = '$name'"; 
$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo "Personal Tutor: " .$row["tutor"];
        echo '<br>';
    }

?>
</div>

<div class="address">
<?php
header("Content-Type: text/html; charset=utf8");
include('connect.php');

$sql = "select address from student where studentname = '$name'"; 
$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo "Address: " .$row["address"];
        echo '<br>';
    }

$sql = "select email from student where studentname = '$name'"; 
$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo "Email: " .$row["email"];
        echo '<br>';
    }

$sql = "select programme from student where studentname = '$name'"; 
$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo "Programme: " .$row["programme"];
        echo '<br>';
    }
    mysqli_close($conn);
?>
</div>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="modules.php">My Modules</a></li>
            <li><a href="marks.php">My Marks</a></li>
            <li><a href="#">Others</a></li>
        </ul>





</body>
</html>