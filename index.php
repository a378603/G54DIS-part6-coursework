<!DOCTYPE html>
<html>
<head>
<link href="index.css" rel="stylesheet" type="text/css"/>

<title>Student System</title>
</head>
<body>

<div class="words">
<p class="word">To get your details, just click your name </p>
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

<div class="polaroid1">
  <img src="module.jpg" alt="Modules" width=100% height=100% onclick="location.href='modules.php'">
  <div class="container">
  <p>Modules</p>
  </div>
</div>

<div class="polaroid2">
  <img src="mark.jpg" alt="Marks" width=100% height=100% onclick="location.href='marks.php'">
  <div class="container">
  <p>Marks</p>
  </div>
</div>

<div class="polaroid3">
  <img src="others.jpg" alt="Others" width=100% height=100%>
  <div class="container">
  <p>Others</p>
  </div>
</div>




</body>

</html>




