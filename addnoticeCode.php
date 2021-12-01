<?php
session_start();
if(!isset($_SESSION['user'])){
  
}
?>
<?php
$connection = new mysqli("localhost","root","" );
$db = mysqli_select_db($connection , "hostel");


if(isset($_POST["save"])){

  $publisher = $_SESSION["user"];
  $discription = $_POST["discription"];




  $query = "INSERT INTO notices (publisher,discription,dt) VALUES ('$publisher','$discription',NOW())" ;
  $query_run = mysqli_query($connection,$query);

  if($query_run){

   header("Location:addnotice.php") ;
  }
  else{

  	echo '<script> alert("not co") </script>';

  	 header("Location:addnotice.php") ;
  }



 }

      if(isset($_POST['delete'])){


      $key = $_POST['id'];


     $query = "DELETE from notices where notice_no = '$key'" or die("not deleted".mysql_error());



    $query_run = mysqli_query($connection,$query);


  if($query_run){

   header("Location:addnotice.php") ;
  }
  else{

  	echo '<script>alert("indert data incorrectly")</script>';
  	header("Location:addnotice.php") ;
  }

     }








?>
