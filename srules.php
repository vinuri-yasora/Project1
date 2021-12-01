<?php

  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Rules-UWU Hostel Management System</title>
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
/*footer css start*/
 .site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
/*footer css finish*/
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

 <li><a class="na" href="Home.html">Home</a></li>
  <li><a class="na" href="History.html">History</a></li>
  <li><a class="na" href="About.html">About</a></li>
  <li><a class="na" href="Staff.html">Staff</a></li>
  <li><a class="na" href="Contact.html">Contact</a></li>

  <li style="float:right"><a class="na" href="logout.php">Log Out</a></li>

</ul>
<div style="margin-left: 45px;">
  <h2 style="color: Black; text-align: center;text-decoration: underline;" ><B>Guidelines for Hostellers</B></h2>
   <p>These guidelines are framed to ensure  the smooth functioning of the Hostel and for the comfort,
   safty and security of the Hostellers.</p>
   <p>Therefore all the Hostellers are expected to obey the rules and regulations
   of the Hostel.</p>

   <h5 style="text-decoration:underline;"><B>Strictly prohibited and punishable offences</B></h5>
   <p>
     •  Smoking and consumption of alcoholic drinks and or narcotic drugs in the hostel premises is strictly prohibited.
      Students shall not enter the hostel premises in intoxicates state and should  not possess such materials.</p>
 <p>• Furniture ,  equipment , walls, doors, and windows in the rooms should not be damaged or defected.</p>

<p>• Having heaters ,cooking or being engages in any activity that would constitute fire hazards</p>
<P>• Hostellers must be attentive  not to make nay disturbance to others.</P>
<P>• No Hostellers shall entertain guests or non-resident students inside the room`.</P>

   <h5 style="text-decoration:underline;"><B>Hostel entry/Leave rules</B></h5>
   <P>•  No entry after 7.30 p.m. and no exit before 6.30 a.m. to the female hostels.</P>
<P>• No entry after 9.30.p.m and no exit before 5.00a.m to the male hostels.</P>
<P>• Hostellers staying out of the hostel for any reason at night(9.00 p.m. – 6.00.a.m.) must inform the Sub Warden and keep a record in the late pass register available at the office of Sub warden.</P>
<P>• Hostellers must inform the Sub Warden in written if they are to participate in a scheduled programme of the University at night.</P>


<h5 style="text-decoration:underline;"><B>General rules</B></h5>

<P>• It is advised that students maintain silence and discipline within hostel premises.</P>
<P>• All resident student must be appropriately dressed whenever they are in common areas of the hostel or visiting the office.</P>
<P>• Water resources should be used judiciously.</P>
<p>• Hostellers are expected to maintain the social harmony, protect the rights of fellow hostellers and behave in a manner that protects the image of Uva Wellassa University.</p>
<p>• Hostellers should cooperate with the Sub Warden and other staff to maintain a quality hostel life.</p>
<br>
<P><B>Those who do not comply with the above rules & regulations will be expelled from the hostels immediately without prior notification.</p>


<P><B>warden</B></P>



</div>

  <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Contact us</h6>


<P>The Library,<br>
Uva Wellassa University, Sri Lanka,<br>
Passara Road,<br>
Badulla - 90 000<br>
Sri Lanka.<br>

    Hot line: + 94 55 3 560114<br>
    Email: Hosteluwu@gmail.com</P>
          </div>



          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="about.html">About Us</a></li>
              <li><a href="contact.html">Contact Us</a></li>
              <li><a href="rules.html">Rules</a></li>
              <li><a href="complains.html">Complains</a></li>

            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text" style="text-align: center;">Copyright &copy; 20120 All Rights Reserved by
         <a href="#">Scanfcode</a>.
            </p>
          </div>


        </div>
      </div>
</footer>
</body>

</html>
