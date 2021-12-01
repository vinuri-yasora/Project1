<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>UWU Hostel Management System</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
<style>
.container-bge {
  border: 1px solid black;
  padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
  background-image: url("Formal-Powerpoint-Background-Photos-190x190.jpg");
  background-repeat: no-repeat;
  background-position: right top;
  background-attachment: fixed;
  background-size: 100% 100%;
}

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


</style>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <div class="container-bg1">
	<img src="maxresdefault.jpg" alt="UWU" style="float:right;width:150px;height:160px;">
	<img src="hostel-pngrepo-com.png" alt="UWU" style="float:left;width:90px;height:90px;">

      <center><h1>Uva Wellassa University</h1></center>
	  <center><h2>Hostels</h2></center>
	<br><br>
	</div>

	<div class="container-bg2">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
     <!-- Brand -->
     <a class="navbar-brand" href="img/logo.png><img src="img/logo.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
		</button>

   <div class="collapse navbar-collapse" id="collapsibleNavbar">
     <!-- Links -->
     <ul class="navbar-nav">
       <li class="nav-item">
         <a class="nav-link" href="#">About</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#">History</a>
       </li>

       <!-- Dropdown -->
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
           Staff
         </a>
         <div class="dropdown-menu">
           <a class="dropdown-item" href="reg.html">warden</a>
           <a class="dropdown-item" href="#">Sub Wardens</a>
           <a class="dropdown-item" href="#">Caretakers & Securities</a>
         </div>
		</li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
             Hostels
         </a>
         <div class="dropdown-menu">
           <a class="dropdown-item" href="#">Boys Hostels</a>
           <a class="dropdown-item" href="#">Girls Hostels</a>
         </div>
       </li>
     </ul>
   </div>
   </nav>
	</div>



                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="module message">
                                <div class="module-head">
                                    <h3>
                                        In-Out Details</h3>
                                </div>

                                <div class="module-body table">
                                    <table class="table table-message" border="1">
                                        <!-- <tbody> -->
                                            <tr class="heading">

                                                <td class="cell-author hidden-phone hidden-tablet">
                                                Entrollment Number
                                                </td>

                                                <td class="cell-title">
                                                    Status
                                                </td>

                                                <td class="cell-time align-right">
                                                    Date & Time
                                                </td>


                                            </tr>
                                              
                                                <?php
                                                 require 'db_connect.php';

                                                $sql = "SELECT * FROM inouts";
                                                $result = $connection->query($sql);

                                                if ($result->num_rows > 0) {
                                                    // output data of each row
                                                    while($row = $result->fetch_assoc()) {
                                                        echo "<tr><td>  ". $row["stEnrNo"]. "</td><td>". $row["status"]. "</td><td> " . $row["dt"] . "</td></tr>";
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
