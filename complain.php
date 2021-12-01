<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location:log.php");
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
	<title>Complain-Uva Wellassa University</title>

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
  font-size: 30px;
}

.button {
  background-color: DodgerBlue;
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

table, th, td {
  border-collapse: collapse;
  float-align:center;
}
th, td {
  padding: 15px;
  text-align: left;
}
table tr:nth-child(even) {
  background-color: #eee;
}
table tr:nth-child(odd) {
 background-color: #fff;
}
table th {
  background-color: DodgerBlue;
  color: white;
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
</ul>

	</div><br>

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

<div style="align:center"><br>

				<div class="span9">
					<div class="content">

								<h3 style="text-align:center"><font color="blue"><strong>My Complains And Suggestions</strong></font></h3><hr><br>
								<table align="center" border="1">
  <thead>
    <tr>
      <th>Date & Time</th>
      <th>Complain</th>
      <th>Action taken by the administration</th>

    </tr>
  </thead>
  <tbody>


  <?php
  $user=$_SESSION['user'];
   $conn = mysqli_connect("localhost","root","" ,"hostel");
   if($conn-> connect_error){

     die("Connection failed :".$conn-> connect_error);
   }
   $sql = "SELECT *  from complains WHERE stEnrNo='$user'";
   $result = $conn-> query($sql);

   if($result-> num_rows > 0){
     while($row = $result-> fetch_assoc()){

?>
      <tr>
       <td> <?php echo $row["cdate"];?> </td>
      <td> <?php echo $row["discription"];?> </td>
      <td> <?php echo $row["action"];?> </td>



      </tr>


   <?php

     }
  }
?>
</tbody>



</table>



	</table><br><br>
								<h4>Submit New Complain or Suggestion : </h4>

                  <form action="complaincode.php" name="cmpform" method="POST" class="form-horizontal" role="form">
							<div class="module-body">
								<div class="stream-composer media">
									<a href="#" class="media-avatar medium pull-left">
										<img src="img/complain.png">
									</a>
									<div class="media-body">
										<div class="row-fluid">
                      <div class="form-group">
    <label for="inputlg"></label>
    <input class="form-control input-lg" id="inputlg" name="complain" type="text" required>
  </div><br>
										<div class="clearfix">

											<button type="submit" class="btn btn-primary btn-block">Add</button>
										</div>
									</div>
								</div>
              </form>
								<div class="stream-list">
									<div class="media stream new-update">
										<a href="#">
											<i class="icon-refresh shaded"></i>

										</a>
									</div>
									<div class="media stream">

										<div class="media-body">
											<div class="stream-headline">

												<div class="stream-text">

											  </div></div></div></div></div></div></div>


	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
