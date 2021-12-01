<?php
session_start();
$GLOBALS['link']= mysqli_connect("localhost", "root", "", "hostel");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$hos='gHos';
$stEnrNo='user1';

function roomAllocation(){
  $hos='gHos';
$randomBed=rand(1,6);
$sql = "SELECT stEnrNo from $hos where bedNo='$randomBed'";

$result = mysqli_query($link, $sql);

$row = mysqli_fetch_array($result, 'MYSQLI_ASSOC'); // Use something like this to get the result
$quantity = $row['quantity'];

if($quantity > 0) {
  $sql2 = "INSERT INTO $hos (stEnrNo) VALUES ('$stEnrNo') WHERE bedNo='$randomBed'";
  $stmt2 = $link->prepare($sql2);
  $stmt2->execute();
}
else if($quantity < 2) {
    echo "less books checked out than in stock";
}


else{
    roomAllocation();
}

}
roomAllocation();

$connection->close();
?>
