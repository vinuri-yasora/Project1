

<?php

$connection = new mysqli("localhost","root","" );
$db = mysqli_select_db($connection , "hostel");

     if(isset($_POST['delete'])){


      $key = $_POST['id'];

           
     $query = "DELETE from hostels where hostel_no = '$key'" or die("not deleted".mysql_error());

    $query_run = mysqli_query($connection,$query);

  if($query_run){
   
   header("Location:hosteldetail.php") ;	
  }
  else{

  	echo '<script>alert("indert data incorrectly")</script>';
  	header("Location:hosteldetail.php") ;
  }

     }
?>