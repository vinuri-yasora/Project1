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
	<meta charset="utf-8">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/main.css">

	<title>View Profile-Uva Wellassa University</title>

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
  <li><a class="na" href="Home.html">Home</a></li>
  <li><a class="na" href="History.html">History</a></li>
  <li><a class="na" href="About.html">About</a></li>
  <li><a class="na" href="Staff.html">Staff</a></li>
  <li><a class="na" href="Contact.html">Contact</a></li>


  <li style="float:right"><a class="na" href="logout.php">Log Out</a></li>
</ul>

	</div>
	<br>
	<div id = "leftbox" align="center">
	<div class="row mx-lg-n5">
    <div class="col py-2 px-lg-4 border bg-light">
	<div class="wrapper">
	<div class="container">
	<div class="row">
	<div class="span3">
	<div class="sidebar">

	<ul class="widget widget-menu unstyled">
		<li class="active">
		<a href="studentprofile.php">
		<i class="menu-icon icon-dashboard"></i>
			Dashboard
		</a>
		</li>

    		<li>
    		<a href="sdetails.php">
    		<i class="menu-icon icon-tasks"></i>
    		My Details
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
		Suggestions and Complaints
		</a>
		</li>


		</ul><!--/.widget-nav-->
	</div> </div> </div> </div> </div> </div> </div> </div>

	<div class="container -5">
<div class="container c-3">
	<div id = "rightbox">

    <div class="limiter">
<!--		<div class="container-login100"> -->
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w">

				<div class="summary">
          <table class="table table-striped" border="1">
            <?php
             require 'db_connect.php';
             $stEnrNo =  $_SESSION["user"];
            $sql = "SELECT mobile,initial,fullName,gender,fName,pAddress,closestTown,tAddress,mobile,land,district,disTown,disUni,email,fIncome,mName,mIncome,disable FROM register WHERE stEnrNo='$stEnrNo'";
            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><th>Enroll No</th></tr><tr><td> ". $stEnrNo. "</td></tr><tr><th>Full Name</th></tr><tr><td>". $row["fullName"]. "</td></tr><tr><th>Name Initials</th></tr><tr><td>" . $row["initial"] ."</td></tr><tr><th>Gender</th></tr><tr><td>".$row["gender"]."</td></tr><tr><th>Permanent Address</th></tr><tr><td>". $row["pAddress"]."</td></tr><tr><th>Tempory Address</th></tr><tr><td>". $row["tAddress"]. "</td></tr><tr><th>Mobile Phone No</th></tr><tr><td>". $row["mobile"]."</td></tr><tr><th>Land Phone(Home) No</th></tr><tr><td>". $row["land"]."</td></tr><tr><th>Email</th></tr><tr><td>". $row["email"]. "</td></tr><tr><th>Closest Town to Residence</th></tr><tr><td>" . $row["closestTown"] ."</td></tr><tr><th>District</th></tr><tr><td>" . $row["district"] ."</td></tr><tr><th>Distance to Town From Residence(Km)</th></tr><tr><td>" . $row["disTown"] ."</td></tr><tr><th>Distance to University From Town(Km)</th></tr><tr><td>" . $row["disUni"] ."</td></tr><tr><th>Father's Name</th></tr><tr><td>" . $row["fName"] ."</td></tr><tr><th>Father's Income(Rs)</th></tr><tr><td>". $row["fIncome"]. "</td></tr><tr><th>Mother's Name</th></tr><tr><td>" . $row["mName"] ."</td></tr><tr><th>Mother's Income(Rs)</th></tr><tr><td>". $row["mIncome"]."</th></tr><tr><th>Diseases,disabilities & Any Special Remarks(Rs)</th></tr><tr><td>". $row["disable"]. "</td></tr>";
                }echo "</table>";
            } else {
                echo "0 results";
            }

            $connection->close();
            ?>

        </tr>


<!--    </tbody> -->
</table>
</div>
<div class="module-foot">
</div>
</div>
</div>
<!--/.content-->
</div>
<!--/.span9-->


<!--/.wrapper-->
<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>
