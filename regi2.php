<?php
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "hostel");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$stEnrNo = mysqli_real_escape_string($link, $_REQUEST['stEnrNo']);
$fullName = mysqli_real_escape_string($link, $_REQUEST['fullName']);
$initial = mysqli_real_escape_string($link, $_REQUEST['initial']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$pAddress = mysqli_real_escape_string($link, $_REQUEST['pAddress']);
$tAddress = mysqli_real_escape_string($link, $_REQUEST['tAddress']);
$closestTown = mysqli_real_escape_string($link, $_REQUEST['closestTown']);
$district = mysqli_real_escape_string($link, $_REQUEST['district']);
$disTown = mysqli_real_escape_string($link, $_REQUEST['disTown']);
$disUni = mysqli_real_escape_string($link, $_REQUEST['disUni']);
$fName = mysqli_real_escape_string($link, $_REQUEST['fName']);
$fIncome = mysqli_real_escape_string($link, $_REQUEST['fIncome']);
$mName= mysqli_real_escape_string($link, $_REQUEST['mName']);
$mIncome = mysqli_real_escape_string($link, $_REQUEST['mIncome']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);
$land = mysqli_real_escape_string($link, $_REQUEST['land']);
$dise = mysqli_real_escape_string($link, $_REQUEST['dise']);
$_SESSION["user"] =$stEnrNo;
$_SESSION["link"] =$link;
//$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$hashed_password=md5($password);
// Attempt insert query execution
$sql = "INSERT INTO register (stEnrNo,fullName,initial,gender,pAddress,tAddress,mobile,land,closestTown,district,disTown,disUni,fName,fIncome,mName,mIncome,disable,email,password) VALUES ('$stEnrNo','$fullName','$initial','$gender','$pAddress','$tAddress','$mobile','$land','$closestTown','$district','$disTown','$disUni','$fName','$fIncome','$mName','$mIncome','$dise','$email','$hashed_password')";

if(mysqli_query($link, $sql)){
    require 't.php';
     

    header('Location:studentprofile.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
