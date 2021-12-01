<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "hostel");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$stEnrNo = mysqli_real_escape_string($link, $_REQUEST['stEnrNo']);
$status = mysqli_real_escape_string($link, $_REQUEST['status']);
//$email = mysqli_real_escape_string($link, $_REQUEST['email']);

// Attempt insert query execution
$sql = "INSERT INTO inouts (stEnrNo,dt,status) VALUES ('$stEnrNo',NOW(),'$status')";
if(mysqli_query($link, $sql)){


    header("Location:checkin.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
