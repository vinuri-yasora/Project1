<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student-Dashboard-Uva Wellassa University</title>

	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<style>


.container-bg1 {
background-color: black;
padding-top: 50px;
padding-right: 30px;
padding-left: 80px;
padding-bottom: 0px;
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

h3{
font-weight: 600;
}

.button {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  text-align: center;
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

#leftbox {
                float:left;
                background:white;
                width:25%;
                height:280px;

            }

            #rightbox{
                float:right;
                background:white;
                width:75%;
                height:280px;
				padding-top: 50px;
				padding-right: 50px;
				padding-bottom: 50px;
				padding-left: 50px;

            }
            #right-b{
				float:left;
                background:white;
                width: 400px;
				border: 5px solid Tomato;
				padding: 50px;
				margin: 20px;
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

	<div class="container-bg2">
	<ul>
  <li><a class="na" href="index.php">Home</a></li>
  <li><a class="na" href="history.php">History</a></li>
  <li><a class="na" href="about.php">About</a></li>
  <li><a class="na" href="staff.php">Staff</a></li>
  <li><a class="na" href="contact.php">Contact</a></li>

  <li style="float:right"><a class="na" href="logout.php">Log Out</a></li>
  <?php
 // Echo session variables that were set on previous page
 echo "WELCOME USER " . $_SESSION["user"] . ".<br>";
 ?>
</ul>

	</div>

	<div id = "leftbox">
	<div class="row mx-lg-n5">
    <div class="col py-2 px-lg-4 border bg-light">
	<div class="wrapper">
	<div class="container">
	<div class="row">
	<div class="span3">
	<div class="sidebar">

	<ul class="widget widget-menu unstyled">
    <li>
    <a href="sdetails.php">
    <i class="menu-icon icon-tasks"></i>
    My Profile
  <!--  <b class="label orange pull-right">19</b> -->
    </a>
    </li>
		<li class="active">
		<a href="studentprofile.php">
		<i class="menu-icon icon-dashboard"></i>
			Dashboard
		</a>
		</li>
		<li>
		<a href="viewnotice.php">
		<i class="menu-icon icon-bullhorn"></i>
			Notice Board
		</a>
		</li>
		<li>
		<a href="complain.php">
		<i class="menu-icon icon-inbox"></i>
		Suggestions & Complains
		<!--<b class="label green pull-right">11</b> -->
		</a>
		</li>
    <li>
    <a href="srules.php">
    <i class="menu-icon icon-inbox"></i>
    Hostel Rules & Regulations
    <!--<b class="label green pull-right">11</b> -->
    </a>
    </li>
		</ul><!--/.widget-nav-->
	</div> </div> </div> </div> </div> </div> </div> </div>
  <div id ="right-b">
  <span style="font-size:20px;"><strong>Hostel and Room Number : </strong></span>
  					<div class="wrap-input100 validate-input m-b-36">
  						<span><strong style="font-size:30px;">
                <?php


               require 'db_connect.php';
               $stEnrNo =  $_SESSION["user"];
              $sql = "SELECT roomNo FROM gHos WHERE stEnrNo='$stEnrNo'";
              $result = $connection->query($sql);

              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      echo $row['roomNo'];
                  }
              } else {
                  echo "0 results";
              }

              $connection->close();
              ?>
</strong></span>
  					</div>
  </div>
	<div id = "rightbox">
                <div class="row">
    <div class="col">
	<a href="sdetails.php"><img border="0" src="img/myProfile.png" width="100" height="100"></a><br><h4>My Profile</h4>
	</div>
	<div class="col">
	<a href="viewnotice.php"><img border="0" src="img/notices.png" width="100" height="100"></a><br><h4>Notices</h4>
	</div>
	<div class="col">
	<a href="complain.php"><img border="0" src="img/complain.png" width="100" height="100"></a><br><h4>Complain</h4>
	</div>
            </div> </div>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
