<?php
// Start the session
session_start();
if(!isset($_SESSION['user'])){
    header("Location:log.php");
}

//require 'db_connect.php';
$stEnrNo=$_SESSION["user"];
$complain=$_POST['complain'];
//$complain = mysqli_real_escape_string($link, $_REQUEST['complain']);




$link = mysqli_connect("localhost", "root", "", "hostel");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "INSERT INTO complains(stEnrNo,discription,cdate) VALUES ('$stEnrNo','$complain',NOW())";
if(mysqli_query($link, $sql)){
  header("Location:complain.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
