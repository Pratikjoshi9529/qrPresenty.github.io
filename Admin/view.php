
<?php
session_start();
include("db.php");

if(isset($_SESSION['login'])){

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

</head> <body style="background-color: rgba( 197,
232, 229, 1.0); "> <div class="container-fluid
col-md-12 col-sm-12 align-middle vc p-3" >

			<form class="form" style="font-style: italic; font-size: 20px;" method="POST">
				<center><h2><span style="color:slateblue;"> Admin</span> <span style="color:tomato;">Pannel</span></h2>
				<div class="form-group form-inline" style="text-align:left;">
					<label class="form-label col-md-1 col-sm-6">Branch</label>
					<select class="form-select form-control" name="branch">
							<option value="BCS">BCS</option>
							<option value="BCA">BCA</option>
							<option value="BBA">BBA</option>
					</select>
				
					<label class="form-label col-md-1 col-sm-6">Semester</label>
					<select class="form-control form-select" style="border:none;" name="sem">
						<option value="1">I</option>
						<option value="2">II</option>
						<option value="3">III</option>
						<option value="4">IV</option>
						<option value="5">V</option>
						<option value="6">VI</option>
					</select>
							<label class="form-label col-md-1 col-sm-6">Faculty</label>
					<select class="form-control form-select" style="border:none;" name="faculty">
						<?php
							$sql1 = "SELECT DISTINCT faculty FROM att";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
  		?>
  		<option value="<?php echo $row1['faculty']; ?>"><?php echo $row1['faculty']; ?></option>
  		<?php
  }
} else {
  echo "0 results";
}
						 ?>
					</select>
					<label class="form-label col-md-1 col-sm-6">Date</label>
					<input type="date" name="date" class="form-control col-md-2 col-sm-4" placeholder="Enter the Login ID">
				
					<input type="submit" name="submit" class="btn btn-success ml-5 mr-5 col-md-1 form-control" value="Submit">
					<button type="button" class="btn btn-primary ml-5" onclick="myApp.printTable()">Print</button>
					<input type="submit" name="logout" class="btn btn-danger ml-5" value="Logout">
				</div>
			</center>
			</form>
			<div class="table-responsive" id="tab">
<table class="table table-bordered">
	<tr><td colspan="4" style="text-align:center;"><h3 style="margin:0;">Bill Gates Institute of Computer Science and Management Osmanabad</h3><br>
		<h4 style="padding-top:0px; margin:0;">Attendance Report<!--  (<?php if(isset($_POST['date'])){ echo  date("d-m-Y", strtotime($_POST['date']));} else{}?>) --></h4>
	</td></tr>
	<tr style="font-weight:bold;"><td>Sr</td><td>Name</td><td>Branch</td><td>Subject</td></tr>
	<?php
     $sql = "SELECT * FROM att";
    if(isset($_POST['submit'])){
$sql="SELECT * FROM att WHERE branch='$_POST[branch]' and sem='$_POST[sem]' and date='$_POST[date]'  and faculty='$_POST[faculty]'";
// echo $sql;
// exit();
    }

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
	$x=1;
  while($row = $result->fetch_assoc()) {
    ?>
    <tr><td><?php echo $x; ?></td><td><?php echo $row['name']; ?></td><td><?php echo $row['branch']; ?></td><td><?php echo $row['faculty']; ?></td></tr>
    <?php
    $x++;
  }
} else {
  echo $_POST['branch'];
}
	 ?>
</table>
			</div>
		</div>
		<script type="text/javascript">
 var myApp = new function () {
        this.printTable = function () {
            var tab = document.getElementById('tab');

            var style = "<style>";
                style = style + "table {width: 100%;font: 17px Calibri; color:black !important;}";
                style = style + "a ,button {display:none;}";
                   style = style + ".am {display:block !important;}";
                   style = style + "thead th{color:black;}";
                 style = style + ".tab h3 {color:black !important;}";
                style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse; text-align:left";
                style = style + "padding: 2px 3px;text-align: center;}";
                style = style + "</style>";

            var win = window.open('', '', 'height=700,width=700');
            win.document.write(style);          //  add the style.
            win.document.write(tab.outerHTML);
            win.document.close();
            win.print();
        }
    }
		</script>
</body>
</html>
<?php
}
else{
header("location:index.php");
}
?>