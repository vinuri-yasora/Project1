
<?php

$connection = new mysqli("localhost","root","" );
$db = mysqli_select_db($connection , "hostel");



if(isset($_POST["save"])){

  $no = $_POST["num"];
  $name = $_POST["name"];
  if(isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    }else{
        $gender = "";
    }
  $total_stu = $_POST["totalnum"];
  $address = $_POST["address"];



  $query = "INSERT INTO hostels (hostel_no,hostelName,gender,no_of_Students,address ) VALUES ('$no','$name','$gender','$total_stu','$address')" ;
  $query_run = mysqli_query($connection,$query);

  if($query_run){

   header("Location:hosteldetail.php") ;
  }
  else{

  	echo '<script> alert("not co") </script>';

  	 header("Location:hosteldetail.php") ;
  }



 }

//delete code

      if(isset($_GET['delete'])){


      $key = $_GET['delete'];


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

//add room code
     


 

if(isset($_POST["addRoom"])){

$key = $_POST['id']; 

  $bedno = $_POST["bnum"];
 


  $query = "INSERT INTO ghos (hName,roomNo ) VALUES ('$key','$bedno')" ;
  $query_run = mysqli_query($connection,$query);

  if($query_run){
   
   header("Location:hosteldetail.php") ;
  }
  else{

  	

  	header("Location:hosteldetail.php") ;
  }


}
 

?>
