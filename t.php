<?php

if(!isset($_SESSION['user'])){
    header("Location:index.php");
}

function roomAllocation(){

  //$mysqli = new mysqli("localhost", "root", "", "hostel");

   /* check connection */
  /* if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
     exit();
   }*/

 $link=$_SESSION["link"];
  $stEnrNo=$_SESSION["user"];
  $randomBed=rand(1,80);
  if ($result = $link->query("SELECT stEnrNo FROM gHos WHERE bedNo='$randomBed'")) {

     /* fetch the first row as result */
     $row = $result->fetch_assoc();


if($row['stEnrNo']==0){
  $ssql="UPDATE gHos SET stEnrNo='$stEnrNo' WHERE bedNo=$randomBed";
  if (mysqli_query($link, $ssql)) {
 echo "New record created successfully";
} else {
 echo "Error: " . $ssql . "<br>" . mysqli_error($link);
}
}
else{
  roomAllocation();
}

   /* close result set */
    $result->close();
 }
}
roomAllocation();
 /* close connection */
 $link->close();
?>
