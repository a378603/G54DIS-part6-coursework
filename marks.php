<!DOCTYPE html>
<html>
<head>
<link href="marks.css" rel="stylesheet" type="text/css"/>

<title>Student System</title>
<h1>My Marks</h1>

</head>
<body>

<div class="cc">
<p class="1">Module marks are provisional until ratified by an examination board and while correct at the time of publication, may be subject to change. A final transcript of marks will be issued as part of your Diploma Supplement (students receiving a University of Nottingham award, given at Graduation) or Leaver Transcript (students on non-award bearing programmes).</p>
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
            <li><a href="modules.php">My Modules</a></li>
            <li><a class="active" href="marks.php">My Marks</a></li>
            <li><a href="#">Others</a></li>
        </ul>

<div class="mark">
<?php
include('connect.php');
session_start();
$name=$_SESSION['user'];
$sql = "select modules.moduleid, student.studentid, studentname, modulename, credits, mark, semester from modules, student, student_module where modules.moduleid = student_module.moduleid and student.studentid = student_module.studentid and studentname = '$name'";
$result = $conn->query($sql);
echo "<table><tr><th>ModuleID</th><th>Module</th><th>Credits</th><th>Semester</th><th>Mark</th></tr>";
while($row = $result->fetch_assoc()){
echo '<tr><td scope="row">'.$row['moduleid'].'</td><td><a href="database.php">'.$row['modulename'].'</a></td><td>'.$row['credits'].'</td><td>'.$row['semester'].'</td><td>'.$row['mark'].'</td></tr>';
}
mysqli_close($conn);
echo "</table>";
?>
</div>








</body>
</html>