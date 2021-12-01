<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location:index.php");
}
$stEnrNo =  $_SESSION["user"];
if($_SESSION["user"]=='uwuadmin'){
  header('Location:admin.php');
}
else if($_SESSION["user"]=='security001'){
    header('Location:checkin.php');
}
else{
  header('Location:studentprofile.php');
}

?>
