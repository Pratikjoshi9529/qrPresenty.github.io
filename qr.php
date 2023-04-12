<?php
session_start();
if(isset($_GET['faculty'])){
    $_SESSION['faculty']=$_GET['faculty'];
}
$_SESSION['date']=date("Y/m/d");
if($_SESSION['login']=="1234"){
// header("location:https://jpsolutions.w3spaces.com");
echo'<!DOCTYPE html>
<html>
<body   onload="getLocation()">


<script>
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
   
  }
}

function showPosition(position) {

if(position.coords.latitude==18.5204303 && position.coords.longitude==73.8567437){ 
  window.location.href="home.php";
}
else{
    window.location.href="session.php";
}
}
</script>

</body>
</html>

';
}
else{
header("location:index.php");
}
 ?>

