<?php
include('db.php');
if(isset($_POST['submit'])){

 $sql = "INSERT INTO sdnt (prn,name,mob,branch,sem) VALUES('$_POST[prn]','$_POST[name]','$_POST[mob]',  '$_POST[branch]','$_POST[sem]')";
 header("location:index.php");

if ($conn->query($sql) === TRUE) { ?>
<script type="text/javascript">alert("New Record Created Successfully");</script>
  <?php
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
 
}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Attendance Management System</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="vc.css">
    <meta charset="UTF-8">
  <meta name="description" content="Qr Code Based Attendance Management System Developed by Bill Gates College team">
  <meta name="keywords" content="Attendance Attendance system qr location Attendance system bilgatescollege osmanabad">
  <meta name="author" content="Jpsolutions">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-image:url(bg.jpg);">
		<div class="container col-md-3 col-sm-12 align-middle vc1 p-3" style="background-color: rgba(
		197, 232, 229, 1.0);">

			<form class="form" style="font-style: italic; font-size: 20px;" method="POST">
				<center><h2><span style="color:slateblue;"> Student</span> <span style="color:tomato;">Signup</span></h2>
				<div class="form-group form-inline" style="text-align:left;">
					<label class="form-label col-md-5 col-sm-6">PRN</label>
					<input type="text" name="prn" class="form-control col-md-6 col-sm-4" placeholder="Enter PRN number ">
				</div>
				<div class="form-group form-inline" style="text-align:left;">
					<label class="form-label col-md-5 col-sm-6">Student Name</label>
					<input type="text" name="name" class="form-control col-md-6 col-sm-4" placeholder="Enter Your Full Name">
				</div>
				<div class="form-group form-inline" style="text-align:left;">
					<label class="form-label col-md-5 col-sm-6">Mobile Number</label>
					<input type="text" name="mob" class="form-control col-md-6 col-sm-4" placeholder="Enter Your Mobile Number">
				</div>
				<div class="form-group form-inline" style="text-align:left;">
					<label class="form-label col-md-5 col-sm-6">Branch</label>
					<select name="branch" class="form-select form-control col-md-6 col-sm-4" required="">
						<option >Select Your Faculty</option>
<option value="BCS">BCS</option>
<option value="BCA">BCA</option>
<option value="BBA">BBA<option>
					</select>
				</div>
				<div class="form-group form-inline" style="text-align:left;">
					<label class="form-label col-md-5 col-sm-6">Semester</label>
					<select name="sem" class="form-select form-control col-md-6 col-sm-4" required="">
						<option >Select Your Semester</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
					</select>
				</div>
				<div class="form-group form-inline" style="text-align:left;">
					<input type="submit" name="submit" class="btn btn-success mr-5" value="SignUp">
					<a href="index.php" class="btn btn-info ml-5" >Sign in</a>
				</div>
			</center>
			</form>
		</div>
</body>
</html>