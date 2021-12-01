<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>UWU Hostel Management System</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <div class="container">
      <center><h2>Uva Wellassa University Hostels</h2></center>

    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
     <!-- Brand -->
     <a class="navbar-brand" href="img/logo.png><img src="img/logo.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;"></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
   <div class="collapse navbar-collapse" id="collapsibleNavbar">
     <!-- Links -->
     <ul class="navbar-nav">
       <li style="float:right"><a class="na" href="log.php">Log Out</a></li>
    </nav>
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form action="checkincode.php" class="login100-form validate-form flex-sb flex-w" method="POST" role="form">
					<span class="login100-form-title p-b-32">
					       Check-In & Check-Out
					</span>
					<span class="txt1 p-b-11">
						 ENR.NO (If not a student NIC)
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = " ENR.NO is required">
						<input class="input100" type="text" name="stEnrNo" required>
						<span class="focus-input100"></span>
					</div>

          <div class="form-group">
              <label class="control-label col-sm-3">Going</label>
              <div class="col-sm-6">
                  <div class="row">
                      <div class="col-sm-4">
                          <label class="radio-inline">
                              <input type="radio" name="status" id="inRadio" value="in" required>IN
                          </label>
                      </div>
                      <div class="col-sm-4">
                          <label class="radio-inline">
                              <input type="radio" id="outRadio" name="status" value="out">OUT
                          </label>
                      </div>
                  </div>
                </div>
            </div>
            <iframe name="dt" src="http://free.timeanddate.com/clock/i736fbpm/n5364/fn17/fc03f/ahr/avb/ftb/tt0/tw0/tm1/th2/ts1/tb4" frameborder="0" width="108" height="36"></iframe>
            <button type="submit" class="btn btn-primary btn-block">Mark</button>


				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

</body>
</html>
