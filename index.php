<?php
if(empty($_SESSION)){
  session_start();
}
if(isset($_SESSION['user'])){
  unset($_SESSION['user']);
  session_destroy();


}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>UWU Hostel Management System</title>
	<style>
.container-bg1 {
background-color: black;
padding-top: 50px;
padding-right: 30px;
padding-left: 80px;
}
h1 {
  background-color: white;
  font-size: 50px;
  text-shadow: 1px 1px #FF0000;
  font-weight: 600;
  padding-top: 8px;
  padding-bottom: 8px;
}

h2 {
  font-size: 40px;
  font-weight: 600;
  color: white;
  text-shadow: 1px 1px #FF0000;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

.na {
  float: left;
}

.na {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.na:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}


</style>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

   <div class="container-bg1">
	<img src="img/maxresdefault.jpg" alt="UWU" style="float:right;width:150px;height:160px;">
	<img src="img/hostel-pngrepo-com.png" alt="UWU" style="float:left;width:90px;height:90px;">

      <center><h1>Uva Wellassa University</h1></center>
	  <center><h2>Hostels</h2></center>
	<br><br>
	</div>


<ul>
  <li><a class="na" href="index.php">Home</a></li>
  <li><a class="na" href="history.php">History</a></li>
  <li><a class="na" href="about.php">About</a></li>
  <li><a class="na" href="staff.php">Staff</a></li>
  <li><a class="na" href="contact.php">Contact</a></li>

  <li style="float:right"><a class="na" href="log.php">Log In</a></li>
  <li style="float:right"><a class="na" href="Registration.php">Sign Up</a></li>
</ul>

	</div>
	 <br>

      <div class="container-fluid">
      <center><img src="img/banner.jpeg"></center>
    </div><br>
	<!--edit-->
	<div class="container -5">
<div class="container c-5">

	 <div class="row">
    <div class="col">
	<a href="registration.php"><img border="0" src="img/Registration.png" width="100" height="100"></a><p>Registration</p>
	</div>
	<div class="col">
	<a href="log.php"><img border="0" src="img/login.png" width="100" height="100"></a><p>Log In</p>
	</div>
	<div class="col">
	<a href="complain.php"><img border="0" src="img/complain.png" width="100" height="100"></a><p>Complain</p>
	</div>
	<div class="col">
	<a href="rules.php"><img border="0" src="img/Rules.png" width="100" height="100"></a><p>Rules</p>
	</div>
	<div class="col">
	<a href="viewnotice.php"><img border="0" src="img/Annousment.png" width="100" height="100"></a><p>Annousment</p>
	</div>
	</div>
	</div></div>
  </body>
</html>
