<?php
session_start();
 require 'db_connect.php';

if (isset($_POST['stEnrNo']) and isset($_POST['password'])){

// Assigning POST values to variables.
$stEnrNo = $_POST['stEnrNo'];
$epassword = $_POST['password'];
$hpassword=md5($epassword);
$_SESSION["user"] =$stEnrNo;
// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `register` WHERE stEnrNo='$stEnrNo' and password='$hpassword'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);



if ($count == 1 ){



echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
header('Location:selectType.php');

}else{
//echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
echo "errrr";
header('Location:log.php');
}
}
?>
