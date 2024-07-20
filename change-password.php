<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['msmsuid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['change']))
{
$userid=$_SESSION['msmsuid'];
$cpassword=md5($_POST['currentpassword']);
$newpassword=md5($_POST['newpassword']);
$query1=mysqli_query($con,"select ID from tbluser where ID='$userid' and   Password='$cpassword'");
$row=mysqli_fetch_array($query1);
if($row>0){
$ret=mysqli_query($con,"update tbluser set Password='$newpassword' where ID='$userid'");

echo '<script>alert("Your password successully changed.")</script>';
} else {
echo '<script>alert("Your current password is wrong.")</script>';

}



}


  ?>
<!doctype html>
<html lang="en">
  <head>
 

    <title>Mens's Salon Management System | Signup Page</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body id="home" style=" background-color: #D2B48C;">
<?php include_once('includes/header.php');?>

<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
<!-- disable body scroll which navbar is in active -->

<!-- breadcrumbs -->
<section class="w3l-inner-banner-main">
    <div style=" background-image: url('assets/new_images/home1.jpeg'); height:240px">
        <div class="container">   
            <div class="main-titles-head text-center"></br></br>
            <h3 class="header-name ">
                
 Change Password
            </h3>
            <p class="tiltle-para ">Step into Mr.Handsome, where top-tier grooming meets style and sophistication. Our expert barbers and stylists are dedicated to giving you the perfect look. Experience the best in men's grooming today!</p>
        </div>
</div>
</div>
<div class="breadcrumbs-sub" style="background-color:#EFEBE9">
<div class="container">   
<ul class="breadcrumbs-custom-path">
    <li class="right-side propClone"><a href="index.php" style=" color: #044368;" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
    <li class="active ">
        Change Password</li>
</ul>
</div>
</div>
    </div>
</section>
<!-- breadcrumbs //-->
<section class="w3l-contact-info-main" id="contact">
    <div class="contact-sec	">
        <div class="container">

            <div class="d-grid contact-view">
                <div class="cont-details">
                    <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                    <div class="cont-top">
                        <div class="cont-left text-center">
                            <span class="fa fa-phone" style="color:#993300"></span>
                        </div>
                        <div class="cont-right">
                            <h6 style="color:black">Call Us</h6>
                            <p class="para"><a href="tel:+44 99 555 42">+<?php  echo $row['MobileNumber'];?></a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-envelope-o" style="color:#993300"></span>
                        </div>
                        <div class="cont-right">
                            <h6 style="color:black">Email Us</h6>
                            <p class="para"><a href="mailto:example@mail.com" class="mail"><?php  echo $row['Email'];?></a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-map-marker" style="color:#993300"></span>
                        </div>
                        <div class="cont-right">
                            <h6 style="color:black">Address</h6>
                            <p class="para"> <?php  echo $row['PageDescription'];?></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-map-marker" style="color:#993300"></span>
                        </div>
                        <div class="cont-right">
                            <h6 style="color:black">Time</h6>
                            <p class="para"> <?php  echo $row['Timing'];?></p>
                        </div>
                    </div>
               <?php } ?> </div>
                <div class="map-content-9 mt-lg-0 mt-4">
                    <h3>Password change!!</h3>
                    <form method="post" name="changepassword" onsubmit="return checkpass();">

                        <div style="padding-top: 30px;">
                            <label>Current Password</label>
                            
                            <input type="password" class="form-control" placeholder="Current Password" id="currentpassword" name="currentpassword" value="" required="true"></div>
                           <div style="padding-top: 30px;">
                            <label>New Password</label>
                            
                            <input type="password" class="form-control" placeholder="New Password" id="newpassword" name="newpassword" value="" required="true">
                        </div>
                        <div style="padding-top: 30px;">
                            <label>Confirm Password</label>
                           <input type="password" class="form-control" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword" value=""  required="true">
                        <button type="submit" class="btn btn-contact" name="change"  style="background-color: #990033; color: white;">Save Change</button>
                    </form>
                </div>
    </div>
   
    </div></div>
</section>
<?php include_once('includes/footer.php');?>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top" style="background-color: #990033; color: white;">
	<span class="fa fa-long-arrow-up"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<!-- /move top -->
</body>

</html><?php } ?>