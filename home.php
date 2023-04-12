
 <?php
 session_start();
 echo $_session['name'];
include("db.php");
$sql = "INSERT INTO att (prn,name,mob,branch,sem,faculty,date) VALUES('$_SESSION[prn]','$_SESSION[name]','$_SESSION[mob]',  '$_SESSION[branch]','$_SESSION[sem]',  '$_SESSION[faculty]','$_SESSION[date]')";
header("location:yes.php");
if ($conn->query($sql) === TRUE) {
echo "<h1 style='font-size:150px;'>Your Attendance is successfully Submited</h1>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
