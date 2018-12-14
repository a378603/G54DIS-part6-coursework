<!DOCTYPE html>
<html>
<head>
<link href="login.css" rel="stylesheet" type="text/css"/>

<title>Student System</title>

</head>
<body>
<h1>Student System</h1>

<div class="qqq">
  <form action="login.php" method="POST">
    <label for="Username">Username<br><br/></label>
    <input type="text" id="username" name="username" placeholder="username" required autofocus>

    <label for="Password"><br><br/>Password<br><br/></label>
    <input type="password" id="password" name="password" placeholder="" required autofocus> 

    <label for="campus"><br><br/>Country<br><br/></label>
    <select id="campus" name="campus">
      <option value="UK campus">UK Campus</option>
      <option value="China Campus">China Campus</option>
      <option value="Malaysia Campus">Malaysia Campus</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>



<?php 

     header("Content-Type: text/html; charset=utf8");
     include('connect.php');
     session_start();
     $_SESSION['user'] = $_POST['username']; 
     $username = $_POST['username']; 
     $password = $_POST['password']; 

     if ($username && $password) {
          $sql = "select * from student where studentname = '$username' and password = '$password'"; 
          $result = $conn->query($sql); 
          $rows = $result->num_rows;

          if($rows) { 
               header("refresh:0;url=index.php");
               exit;
          }
          else{
               $failed = TRUE;
          }
     
     }

     
     
     mysqli_close($conn);
?>


<div class="aaa">
<?php
     if($failed){
          echo"Login Failed, check your username or password";
     }
     ?>
</div>

</body>
</html>