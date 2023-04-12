<?php
session_start();
include('db.php');
if(isset($_POST['submit'])){
$sql = "SELECT * FROM sdnt where branch='$_POST[slid]' and mob='$_POST[pass]'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
 while($row = $result->fetch_assoc()) {
   $_SESSION['login']="login";
   $_SESSION['prn']=  $row["prn"];
   $_SESSION['name']= $row["name"];
   $_SESSION['mob']= $row["mob"];
   $_SESSION['branch']= $row["branch"];
   $_SESSION['sem']= $row["sem"];
  }
} else {
  echo "0 results";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Attendance Management System</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="vs.css">
    <meta charset="UTF-8">
  <meta name="description" content="Qr Code Based Attendance Management System Developed by Bill Gates College team">
  <meta name="keywords" content="Attendance Attendance system qr location Attendance system bilgatescollege osmanabad">
  <meta name="author" content="Jpsolutions">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head> <body style="background-image:url(bg.jpg);"> <div class="container
col-md-3 col-sm-12 align-middle vc p-3" style="background-color: rgba( 197,
232, 229, 1.0);">

			<form class="form" style="font-style: italic; font-size: 20px;" method="POST">
				<center><h2><span style="color:slateblue;"> Student</span> <span style="color:tomato;">Login</span></h2>
				<div class="form-group form-inline" style="text-align:left;">
					<label class="form-label col-md-5 col-sm-6">Login ID</label>
					<input type="text" name="slid" class="form-control col-md-6 col-sm-4" placeholder="Enter the Login ID">
				</div>
				<div class="form-group form-inline" style="text-align:left;">
					<label class="form-label col-md-5 col-sm-6">Password</label>
					<input type="password" name="pass" class="form-control col-md-6 col-sm-4" placeholder="Enter the Login ID">
				</div>
				<div class="form-group form-inline" style="text-align:left;">
					<input type="submit" name="submit" class="btn btn-success mr-5" value="Login">
					<a href="" class="btn btn-info ml-5" >Register/ Signup</a>
				</div>
			</center>
			</form>
		</div>
</body>
</html>
