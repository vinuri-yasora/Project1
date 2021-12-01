<!--<?php
session_start();
	include('regi.php');
?>-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Registration-UWU Hostel Management System</title>
<style>
.container-bge {
  border: 1px solid black;
  padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
  background-image: url("img/Formal-Powerpoint-Background-Photos-190x190.jpg");
  background-repeat: no-repeat;
  background-position: right top;
  background-attachment: fixed;
  background-size: 100% 100%;
}

.container-bg1 {
background-color:black;
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

</ul>


	<div class="container-bge">
	<br>

            <form action="regi2.php" method="POST" class="form-horizontal" role="form"  oninput='password.setCustomValidity(password.value != password2.value ? "Passwords do not match." : "")'>
                <h3>Registration</h3>
				<br>

                <div class="form-group">
                    <label for="studentEnrNo class="col-sm-3 control-label">01. Student ENR.NO:</label>
                    <div class="col-sm-9">
                        <input type="text" id="stEnrNo" name="stEnrNo" placeholder="UWU/XYZ/##/###" class="form-control" autofocus required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="fullName class="col-sm-3 control-label">02. Full Name</label>                     <!--pattern="[A-Za-z]{3,}"-->
                    <div class="col-sm-9">
                        <input type="text" id="fullName" name="fullName" placeholder=" " class="form-control" autofocus >
                    </div>
                </div>

                <div class="form-group">
                    <label for="initial class="col-sm-3 control-label">03. Name with Initials</label>
                    <div class="col-sm-9">
                        <input type="text" id="initial" name="initial" placeholder="X.Y.Z.Dalpathadu " class="form-control" autofocus >
                    </div>)
                </div>

                <div class="form-group">
                    <label class="initial class="control-label col-sm-3">04. Gender</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" name="gender" value="Female">Female
                                </label>
                            </div>
							<div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" name="gender" value="Male">Male
                                </label>
                            </div>
						</div>
					</div>
				</div>

				<div class="form-group">
                    <label for="pAddress class="col-sm-3 control-label">05. Permrnent Address</label>
                    <div class="col-sm-9">
                        <input type="text" id="pAddress" name="pAddress" placeholder=" " class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tAddress class="col-sm-3 control-label">06. Temporary Address</label>
                    <div class="col-sm-9">
                        <input type="text" id="tAddress" name="tAddress" placeholder="if differ from permanent" class="form-control" autofocus>
                    </div>
                </div>

				<div class="form-group">
                    <label for="phone number"col-sm-3 control-label">07. Phone Number</label>
                    <ol type="I">
                                <li><div class="form-group">
                                      <label for="mobileNo="col-sm-3 control-label">Mobile Number : </label>
                                      <div class="col-sm-9">
                                        <!--  <input type="tel" id="mobile" name="mobile" placeholder="07########" class="form-control" autofocus> -->

                                        <input type="text" name="mobile" data-validation="number"
                                          data-validation-allowing="negative,number" input name="color"
                                          data-validation="number" datavalidation-ignore="$" required="required" class="form-control"
                                          id="phone_no" placeholder="Phone Number" maxlength="10" minlength="10" pattern="\d*">
                                      </div>
                                      </div></li>
								 <li><div class="form-group">
                                      <label for="landNo="col-sm-3 control-label">Home Number : </label>
                                      <div class="col-sm-9">
                                        <!--  <input type="tel" id="land" name="land" placeholder="" class="form-control" autofocus> -->
                                          <!--<input id="landnum" type="tel" pattern="^\d{4}-\d{3}-\d{4}$" required name="land" placeholder=""> -->
                                          <input type="text" name="land" data-validation="number"
                                            data-validation-allowing="negative,number" input name="color"
                                            data-validation="number" datavalidation-ignore="$" required="required" class="form-control"
                                            id="phone_no" placeholder="Phone Number" maxlength="10" minlength="10" pattern="\d*">
                                      </div>
                                      </div></li>
                </div>

                <div class="form-group">
                    <label for="closestTown="col-sm-3 control-label">08. Closest Town to the Residence</label>
                    <div class="col-sm-9">
                        <input type="text" id="closestTown" name="closestTown" placeholder=" " class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="district class="col-sm-3 control-label">09. District</label>
                    <div class="col-sm-9">
                        <input type="text" id="district" name="district" placeholder=" " class="form-control" autofocus>
                    </div>
                </div>

                        <div class="form-group">
                            <label for="disTown="col-sm-3 control-label">10. Distance to the Town(Km)</label>
                            <div class="col-sm-9">
                                <input type="number" id="disTown" name="disTown" placeholder="Distance to the Closest Town(km)" class="form-control" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="disUni="col-sm-3 control-label">11. Distance to University from Town(Km)</label>
                            <div class="col-sm-9">
                                <input type="number" id="disUni" name="disUni" placeholder="Distance to University from Closest Town(km)" class="form-control" autofocus>
                            </div>
							</div>
							<br>

				<div><h6>12. Family Income:</h6>

                              <ol type="I">
                                <li><div class="form-group">
                                      <label for="fName="col-sm-3 control-label">Father's Name:</label>
                                      <div class="col-sm-9">
                                          <input type="text" id="fName" name="fName" placeholder="" class="form-control" autofocus>
                                      </div>
                                      </div>
                                      <div class="form-group">
                                      <label for="fIncome="col-sm-3 control-label">Annual Income(Rs.):</label>
                                      <div class="col-sm-9">
                                          <input type="type" id="fIncome" name="fIncome" placeholder="" class="form-control" autofocus>
                                      </div>
									  </div>
                                </li>
                                <li><div class="form-group">
                                      <label for="mName="col-sm-3 control-label">Mother's Name:</label>
                                      <div class="col-sm-9">
                                           <input type="text" id="mName" name="mName" placeholder="" class="form-control" autofocus>
                                      </div>
                                      </div>
                                      <div class="form-group">
                                      <label for="mIncome="col-sm-3 control-label">Annual Income(Rs.):</label>
                                      <div class="col-sm-9">
                                           <input type="number" id="mIncome" name="mIncome" placeholder="" class="form-control" autofocus>
                                      </div>
                                      </div>
                                </li>
                               </ol>
                </div>

				<div class="form-group">
                    <label for="dis="col-sm-3 control-label">13. Diseases, disabilities or any special remark to be consider </label>
                    <div class="col-sm-9">
                        <input type="text" id="dis" name="dise" placeholder="Diseases, disabilities or any special remark to be consider" class="form-control" name= "dis">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email class="col-sm-3 control-label">14. Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" name= "email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password class="col-sm-3 control-label">15. Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password class="col-sm-3 control-label">16. Confirm Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="cPassword" name="password2" placeholder="Password" class="form-control">
                    </div>
                </div>



        <!-- /.form-group -->

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
				<div class = "button">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
				</div>
            </form> <!-- /form -->
			</div>

  </body>
</html>
