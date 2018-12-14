<!DOCTYPE html>
<html>
<head>
<link href="modules.css" rel="stylesheet" type="text/css"/>

<title>My Modules</title>
<h1>My Modules</h1>
</head>
<body>

<div class="cc">
<p class="1">Modules displayed for 18/19 are those either chosen and approved in the May pre-module enrolment period or selected during the Online Module Enrolment change of mind period. Choices subject to approval will be confirmed by 26 October 2018.</p>
</div>



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
            <li><a class="active" href="modules.php">My Modules</a></li>
            <li><a href="marks.php">My Marks</a></li>
            <li><a href="#">Others</a></li>
        </ul>


<div class="module">
<?php
include('connect.php');
session_start();
$name=$_SESSION['user'];
$sql = "select modules.moduleid, student.studentid, studentname, modulename, modulelecturer, credits, semester from modules, student, student_module where modules.moduleid = student_module.moduleid and student.studentid = student_module.studentid and studentname = '$name'";
$result = $conn->query($sql);
echo "<table><tr><th>ID</th><th>Module</th><th>Lecturer</th><th>Credits</th><th>Semester</th></tr>";
while($row = $result->fetch_assoc()){
echo '<tr><td scope="row">'.$row['moduleid'].'</td><td><a href="database.php">'.$row['modulename'].'</a></td><td>'.$row['modulelecturer'].'</td><td>'.$row['credits'].'</td><td>'.$row['semester'].'</td></tr>';
}
mysqli_close($conn);
echo "</table>";
?>
</div>







</body>
</html>